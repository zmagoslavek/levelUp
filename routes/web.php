<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use GuzzleHttp\Middleware;

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

//Register

Route::get('/register',[RegisterController::class,'index'])
    ->name('register')
    ->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

//Dashboard

Route::get('/profile',[ProfileController::class,'index'])
    ->name('profile');
//Login
Route::get('/login',[LoginController::class,'index'])
    ->name('login')
    ->middleware('guest');
Route::post('/login',[LoginController::class,'store']);

//Logout

Route::post('/logout',[LogoutController::class,'store'])
    ->name('logout')
    ->middleware('auth');

Route::get('/', function () {
    return view('home');
})->name('home');
