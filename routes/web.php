<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioUserController;
use App\Http\Controllers\SinglePortfolio;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminBasicWebPage;
use App\Http\Controllers\Admin\AdminSingleBasicPage;
use App\Http\Controllers\Admin\PortfolioController;


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


Route::get('/' , [HomeController::class ,'index'])->name('/');


Route::get('contact', function () {
    return view('contact');
});

Route::get('portfolio_user' , [PortfolioUserController::class ,'index'])->name('portfolio_user');


// Single Portfolio
Route::get('single/{id}' , [SinglePortfolio::class , 'index'])->name('single');

// Send Info To Admin
Route::post('send-info' , [InfoController::class , 'store'])->name('send-info');
Route::post('contact' , [InfoController::class , 'contact'])->name('contact');

// Appointment
Route::post('/store' ,[AppointmentController::class , 'store'])->name('store-appointment');

// Admin
Route::get('/admin/login',[AdminLoginController::class , 'index'])->name('admin_login');
Route::post('/login-submit' , [AdminLoginController::class  , 'login_submit'])->name('admin_login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');


Route::middleware('admin:admin')->group(function () {
    Route::resource('admin' , AdminHomeController::class);
    Route::resource('basic-page' , AdminBasicWebPage::class);
    // Single Basic page
    Route::resource('single-basic-plan' , AdminSingleBasicPage::class);
    // Portfolio
    Route::resource('portfolio-admin', PortfolioController::class);
});
