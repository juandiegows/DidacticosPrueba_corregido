<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function show(string $slug): View
    {
        return view('blog', [
            'blog' => Blog::where('slug', $slug)->first()
        ]);
    }
    public function search(Request $request)
    {
        $date = $request->input('date');
        $blogs = Blog::whereDate('created_at', $date)->get();
        return view('welcome', ['blogs' => $blogs, 'date' => $date]);
    }
}
