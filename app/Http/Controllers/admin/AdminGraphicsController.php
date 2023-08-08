<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Graphicscat;
use Illuminate\Http\Request;

class AdminGraphicsController extends Controller
{
    public function index()
    {
        return view('admin.add-graphicscat');
    }
       public function store(Request $request)
    {
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("categories-img/graphics/"), $imageName);

            $post = new Graphicscat([
                "videocover" => $imageName,
                "link" => $request->link,
                "type" => $request->type,
            ]);
            $post->save();
        }
        return redirect('/admin/graphics-cat');
    }
}
