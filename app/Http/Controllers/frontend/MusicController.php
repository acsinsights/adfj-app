<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('frontend/music')->with('posts', $posts);
    }
}
