<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome', ['blogs' => Blog::All(),  'date' => date('Y-m-s H:i:s')])->name('home');
Route::get('blog/{skug}', [BlogController::class, 'show']);
Route::get('search', [BlogController::class, 'search']);
Route::get('sign_in', [UserController::class, 'signIn']);

Route::Post('user/create', [UserController::class, 'create']);
Route::get('dashboard/user', [UserController::class, 'index'])->middleware('auth');
Route::post('dashboard/user/{id}/activate', [UserController::class, 'activate'])->middleware('auth');
Route::post('dashboard/user/{id}/suspend', [UserController::class, 'suspend'])->middleware('auth');

Route::get('login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [UserController::class, 'loginPost']);
Route::get('logout', [UserController::class, 'logout'])->middleware('auth');
Route::view('dashboard', 'admin.dashboard')->middleware('auth');
