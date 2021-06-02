<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tours', [TourController::class, 'index'])->name('tour.index');
Route::get('/tours/create', [TourController::class, 'create']);
Route::post('/tours/create', [TourController::class, 'store'])->name('tour.create');
Route::get('/tours/{tour}/details', [TourController::class, 'show'])->name('tour.details');
Route::get('/tours/{tours}/edit', [TourController::class, 'edit']);
Route::put('/t'ours/{tours}/edit, [TourController::class, 'update'])->name('tour.edit');
Route::delete('/tours/{tours}/delete', [TourController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
