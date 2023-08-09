<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AllPosts extends Controller
{
    public function index()
    {
        return view('admin.allposts');
    }
}
