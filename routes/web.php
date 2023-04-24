<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\BlogDetailsmController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('service-details', function () {
    return view('service-details');
});

Route::get('service', function () {
    return view('service');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('team', function () {
    return view('team');
});

Route::get('portfolio', function () {
    return view('portfolio');
});

Route::get('pricing', function () {
    return view('pricing');
});

Route::get('blog-full', function () {
    return view('blog-full');
});


// Send Info To Admin
Route::post('send-info' , [InfoController::class , 'store'])->name('send-info');
Route::post('contact' , [InfoController::class , 'contact'])->name('contact');

// Blog Detalis
Route::get('blog-details' , [BlogDetailsmController::class , 'index'])->name('blog-details');

