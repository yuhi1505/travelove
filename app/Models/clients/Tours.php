<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tours extends Model
{
    use HasFactory;

    protected $table = 'tbl_tours';

    //Lấy tất cả tours
    public function getAllTours($perPage = 9)
    {

        $allTours = DB::table($this->table)->where('availability', 1)->paginate($perPage);
        foreach ($allTours as $tour) {
            // Lấy danh sách hình ảnh thuộc về tour
            $tour->images = DB::table('tbl_images')
                ->where('tourid', $tour->tourid)
                ->pluck('imageURL');
            // Lấy số lượng đánh giá và số sao trung bình của tour
            $tour->rating = $this->reviewStats($tour->tourid)->averageRating;
        }

        return $allTours;
    }
    //Lấy chi tiết tour
    public function getTourDetail($id)
    {
        $getTourDetail = DB::table($this->table)
            ->where('tourid', $id)
            ->first();

        if ($getTourDetail) {
            // Lấy danh sách hình ảnh thuộc về tour
            $getTourDetail->images = DB::table('tbl_images')
                ->where('tourid', $getTourDetail->tourid)
                ->limit(5)
                ->pluck('imageURL')
                ->toArray();

            // Lấy danh sách timeline thuộc về tour
            $getTourDetail->timeline = DB::table('tbl_timeline')
                ->where('tourid', $getTourDetail->tourid)
                ->get();
        }


        return $getTourDetail;
    }

    //Lấy khu vực đến Bắc - Trung - Nam
    function getDomain()
    {
        return DB::table($this->table)
            ->select('domain', DB::raw('COUNT(*) as count'))
            ->where('availability', 1)
            ->whereIn('domain', ['b', 't', 'n'])
            ->groupBy('domain')
            ->get();
    }

    //Filter tours
    public function filterTours($filters = [], $sorting = null, $perPage = null)
    {
        DB::enableQueryLog();

        // Khởi tạo truy vấn với bảng tours
        $getTours = DB::table($this->table)
            ->leftJoin('tbl_reviews', 'tbl_tours.tourid', '=', 'tbl_reviews.tourid') // Join với bảng reviews
            ->select(
                'tbl_tours.tourid',
                'tbl_tours.title',
                'tbl_tours.description',
                'tbl_tours.priceAdult',
                'tbl_tours.priceChild',
                'tbl_tours.time',
                'tbl_tours.destination',
                'tbl_tours.quantity',
                DB::raw('AVG(tbl_reviews.rating) as averageRating')
            )
            ->groupBy(
                'tbl_tours.tourid',
                'tbl_tours.title',
                'tbl_tours.description',
                'tbl_tours.priceAdult',
                'tbl_tours.priceChild',
                'tbl_tours.time',
                'tbl_tours.destination',
                'tbl_tours.quantity'
            );
        $getTours = $getTours->where('availability', 1);

        if (!empty($filters)) {
            foreach ($filters as $filter) {
                if ($filter[0] !== 'averageRating') {
                    $getTours = $getTours->where($filter[0], $filter[1], $filter[2]);
                }
            }
        }

        // Áp dụng điều kiện về averageRating trong phần HAVING
        if (!empty($filters)) {
            foreach ($filters as $filter) {
                if ($filter[0] === 'averageRating') {
                    $getTours = $getTours->having('averageRating', $filter[1], $filter[2]); // Sử dụng HAVING để lọc averageRating
                }
            }
        }

        if (!empty($sorting) && isset($sorting[0]) && isset($sorting[1])) {
            $getTours = $getTours->orderBy($sorting[0], $sorting[1]);
        }

        // Thực hiện truy vấn để ghi log
        $tours = $getTours->get();

        // In ra câu lệnh SQL đã ghi lại (nếu cần thiết)
        $queryLog = DB::getQueryLog();

        // Lấy danh sách hình ảnh cho mỗi tour
        foreach ($tours as $tour) {
            $tour->images = DB::table('tbl_images')
                ->where('tourid', $tour->tourid)
                ->pluck('imageURL');
            $tour->rating = $this->reviewStats($tour->tourid)->averageRating;
        }

        // dd($queryLog); // In ra log truy vấn nếu cần thiết
        return $tours;
    }

    public function updateTours($tourid, $data)
    {
        $update = DB::table($this->table)
            ->where('tourid', $tourid)
            ->update($data);

        return $update;
    }

    //Lấy detail tour đã đặt
    public function tourBooked($bookingid, $checkoutid)
    {
        $booked = DB::table($this->table)
            ->join('tbl_booking', 'tbl_tours.tourid', '=', 'tbl_booking.tourid')
            ->join('tbl_checkout', 'tbl_booking.bookingid', '=', 'tbl_checkout.bookingid')
            ->where('tbl_booking.bookingid', '=', $bookingid)
            ->where('tbl_checkout.checkoutid', '=', $checkoutid)
            ->first();

        return $booked;
    }


    //Tạo đánh giá về tours
    public function createReviews($data)
    {
        return DB::table('tbl_reviews')->insert($data);
    }

    //Lấy danh sách nội dung reviews 
    public function getReviews($id)
    {
        $getReviews = DB::table('tbl_reviews')
            ->join('tbl_user', 'tbl_user.userid', '=', 'tbl_reviews.userid')
            ->where('tourid', $id)
            ->orderBy('tbl_reviews.timestamp', 'desc')
            ->take(3)
            ->get();

        return $getReviews;
    }

    //Lấy số lượng đánh giá và số sao trung bình của tour
    public function reviewStats($id)
    {
        $reviewStats = DB::table('tbl_reviews')
            ->where('tourid', $id)
            ->selectRaw('AVG(rating) as averageRating, COUNT(*) as reviewCount')
            ->first();

        return $reviewStats;
    }

    //Kiểm tra xem người dùng đã đánh giá tour này hay chưa?

    public function checkReviewExist($tourid, $userid)
    {
        return DB::table('tbl_reviews')
            ->where('tourid', $tourid)
            ->where('userid', $userid)
            ->exists(); // Trả về true nếu bản ghi tồn tại, false nếu không tồn tại
    }

    // Search tours
    public function searchTours($data)
    {
        $tours = DB::table($this->table);


    //     // Thêm điều kiện cho destination với LIKE
        if (!empty($data['destination'])) {
            $tours->where('destination', 'LIKE', '%' . $data['destination'] . '%');
        }

        // Thêm điều kiện cho startDate và endDate nếu cần so sánh
        if (!empty($data['startDate'])) {
            $tours->whereDate('startDate', '>=', $data['startDate']);
        }
        if (!empty($data['endDate'])) {
            $tours->whereDate('endDate', '<=', $data['endDate']);
        }

    //     // Thêm điều kiện tìm kiếm với LIKE cho title, time và description
        if (!empty($data['keyword'])) {
            $tours->where(function ($query) use ($data) {
                $query->where('title', 'LIKE', '%' . $data['keyword'] . '%')
                    ->orWhere('description', 'LIKE', '%' . $data['keyword'] . '%')
                    ->orWhere('time', 'LIKE', '%' . $data['keyword'] . '%')
                    ->orWhere('destination', 'LIKE', '%' . $data['keyword'] . '%');
            });
        }

        $tours = $tours->where('availability', 1);
        $tours = $tours->limit(12)->get();

        foreach ($tours as $tour) {
            // Lấy danh sách hình ảnh thuộc về tour
            $tour->images = DB::table('tbl_images')
                ->where('tourid', $tour->tourid)
                ->pluck('imageURL');
            // Lấy số lượng đánh giá và số sao trung bình của tour
            $tour->rating = $this->reviewStats($tour->tourid)->averageRating;
        }
        return $tours;
    }

    //Get tours recommendation
    public function toursRecommendation($ids)
    {

        if (empty($ids)) {
    //         // Return an empty collection to avoid executing the query with an empty `FIELD` clause
            return collect();
        }

        $toursRecom = DB::table($this->table)
            ->where('availability', '1')
            ->whereIn('tourid', $ids)
            ->orderByRaw("FIELD(tourid, " . implode(',', array_map('intval', $ids)) . ")") // Chuyển tất cả các giá trị sang kiểu int và giữ thứ tự
            ->get();
        foreach ($toursRecom as $tour) {
            // Lấy danh sách hình ảnh thuộc về tour
            $tour->images = DB::table('tbl_images')
                ->where('tourid', $tour->tourid)
                ->pluck('imageURL');
            // Lấy số lượng đánh giá và số sao trung bình của tour
            $tour->rating = $this->reviewStats($tour->tourid)->averageRating;
        }

        return $toursRecom;
    }

    //Get tour có số lượng booking và hoàn thành nhiều nhất để gợi ý
    public function toursPopular($quantity)
    {
        $toursPopular = DB::table('tbl_booking')
            ->select(
                'tbl_tours.tourid',
                'tbl_tours.title',
                'tbl_tours.description',
                'tbl_tours.priceAdult',
                'tbl_tours.priceChild',
                'tbl_tours.time',
                'tbl_tours.destination',
                'tbl_tours.quantity',
                DB::raw('COUNT(tbl_booking.tourid) as totalBookings')
            )
            ->join('tbl_tours', 'tbl_booking.tourid', '=', 'tbl_tours.tourid')
            ->where('tbl_booking.bookingStatus', 'f') // Chỉ lấy các booking đã hoàn thành
            ->groupBy(
                'tbl_tours.tourid',
                'tbl_tours.title',
                'tbl_tours.description',
                'tbl_tours.priceAdult',
                'tbl_tours.priceChild',
                'tbl_tours.time',
                'tbl_tours.destination',
                'tbl_tours.quantity'
            )
            ->orderBy('totalBookings', 'DESC')
            ->take($quantity)
            ->get();


        foreach ($toursPopular as $tour) {
            // Lấy danh sách hình ảnh thuộc về tour
            $tour->images = DB::table('tbl_images')
                ->where('tourid', $tour->tourid)
                ->pluck('imageURL');
            // Lấy số lượng đánh giá và số sao trung bình của tour
            $tour->rating = $this->reviewStats($tour->tourid)->averageRating;
        }
        return $toursPopular;
    }

    //Get id search tours
    public function toursSearch($ids)
    {

        if (empty($ids)) {
            // Return an empty collection to avoid executing the query with an empty `FIELD` clause
            return collect();
        }

        $tourSearch = DB::table($this->table)
            ->where('availability', '1')
            ->whereIn('tourid', $ids)
            ->orderByRaw("FIELD(tourid, " . implode(',', array_map('intval', $ids)) . ")") // Chuyển tất cả các giá trị sang kiểu int và giữ thứ tự
            ->get();
        foreach ($tourSearch as $tour) {
            // Lấy danh sách hình ảnh thuộc về tour
            $tour->images = DB::table('tbl_images')
                ->where('tourid', $tour->tourid)
                ->pluck('imageURL');
            // Lấy số lượng đánh giá và số sao trung bình của tour
            $tour->rating = $this->reviewStats($tour->tourid)->averageRating;
        }

        return $tourSearch;
    }

}