<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{

    private $tours;


    public function __construct()
    {
        $this->tours = new Tours();
    }

    public function index(Request $request)
    {
        $title = 'Tours';
        $tours = $this->tours->getAllTours(9);
        $domain = $this->tours->getDomain();
        // dd($tours);
        $domainsCount = [
            'mien_bac' => DB::table('tbl_tours')->where('domain', 'b')->count(),
            'mien_trung' => DB::table('tbl_tours')->where('domain', 't')->count(),
            'mien_nam' => DB::table('tbl_tours')->where('domain', 'n')->count(),
        ];

        // Kiểm tra nếu yêu cầu là AJAX
        if ($request->ajax()) {
            return response()->json([
                'tours' => view('clients.partials.filters-tour', compact('tours'))->render(),
            ]);
        }
        $toursPopular = $this->tours->toursPopular(2);

        return view('clients.tour', compact('title', 'tours', 'domainsCount','toursPopular'));
    }

    //Xử lý filter tours
    public function filterTours(Request $req)
    {

        $conditions = [];
        $sorting = [];

        // Handle price filter
        if ($req->filled('minPrice') && $req->filled('maxPrice')) {
            $minPrice = $req->minPrice;
            $maxPrice = $req->maxPrice;
            $conditions[] = ['priceAdult', '>=', $minPrice];
            $conditions[] = ['priceAdult', '<=', $maxPrice];
        }

        // Handle domain filter
        if ($req->filled('domain')) {
            $domain = $req->domain;
            $conditions[] = ['domain', '=', $domain];
        }

        // Handle star rating filter
        if ($req->filled('star')) {
            $star = (int) $req->star;
            $conditions[] = ['averageRating', '=', $star];
        }

        // Handle duration filter
        if ($req->filled('time')) {
            $duration = $req->time;
            $time = [
                '3n2d' => '3 ngày 2 đêm',
                '4n3d' => '4 ngày 3 đêm',
                '5n4d' => '5 ngày 4 đêm'
            ];
            $conditions[] = ['time', '=', $time[$duration]];
        }

        // Handle orderby filter
        if ($req->filled('sorting')) {
            $sortingOption = trim($req->sorting); // Remove any whitespace

            // Handle sorting options
            if ($sortingOption == 'new') {
                $sorting = ['tourid', 'DESC']; // Sort by creation date, newest first
            } elseif ($sortingOption == 'old') {
                $sorting = ['tourid', 'ASC']; // Sort by creation date, oldest first
            } elseif ($sortingOption == "hight-to-low") {
                $sorting = ['priceAdult', 'DESC']; // Sort by price in descending order
            } elseif ($sortingOption == "low-to-high") {
                $sorting = ['priceAdult', 'ASC']; // Sort by price in ascending order
            }
        }

        // dd($conditions);
        $tours = $this->tours->filterTours($conditions, $sorting);

        // If not paginated, simulate pagination
        if (!$tours instanceof \Illuminate\Pagination\LengthAwarePaginator) {
            // Create a fake paginator (pagination for non-paginated collection)
            $tours = new \Illuminate\Pagination\LengthAwarePaginator(
                $tours, // Collection
                count($tours), // Total items
                9, // Per page
                1, // Current page
                ['path' => url()->current()] // Path for pagination
            );
        }

        return view('clients.partials.filters-tour', compact('tours'));

    }

}