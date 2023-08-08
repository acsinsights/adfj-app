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
    public function index(){
        return view('admin.createcategory');
    }




    public function music_cat(){
        return view ('admin.music-cat');
    }

    public function store1(Request $request)
    {
        if($request->hasFile("music-cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("categories-img/music/"),$imageName);

            $categories =new Musiccat([
                "music-cover" =>$request->category,
            ]);
            $categories->save();
            }
        return redirect("admin.createcategory");
    }




    public function video_cat(){
        return view ('admin.video-cat');
    }



    public function store2(Request $request)
    {
        if($request->hasFile("video-cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("categories-img/video/"),$imageName);

            $categories =new Videocat([
                "video-cover" =>$request->category,
            ]);
            $categories->save();
            }
        return redirect("admin.createcategory");
    }


    public function graphics_cat(){
        return view ('admin.graphics-cat');
    }

    public function store3(Request $request)
    {
        if($request->hasFile("graphics-cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("categories-img/graphics/"),$imageName);

            $categories =new Graphicscat([
                "graphics-cover" =>$request->category,
            ]);
            $categories->save();
            }
        return redirect("admin.createcategory");
    }



}
