<?php

/*
|--------------------------------------------------------------------------
| Service - Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for this service.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Services\Tour\Http\Controllers\TourController;

Route::group(['prefix' => 'tour'], function() {

    // The controllers live in src/Services/Tour/Http/Controllers
    // Route::get('/', 'UserController@index');

    Route::get('/', function() {
        return view('tour::welcome');
    });

    // Route::get('/tours', [TourController::class, 'index'])->name('tours');
    // Route::get('/tours/create', [TourController::class, 'create']);
    // Route::post('/tours/create', [TourController::class, 'store'])->name('tour.create');
    // Route::get('/tours/{tour}/details', [TourController::class, 'show'])->name('tour.details');
    // Route::get('/tours/{tours}/edit', [TourController::class, 'edit']);
    // Route::put('/tours/{tours}/edit', [TourController::class, 'update'])->name('tour.edit');
    // Route::delete('/tours/{tours}/delete', [TourController::class, 'destroy']);
});
    Route::get('/tours', [TourController::class, 'index'])->name('tour.index');
    Route::get('/tours/create', [TourController::class, 'create']);
    Route::post('/tours/create', [TourController::class, 'store'])->name('tour.create');
    Route::get('/tours/{tour}/details', [TourController::class, 'show'])->name('tour.details');
    Route::get('/tours/{tours}/edit', [TourController::class, 'edit']);
    Route::put('/tours/{tours}/edit', [TourController::class, 'update'])->name('tour.edit');
    Route::delete('/tours/{tours}/delete', [TourController::class, 'destroy']);
