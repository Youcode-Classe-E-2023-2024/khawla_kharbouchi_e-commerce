<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\proController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(authController::class)->group(function (){
    Route::get('register','register')->name('register');
});
Route::controller(authController::class)->group(function (){
    Route::get('signin','signin')->name('signin');
});
Route::controller(proController::class)->group(function (){
    Route::get('product','product')->name('product');
});