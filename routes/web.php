<?php

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

Auth::routes(['register' => false]);


Route::resource('/product',\App\Http\Controllers\ProductController::class)->middleware('auth');
Route::resource('/massage',\App\Http\Controllers\MessageController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/',[\App\Http\Controllers\UserController::class,'index']);
Route::get('/{id}',[\App\Http\Controllers\UserController::class,'show'])->name('show');


