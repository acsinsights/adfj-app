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
        $musiccats=Musiccat::all();
        return view('admin.music-cat')->with('musiccats', $musiccats);
    }


    public function video_cat()
    {


        $videocats=Videocat::all();
        return view('admin.video-cat')->with('videocats', $videocats);
    }

    public function graphics_cat()
    {

        $graphicscats=Graphicscat::all();
        return view('admin.graphics-cat')->with('graphicscats', $graphicscats);
    }
}
