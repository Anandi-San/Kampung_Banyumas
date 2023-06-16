<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminPotensiController;
use App\Http\Controllers\AdminProfilController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeBlogController;
use App\Http\Controllers\HomeContactController;






Route::get('/', [HomeController::class, 'index']);

// Route::get('/beranda', function () {
//     $data = [
//         'content' => 'home/beranda/index'
//     ];
//         return view('home.layout.wrapper', $data);
// });

Route::get('/profil', [HomeController::class, 'profil']);
Route::get('/potensi', [HomeController::class, 'potensi']);
Route::get('/blog', [HomeBlogController::class, 'index']);
Route::get('/blog/show/{id}', [HomeBlogController::class, 'show']);



Route::get('/kontak', [HomeContactController::class, 'index']);
Route::post('/kontak/send', [HomeContactController::class, 'send']);


Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin']);


//=======admin=======
Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/logout', [AdminAuthController::class, 'logout']);

    Route::get('/dashboard', [AdminDashboardController::class, 'index']);

    Route::get('/profil', [AdminProfilController::class, 'index']);
    Route::put('/profil/update', [AdminProfilController::class, 'update']);

    Route::resource('/posts/blog', AdminBlogController::class);
    Route::resource('/posts/kategori', AdminKategoriController::class);

    Route::resource('/pesan', AdminPesanController::class);
    Route::resource('/user', AdminUserController::class);
    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/potensi', AdminPotensiController::class);
});
