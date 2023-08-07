<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Support\Facades\File;
class DashboardController extends Controller
{
    public function index()
    {
        $posts=Post::all();
        return view('admin.dashboard')->with('posts', $posts);
        // $admin = Auth::guard('admin')->user();
        // echo 'Welcome ' . $admin->name . ' <a href="' . route('admin.logout') . '">Logout</a>';
    }

    public function logout()
    {

        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
