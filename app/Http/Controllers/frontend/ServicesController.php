<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return view('frontend.service')->with('posts', $posts);
    }
}
