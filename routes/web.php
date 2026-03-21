<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

// PublicController
Route::get('/', [PublicController::class, 'home'])->name('home');

// TourController
Route::get('/tour/create', [TourController::class, 'create'])->name('tour.create')->middleware('auth');
Route::post('/tour/store', [TourController::class, 'store'])->name('tour.store')->middleware('auth');
Route::get('/tour/index',[TourController::class, 'index'])->name('tour.index');
Route::get('/tour/show/{tour}',[TourController::class, 'show'])->name('tour.show');
Route::get('/tour/edit/{tour}', [TourController::class, 'edit'])->name('tour.edit')->middleware('auth');
Route::post('/tour/update/{tour}', [TourController::class, 'update'])->name('tour.update')->middleware('auth');
Route::delete('/tour/destroy/{tour}', [TourController::class, 'destroy'])->name('tour.destroy')->middleware('auth');

// TagController
Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create')->middleware('auth');
Route::post('/tag/store', [TagController::class, 'store'])->name('tag.store')->middleware('auth');