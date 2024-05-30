<?php

use Illuminate\Support\Facades\Route;

Route::get('', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('detail', [\App\Http\Controllers\HomeController::class, 'detail'])->name('detail');

Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
Route::resource('admin/supirs', \App\Http\Controllers\Admin\SupirController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');