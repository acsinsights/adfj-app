<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Videocat;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class VideoeditcatController extends Controller
{

    public function index($id)
    {

        $videocats = videocat::findOrFail($id);
        return view('admin.videoeditcat')->with('videocats', $videocats);
    }

    public function update(Request $request,$id)
    {
     $videocats=videocat::findOrFail($id);
     if($request->hasFile("videocover")){
         if (file::exists("/categories-img/video/".$videocats->musiccover)) {
             File::delete("/categories-img/video/".$videocats->musiccover);
         }
         $file=$request->file("videocover");
         $videocats->musiccover=time()."_".$file->getClientOriginalName();
         $file->move(\public_path("/categories-img/video/"),$videocats->musiccover);
         $request['videocover']=$videocats->musiccover;
     }

        $videocats->update([

            "link"=>$videocats->link,
            "videocover"=>$videocats->videocover,
        ]);

        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imagename=time()."-".$file->getClientOriginalName();
                $request["post_id"]=$id;
                $request["image"]=$imagename;
                $file->move(\public_path("images"),$imagename);
                Image::create($request->all());
            }
        }

        return redirect("/admin/music-cat");
    }

    public function destroy($id)
    {
        $videocats=Videocat::findOrFail($id);

         if (File::exists("/categories-img/video/".$videocats->musiccover)) {
             File::delete("/categories-img/video/".$videocats->musiccover);
         }
         $images=Image::where("post_id",$videocats->id)->get();
         foreach($images as $image){
            if (File::exists("images/".$image->musiccover)) {
                File::delete("images/".$image->image);
            }
         }
         $videocats->delete();
         return back();
    }

    public function deleteimage($id){
        $images=Image::findOrFail($id);
        if (File::exists("images/".$images->image)) {
           File::delete("images/".$images->image);
        }

       Image::find($id)->delete();
       return back();
    }

    public function deletecover($id){
        $cover=videocat::findOrFail($id)->musiccover;
        if (File::exists("/categories-img/video/".$cover)) {
            File::delete("/categories-img/video/".$cover);
        }
        return back();
    }
}
