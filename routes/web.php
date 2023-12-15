<?php

use App\Http\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;

Route::resource('materials', MaterialController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
