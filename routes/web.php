<?php

use App\Http\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;

Route::resource('materials', MaterialController::class);