<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function show(string $slug): View
    {
        return view('blog', [
            'blog' => Blog::where('slug', $slug)->first()
        ]);
    }
}
