<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Musiccat;
use App\Models\Videocat;
use App\Models\Graphicscat;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class CreateCategoryController extends Controller
{
    public function index()
    {
        return view('admin.createcategory');
    }

    public function music_cat()
    {
        $music=Musiccat::all();
        return view('admin.music-cat')->with('musiccats', $music);
    }


    public function video_cat()
    {
        return view('admin.video-cat');
    }

    public function graphics_cat()
    {
        return view('admin.graphics-cat');
    }
}
