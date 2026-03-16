<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

// PublicController
Route::get('/', [PublicController::class, 'home'])->name('home');

// TourController
Route::get('/toure/create', [TourController::class, 'create'])->name('tour.create')->middleware('auth');
Route::post('/toure/store', [TourController::class, 'store'])->name('tour.store')->middleware('auth');
Route::get('/tour/index',[TourController::class, 'index'])->name('tour.index');
Route::get('/tour/show/{tour}',[TourController::class, 'show'])->name('tour.show');
