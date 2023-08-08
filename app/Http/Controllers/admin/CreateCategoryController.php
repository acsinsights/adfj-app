<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateCategoryController extends Controller
{
    public function index(){
        return view('admin.createcategory');
    }


    public function store(Request $request)
    {
        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $categories =new Post([
                "category_name" =>$request->category,
            ]);
            $categories->save();
            }
        return redirect("admin.createcategory");
    }

    public function music_cat(){
        return view ('admin.music-cat');
    }
    public function video_cat(){
        return view ('admin.video-cat');
    }
    public function graphics_cat(){
        return view ('admin.graphics-cat');
    }


}
