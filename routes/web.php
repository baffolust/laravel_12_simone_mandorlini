<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// PublicController
Route::get('/', [PublicController::class, 'home'])->name('home');

// A
