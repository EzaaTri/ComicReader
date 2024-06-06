<?php

use App\Http\Controllers\KomikController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('Home');
// });
// Route::get('/comic', function () {
//     return view('Comic');
// });

Route::get('/', [KomikController::class, 'index']);

// Route::get('/components/new-relase', function () {
//     return view('/components/new-relase');
// });

Route::get('/components/new-relase', [KomikController::class, 'new_relase']);
Route::get('/components/most-popular', [KomikController::class, 'most_popular']);
Route::get('/components/card2', [KomikController::class, 'card2']);
Route::get('/read-comic', [KomikController::class, 'read_comic']);
Route::get('/list-comic', [KomikController::class, 'list_comic']);
Route::get('/search-comic', [KomikController::class, 'search_comic']);
Route::get('/comic/{id}', [KomikController::class, 'comic']);
Route::get('/comic/{id}', [KomikController::class, 'show'])->name('comic');

// Route::resource('/comic', App\Http\Controllers\KomikController::class);