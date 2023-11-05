<?php

use App\Http\Controllers\HafizhohController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HafizhohController::class, 'index']);
Route::get('/movie/{id}', [HafizhohController::class, 'detail']);
Route::get('/movie/{code}/trailer', [HafizhohController::class, 'trailer']);


