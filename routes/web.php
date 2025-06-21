<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\AboutController;
use App\Http\Controllers\clients\TourController;
use App\Http\Controllers\clients\TourDetailController;
use App\Http\Controllers\clients\PageController;
use App\Http\Controllers\clients\BlogController;
use App\Http\Controllers\clients\DestinationController;
use App\Http\Controllers\clients\BookingController;
use App\Http\Controllers\clients\ContactController;
use App\Http\Controllers\clients\TravelGuideController;
use App\Http\Controllers\clients\LoginController;
use App\Http\Controllers\clients\LoginGoogleController;
use App\Http\Controllers\clients\SearchController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);


Route::get('/about', [AboutController::class, 'index'])->name('about');


Route::get('/tour-sidebar', [TourController::class, 'sidebar'])->name('tour-sidebar');
Route::get('/tour-detail/{id?}', [TourDetailController::class, 'index'])->name('tour-detail');
Route::get('/filter-tours', [TourController::class, 'filterTours'])->name('filter-tours');

Route::get('/page', [PageController::class, 'index'])->name('page');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/faqs', [PageController::class, 'faqs'])->name('faqs');
Route::get('/404', function () {
    return view('clients.errors.404');
})->name('404');


Route::get('/blog', [BlogController::class, 'index'])->name('blog');


Route::get('/destination', [DestinationController::class, 'index'])->name('destination');


Route::get('/booking', [BookingController::class, 'index'])->name('booking');

Route::get('/travel-guide', [TravelGuideController::class, 'index'])->name('team');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('user-login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/activate-account/{token}', [LoginController::class, 'activateAccount'])->name('activate.account');


//login with google
Route::get('/auth/google', [LoginGoogleController::class, 'redirectToGoogle'])->name('login-google');
Route::get('/auth/google/callback', [LoginGoogleController::class, 'handleGoogleCallback']);

// Search
Route::get('/search', [SearchController::class, 'index'])->name('search');


// filter tours, get tours
Route::get('/tour', [TourController::class, 'index'])->name('tour');
Route::get('/filter-tours', [TourController::class, 'filterTours'])->name('filter-tours');
