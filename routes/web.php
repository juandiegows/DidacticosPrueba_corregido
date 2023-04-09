<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome', ['blogs' => Blog::All(),  'date' => date('Y-m-s H:i:s')]);
Route::get('blog/{skug}', [BlogController::class, 'show']);
Route::get('search', [BlogController::class, 'search']);
Route::get('sign_in', [UserController::class, 'signIn']);
Route::Post('user/create', [UserController::class, 'create']);
