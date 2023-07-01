<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Blog\PostContoller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['as' => 'auth.'], function () {
    Route::get('admin/register', [RegisterController::class, 'show'])->name('show-register');
    Route::get('admin/login', [LoginController::class, 'show'])->name('show-login');
    Route::post('admin/auth/register', [RegisterController::class, 'register'])->name('register');
    Route::post('admin/auth/login', [LoginController::class, 'login'])->name('login');
    Route::get('admin/auth/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['as' => 'admin.'], function () {
    Route::get('admin/dashboard/', [DashboardController::class, "show"])->name("show-dashboard");
});

Route::get('/', [HomeController::class, "index"])->name("index");
Route::get('detail-post/{post}', [PostContoller::class, "detailPost"])->name("detailPost");
