<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{



    public function index()
    {
        $posts = Post::all();
        return view('frontend.index')->with('posts', $posts);
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function audio()
    {
        return view('frontend.audio');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function getstarted()
    {
        return view('frontend.get-started');
    }

    public function graphics()
    {
        return view('frontend.graphics');
    }

    public function music()
    {
        $posts = Post::all();
        return view('frontend.music')->with('posts', $posts);
    }

    public function newsletter()
    {
        return view('frontend.newsletter');
    }

    public function pricing()
    {
        return view('frontend.pricing-plan');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function service()
    {
        $posts = Post::all();
        return view('frontend.service')->with('posts', $posts);
    }

    public function subscription()
    {
        return view('frontend.subscription');
    }

    public function terms()
    {
        return view('frontend.terms');
    }

    public function video()
    {
        return view('frontend.video');
    }
}
