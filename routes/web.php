<?php

use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NickController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [IndexController::class, 'home']);
Route::get('/dich-vu', [IndexController::class, 'dichvu'])->name('dichvu'); // Tất Cả Dịch Vụ
Route::get('/dich-vu/{slug}', [IndexController::class, 'dichvucon'])->name('dichvucon'); // Dịch Vụ Con Thuộc Dịch Vụ
Route::get('/danh-muc-game/{slug}', [IndexController::class, 'danhmucgame'])->name('danhmucgame'); // Tất Cả Danh Mục
Route::get('/acc-game/{slug}', [IndexController::class, 'acc'])->name('danhmuccon'); // Dịch Vụ Con Thuộc Dịch Vụ
Route::get('/acc/{ms}', [IndexController::class, 'detail_acc'])->name('acc');
// Mã Số Acc
Route::get('/blogs', [IndexController::class, 'blogs'])->name('blogs');
Route::get('/post/{slug}', [IndexController::class, 'blogs_detail'])->name('blogs_detail');
// Videos
Route::get('/video-highlight', [IndexController::class, 'video_highlight'])->name('video-highlight');
// Modals Show Video
Route::post('/show_video', [IndexController::class, 'show_video'])->name('show_video');
// auth
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
// category
Route::resource('/category',  CategoryController::class);
// accessories
Route::resource('/accessories',  AccessoriesController::class);
// slider
Route::resource('/slider',  SliderController::class);
// blogs
Route::resource('/blog',  BlogController::class);
// videos
Route::resource('/video',  VideoController::class);
// nick game
Route::resource('/nick',  NickController::class);
// thư viện ảnh gallery
Route::resource('/gallery',  GalleryController::class);
Route::post('/choose_category', [NickController::class, 'choose_category'])->name('choose_category');
