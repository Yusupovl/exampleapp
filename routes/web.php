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
