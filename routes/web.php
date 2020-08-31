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

Route::get('/', '\\' . \App\Http\Controllers\HomeController::class)
    ->name('home');

Route::get('/login','\\' . \App\Http\Controllers\AuthController::class . '@login')
    ->name('login');

Route::post('/login','\\' . \App\Http\Controllers\AuthController::class . '@check')
    ->middleware('guest');

Route::get('/logout','\\' . \App\Http\Controllers\AuthController::class . '@logout')
    ->name('logout')
    ->middleware('auth');

Route::get('/show', '\\' . \App\Http\Controllers\ShowController::class)
    ->name('show');

Route::get('/create', '\\' . \App\Http\Controllers\CreateController::class . "@form")
    ->name('create')
    ->middleware('auth');

Route::post('/create', '\\' . \App\Http\Controllers\CreateController::class . '@check')
    ->middleware('auth');

Route::get('/delete/{id?}', '\\' . \App\Http\Controllers\DeleteAdController::class)
    ->name('delete');

Route::get('/edit/{id?}', '\\' . \App\Http\Controllers\EditAdController::class . '@find')
    ->name('edit');

Route::post('/edit/{id?}', '\\' . \App\Http\Controllers\EditAdController::class . '@save')
    ->name('edit');

Route::get('/show/{id?}', '\\' . \App\Http\Controllers\ShowController::class)
    ->name('show');





