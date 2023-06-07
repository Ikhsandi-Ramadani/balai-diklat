<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PelatihanController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

Route::prefix('/')->group(function () {
    Route::get('sertifikat', [DashboardController::class, 'sertifikat'])->name('user');
    Route::get('/login', [AuthController::class, 'login'])->name('user.login');
    Route::post('/login-post', [AuthController::class, 'postLogin'])->name('user.login-post');
    Route::get('/register', [AuthController::class, 'register'])->name('user.register');
    Route::post('/register-post', [AuthController::class, 'postRegistration'])->name('user.register-post');
    Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');

    Route::get('/', [FrontendController::class, 'home'])->name('user.home');
    Route::get('/pelatihan', [FrontendController::class, 'pelatihan'])->name('user.pelatihan');
    Route::get('/pelatihan/{slug}', [FrontendController::class, 'detail_pelatihan'])->name('user.detail-pelatihan');
    Route::get('/blog', [FrontendController::class, 'blog'])->name('user.blog');
    Route::get('/blog/{slug}', [FrontendController::class, 'detail_blog'])->name('user.detail-blog');

    Route::middleware('auth:peserta')->name('peserta.')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::put('dashboard/edit/{id}', [DashboardController::class, 'editProfil'])->name('dashboard-edit');
        Route::get('daftar/{slug}', [FrontendController::class, 'daftarPelatihan'])->name('daftar-pelatihan');
        Route::post('daftar', [FrontendController::class, 'postDaftarPelatihan'])->name('post-daftar');

        Route::get('cetak/{id}', [DashboardController::class, 'cetak'])->name('cetak');
        Route::get('sertifikat/{id}', [DashboardController::class, 'sertifikat'])->name('sertifikat');
    });
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminDashboardController::class, 'login'])->name('login');
    Route::post('/cek-login', [AdminDashboardController::class, 'cekLogin'])->name('cek-login');

    Route::middleware(['auth'])->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::resource('kategori', CategoryController::class);

        Route::get('pelatihan/peserta/{id}', [PelatihanController::class, 'peserta'])->name('pelatihan.peserta');
        Route::get('pelatihan/{id}/peserta/{peserta}', [PelatihanController::class, 'editPeserta'])->name('pelatihan.peserta.edit');
        Route::put('pelatihan/{id}/peserta/{peserta}', [PelatihanController::class, 'postEditPeserta'])->name('pelatihan.peserta.edit.post');
        Route::get('download/{peserta}', [PelatihanController::class, 'downloadPeserta'])->name('pelatihan.peserta.download');

        Route::resource('pelatihan', PelatihanController::class);
        Route::resource('blog', BlogController::class);

        Route::get('peserta', [AdminDashboardController::class, 'peserta'])->name('peserta.index');

        Route::get('/logout', [AdminDashboardController::class, 'logout'])->name('logout');
    });
});
