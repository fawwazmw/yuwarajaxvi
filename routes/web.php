<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\HomeAndIndex;

require __DIR__ . '/auth.php';

// Route untuk landing
Route::get('/landing', function () {
    return view('landing');  // Menampilkan view landing.blade.php
})->name('landing');

// Route untuk tentang
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

// Route untuk info-yuwa
Route::get('/info-yuwa', [HomeAndIndex::class, 'infoYuwa'])->name('infoYuwa');

Route::get('/info-yuwa-list', [HomeAndIndex::class, 'infoYuwaList'])->name('infoYuwaList');

Route::get('/info-yuwa-detail/{id}', [HomeAndIndex::class, 'infoYuwaDetail'])->name('infoYuwaDetail');


Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {
    Route::get('', [RoutingController::class, 'index'])->name('root');
    Route::get('/home', fn() => view('index'))->name('home');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');
    // Route::get('/home', [HomeAndIndex::class, 'index'])->name('home');
    // Route::get('/index', [HomeAndIndex::class, 'index'])->name('index');
});
