<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('user.login');
})->name('user.login-page');
Route::get('lang/{lang}', [LocalizationController::class,'switchLang'])->name('lang');
Route::get('/log-out',[UserController::class,'logout'])->name('user.log-out');
Route::get('user-page',[PostController::class,'index'])->name('user.index');
Route::post('login',[UserController::class,'login'])->name('user.login');
Route::get('/create-page',[PostController::class,'create'])->name('post.create-page');
Route::post('/store',[PostController::class,'store'])->name('post.store');
Route::get('/show/{post}',[PostController::class,'show'])->name('post.show');
Route::get('/edit-page/{post}',[PostController::class,'editt'])->name('post.edit-page');
Route::view('/register-page','user.register')->name('user.register-page');
Route::post('/user-store',[UserController::class,'register'])->name('user.register');



