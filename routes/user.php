<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\Modules\Page1\Page1Controller;

Route::get('user/register', [RegisterController::class, 'index'])->name('user.register'); 
Route::post('user/register', [RegisterController::class, 'store'])->name('user.register.post'); 
Route::get('/', [LoginController::class, 'index'])->name('user.login'); 
Route::post('user/login', [LoginController::class, 'checkLogin'])->name('user.login.post');
Route::get('user/logout', [LoginController::class,'logout'])->name('user.logout');

Route::group(['middleware' => 'user.auth'], function () {
    // User Dashboard
    Route::get('user/home', [DashboardController::class, 'index'])->name('user.home');
    Route::get('user/page1', [Page1Controller::class, 'index'])->name('user.page1');
});