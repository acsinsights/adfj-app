<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Musiccat;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class MusicController extends Controller
{

    public function index()
    {
        return view('admin.add-musiccat');
    }

    public function store(Request $request)
    {
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("cover/"), $imageName);

            $post = new Musiccat([
                "music-cover" => $imageName,
                "link" => $request->link,
            ]);
            $post->save();
        }
        if ($request->hasFile("images")) {

            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request['post_id'] = $post->id;
                $request['image'] = $imageName;
                $file->move(\public_path("categories-img/music/"), $imageName);
                Image::create($request->all());
            }
        }
        return redirect("/admin/dashboard");
    }
}
