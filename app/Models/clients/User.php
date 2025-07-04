<?php
namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    protected $table = 'tbl_user';


    public function getUserId($username)
    {
        return DB::table($this->table)
            ->select('userid')
            ->where('username', $username)->value('userid');
    }
    public function getUser($id)
    {
        $users = DB::table($this->table)
            ->where('userid', $id)->first();

        return $users;
    }

    public function updateUser($id, $data)
    {
        $update = DB::table($this->table)
            ->where('userid', $id)
            ->update($data);

        return $update;
    }

    // public function getMyTours($id)
    // {
    //     $myTours =  DB::table('tbl_booking')
    //     ->join('tbl_tours', 'tbl_booking.tourid', '=', 'tbl_tours.tourid')
    //     ->join('tbl_checkout', 'tbl_booking.bookingId', '=', 'tbl_checkout.bookingId')
    //     ->where('tbl_booking.userid', $id)
    //     ->orderByDesc('tbl_booking.bookingDate')
    //     ->take(3)
    //     ->get();

    //     foreach ($myTours as $tour) {
    //         // Lấy rating từ tbl_reviews cho mỗi tour
    //         $tour->rating = DB::table('tbl_reviews')
    //             ->where('tourid', $tour->tourid)
    //             ->where('userid', $id)
    //             ->value('rating'); // Dùng value() để lấy giá trị rating
    //     }
    //     foreach ($myTours as $tour) {
    //         // Lấy danh sách hình ảnh thuộc về tour
    //         $tour->images = DB::table('tbl_images')
    //             ->where('tourid', $tour->tourid)
    //             ->pluck('imageURL');
    //     }

    //     return $myTours;
    // }
}