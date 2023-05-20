<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PelatihanController;

Route::get('/', function () {
    return view('user.pages.dashboard.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.dashboard.index');
    })->name('dashboard');

    Route::resource('kategori', CategoryController::class);
    Route::resource('pelatihan', PelatihanController::class);
});
