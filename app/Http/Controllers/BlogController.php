<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function show(string $slug): View
    {
        return view('blog', [
            'blog' => Blog::where('slug', $slug)->first()
        ]);
    }
    public function store(BlogPostRequest $request)
    {
        Blog::create([
            'title' => $request->input('title'),
            'slug' =>Str::slug( $request->input('title') ),
            'content' => $request->input('content'),
            'created_at' => now(),
            'user_id' => Auth::user()->id

        ]);
        return redirect('/');
    }
    public function search(Request $request)
    {
        $date = $request->input('date');
        $blogs = Blog::whereDate('created_at', $date)->get();
        return view('welcome', ['blogs' => $blogs, 'date' => $date]);
    }
}
