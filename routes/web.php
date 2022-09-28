<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VcardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
Route::middleware('auth')->controller(UserController::class)->group(function(){
    Route::get('/','home')->name("home");
});

Route::controller(AuthController::class)->group(function(){
    Route::match(['get', 'post'], '/signup', "signup")->name("signup");
    Route::match(['get', 'post'], '/login', "login")->name("login")->middleware('guest');
    Route::match(['get', 'post'], '/logout', "userlogout")->name("logout");
    Route::match(['get', 'post'], '/adminlogin', "adminlogin")->name("adminlogin");
    Route::match(['get', 'post'], '/adminlogout', "adminlogout")->name("adminlogout");
});

Route::middleware('auth:admin')->controller(AdminController::class)->group(function(){
    Route::get('/admin','dashboard')->name('admin');
});

Route::resource('/vcard', VcardController::class);