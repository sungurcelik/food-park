<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () { //as kısmı name için prefix, prefix ise route için prefix!!

    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});
