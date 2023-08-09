<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class AllPosts extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.allposts')->with('posts', $posts);
    }
}
