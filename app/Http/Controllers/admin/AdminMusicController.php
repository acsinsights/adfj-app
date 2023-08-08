<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Musiccat;
use Illuminate\Http\Request;

class AdminMusicController extends Controller
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
            $file->move(\public_path("categories-img/music/"), $imageName);

            $post = new Musiccat([
                "musiccover" => $imageName,
                "link" => $request->link,
                "type" => $request->type,
            ]);
            $post->save();
        }
        return redirect('/admin/music-cat');
    }
}