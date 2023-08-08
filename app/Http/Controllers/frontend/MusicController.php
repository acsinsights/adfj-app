<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Musiccat;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        $musiccats = Musiccat::all();
        return view('frontend/music')->with('musiccats', $musiccats);
    }
}