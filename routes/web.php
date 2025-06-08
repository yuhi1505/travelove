<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clients\HomeController;
use App\Http\Controllers\clients\AboutController;
use App\Http\Controllers\clients\TourController;
use App\Http\Controllers\clients\PageController;
use App\Http\Controllers\clients\BlogController;
use App\Http\Controllers\clients\DestinationController;
use App\Http\Controllers\clients\BookingController;
use App\Http\Controllers\clients\ContactController;


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
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/tour', [TourController::class, 'index'])->name('tour');
Route::get('/page', [PageController::class, 'index'])->name('page');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/tour-detail', [TourController::class, 'detail'])->name('tour-detail');
Route::get('/404', function () {
    return view('clients.errors.404');
})->name('404');




