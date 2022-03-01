<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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







Route::get('/greeting', function () {
    return 'Hello World';
});


Route::get('/user', [HomeController::class, 'index']);

Route::get('/forma', [HomeController::class, 'form']);
Route::post('/forma', [HomeController::class, 'sum']);



Route::get('/city', [HomeController::class, 'city']);
Route::get('/set_n', [HomeController::class, 'inputN'])->name('setN');
Route::post('/post_citiiouytretyuiouyhtres', [HomeController::class, 'inputCities'])->name('post_cities');
Route::post('/view_cities', [HomeController::class, 'showCities'])->name('view_cities');
