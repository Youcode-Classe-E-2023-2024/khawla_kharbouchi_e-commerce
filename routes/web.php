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
Route::get('/dbcon', function () {
    return view('dbcon');
});

Route::controller(authController::class)->group(function (){
    Route::get('register','register')->name('register');
});
Route::post('/register',[authController::class,'registerPost'])->name('register');

Route::controller(authController::class)->group(function (){
    Route::get('signin','signin')->name('signin');
});
Route::post('/signin',[authController::class,'signinPost'])->name('signin');

Route::controller(proController::class)->group(function (){
    Route::get('product','product')->name('product');
});
Route::post('/product',[proController::class,'productPost'])->name('product');
Route::get('/product', [ProController::class, 'showProducts'])->name('products');
Route::post('product/{id}', [proController::class, 'remove'])->name('remove.product');
Route::get('edit/{id}', [proController::class, 'edit'])->name('edit.product');
Route::put('/product/update/{id}', [ProController::class, 'update'])->name('update.product');


