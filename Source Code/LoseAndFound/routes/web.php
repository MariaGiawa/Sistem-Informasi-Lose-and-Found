<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FoundController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoseController;
use App\Http\Controllers\AdminHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
       return view('welcome');
});

Route::get('register', [UserController::class, 'register'])->name('register')->middleware('guest');;
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/history', [HomeController::class, 'history'])->name('history')->middleware('auth');
Route::get('/profile_user', [ProfileController::class, 'profile_user'])->name('profile')->middleware('auth');

Route::post('/hapusFound/{barangId}', 'App\Http\Controllers\PengumumanController@destroy_found');
Route::post('/hapusLose/{barangId}', 'App\Http\Controllers\PengumumanController@destroy_lose');

Route::resource('pengumuman_found', FoundController::class)->middleware('auth');
Route::resource('pengumuman_lose', LoseController::class)->middleware('auth');

Route::resource('home_admin', AdminHomeController::class)->except('show')->middleware('admin');

