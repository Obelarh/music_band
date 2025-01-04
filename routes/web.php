<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\AddAdminController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/dashboard', function (){
//     return view('user.dashboard');
// });
Route::middleware('auth')->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [MusicController::class, 'index'])->name('dashboard');
    Route::get('/request', [UserController::class, 'musicrequest'])->name('musicrequest');
});

Route::middleware('guest')->group(function(){
    Route::post('/login', [UserController::class, 'login'])->name('login');
    Route::post('/signup', [UserController::class, 'signup'])->name('signup');
    Route::get('/login', [UserController::class, 'loginform'])->name('loginform');
    Route::get('/signup', [UserController::class, 'signupform'])->name('signupform');
    Route::get('/home', [UserController::class, 'homepage'])->name('homepage');
});

Route::get('/add_admin', [UserController::class, 'admin_form'])->name('admin_form');
Route::get('/add_music', [MusicController::class, 'music_form'])->name('music_form');
Route::post('/add_music',[MusicController::class, 'store'])->name('music.store');


Route::middleware('admin')->group(function () {

});



