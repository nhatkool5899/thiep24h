<?php

use App\Http\Controllers\adminControler;
use App\Http\Controllers\danhmucController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\MaiController;
use App\Http\Controllers\sanphamController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[homeController::class, 'index']);
Route::get('/trang-chu',[homeController::class, 'index']);
Route::get('/admin',[adminControler::class, 'index']);
Route::get('/details-pd/{slug}',[homeController::class, 'details_pd']);
Route::get('/category-pd/{slug}',[homeController::class, 'category_pd']);

Route::post('/send-info',[MaiController::class, 'send']);

Route::get('/dashboard',[adminControler::class, 'index']);

Route::resource('/danhmuc', danhmucController::class);
Route::resource('/sanpham', sanphamController::class);
