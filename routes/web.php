<?php

use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [\App\Http\Controllers\HomeController::class, 'homePage'])->name('home');
Route::get('/createPage', [\App\Http\Controllers\AnimeController::class, 'createAnimePage'])->name('createPage');
Route::post('/create', [\App\Http\Controllers\AnimeController::class, 'createNewAnime'])->name('newAnime');
Route::patch('/delete/{anime}/', [\App\Http\Controllers\AnimeController::class, 'deleteAnime'])->name('deleteAnime');
Route::patch('/update/{anime}/', [\App\Http\Controllers\AnimeController::class, 'updateAnime'])->name('updateAnime');
Route::get('/update/{anime}/page', [\App\Http\Controllers\AnimeController::class, 'updatePage'])->name('updatePage');
