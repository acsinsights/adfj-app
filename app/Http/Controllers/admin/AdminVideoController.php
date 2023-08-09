<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Videocat;
use Illuminate\Http\Request;

class AdminVideoController extends Controller
{
    public function index()
    {
        return view('admin.add-videocat');
    }

    public function store(Request $request)
    {
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("categories-img/video/"), $imageName);

            $post = new Videocat([
                "videocover" => $imageName,
                "link" => $request->link,
                "type" => $request->type,
            ]);
            $post->save();
        }
        return redirect('/admin/video-cat');
    }
}
