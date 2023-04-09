<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome', ['blogs' => Blog::All()]);
Route::get('/blog/{skug}', [BlogController::class, 'show']);
