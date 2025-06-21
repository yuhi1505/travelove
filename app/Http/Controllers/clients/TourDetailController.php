<?php
namespace App\Http\Controllers\clients;

use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use App\Models\clients\Tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourDetailController extends Controller
{

    private $tours;

    public function __construct()
    {
        
        $this->tours = new Tours();
    }
    public function index($id = 0)
    {
        $title = 'Chi tiết tour ' . $id;
        $userid = Auth::id();

        $tourDetail = $this->tours->getTourDetail($id);
        // dd($tourDetail);
        //  return view('clients.tour-detail', compact('title', 'tourDetail'));
        $getReviews = $this->tours->getReviews($id);
        $reviewStats = $this->tours->reviewStats($id);

        $avgStar = round($reviewStats->averageRating);
        $countReview = $reviewStats->reviewCount;

        $checkReviewExist = $this->tours->checkReviewExist($id, $userid);
        if (!$checkReviewExist) {
            $checkDisplay = '';
        } else {
            $checkDisplay = 'hide';
        }

        
        // // Gọi API Python để lấy danh sách tour liên quan
        try {
            $apiURL = 'http://127.0.0.1:5555/api/tour-recommendations';
            $response = Http::get($apiURL, [
                'tour_id' => $id
            ]);

            if ($response->successful()) {
                $relatedTours = $response->json('related_tours');
            } else {
                $relatedTours = [];
            }
        } catch (\Exception $e) {
             // Xử lý lỗi khi gọi API
            $relatedTours = [];
            \Log::error('Lỗi khi gọi API liên quan: ' . $e->getMessage());
        }

        $id_toursRe = $relatedTours;

        $tourRecommendations = $this->tours->toursRecommendation($id_toursRe);
        // dd($tourRecommendations);    
        // dd($avgStar);

        return view('clients.tour-detail', compact('title', 'tourDetail', 'getReviews', 'avgStar', 'countReview', 'checkDisplay','tourRecommendations'));
    }

    public function reviews(Request $req)
    {
//         // dd($req);
        $userid = $this->getUserid();
        $tourid = $req->tourid;
        $message = $req->message;
        $star = $req->rating;

        $dataReview = [
            'tourid' => $tourid,
            'userid' => $userid,
            'comment' => $message,
            'rating' => $star
        ];

        $rating = $this->tours->createReviews($dataReview);
        if (!$rating) {
            return response()->json([
                'error' => true
            ], 500);
        }
        $tourDetail = $this->tours->getTourDetail($tourid);
        $getReviews = $this->tours->getReviews($tourid);
        $reviewStats = $this->tours->reviewStats($tourid);

        $avgStar = round($reviewStats->averageRating);
        $countReview = $reviewStats->reviewCount;

//         // Trả về phản hồi thành công
        return response()->json([
            'success' => true,
            'message' => 'Đánh giá của bạn đã được gửi thành công!',
            'data' => view('clients.partials.reviews', compact('tourDetail', 'getReviews', 'avgStar', 'countReview'))->render()
        ], 200);
    }
}
