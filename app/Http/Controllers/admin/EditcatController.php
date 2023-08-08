<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Musiccat;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class EditcatController extends Controller
{

    public function index($id)
    {

        $musiccats = Musiccat::findOrFail($id);
        return view('admin.editcat')->with('musiccats', $musiccats);
    }

    public function update(Request $request, $id)
    {
        $musiccats = Musiccat::findOrFail($id);
        if ($request->hasFile("musiccover")) {
            if (file::exists("/categories-img/music/" . $musiccats->musiccover)) {
                File::delete("/categories-img/music/" . $musiccats->musiccover);
            }
            $file = $request->file("musiccover");
            $musiccats->musiccover = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/categories-img/music/"), $musiccats->musiccover);
            $request['musiccover'] = $musiccats->musiccover;
        }

        $musiccats->update([
            "link" => $musiccats->link,
            "type" => $musiccats->type,
            "musiccover" => $musiccats->musiccover,
        ]);

        if ($request->hasFile("images")) {
            $files = $request->file("images");
            foreach ($files as $file) {
                $imagename = time() . "-" . $file->getClientOriginalName();
                $request["post_id"] = $id;
                $request["image"] = $imagename;
                $file->move(\public_path("images"), $imagename);
                Image::create($request->all());
            }
        }

        return redirect("/admin/music-cat");
    }

    public function destroy($id)
    {
        $musiccats = Musiccat::findOrFail($id);

        if (File::exists("/categories-img/music/" . $musiccats->musiccover)) {
            File::delete("/categories-img/music/" . $musiccats->musiccover);
        }
        $images = Image::where("post_id", $musiccats->id)->get();
        foreach ($images as $image) {
            if (File::exists("images/" . $image->musiccover)) {
                File::delete("images/" . $image->image);
            }
        }
        $musiccats->delete();
        return back();
    }

    public function deleteimage($id)
    {
        $images = Image::findOrFail($id);
        if (File::exists("images/" . $images->image)) {
            File::delete("images/" . $images->image);
        }

        Image::find($id)->delete();
        return back();
    }

    public function deletecover($id)
    {
        $cover = Musiccat::findOrFail($id)->musiccover;
        if (File::exists("/categories-img/music/" . $cover)) {
            File::delete("/categories-img/music/" . $cover);
        }
        return back();
    }
}
