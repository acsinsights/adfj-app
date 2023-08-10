<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Image;
use App\Models\Pservices;
use App\Models\Stypes;
use Illuminate\Support\Facades\File;

class CreateController extends Controller
{
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("cover/"), $imageName);

            $post = new Post([
                "title" => $request->title,
                "author" => $request->author,
                "location" => $request->location,
                "date" => $request->date,
                "media" => $imageName,
            ]);
            $post->save();
        }
        if ($request->hasFile("images")) {

            $files = $request->file("images");
            foreach ($files as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $request['post_id'] = $post->id;
                $request['image'] = $imageName;
                $file->move(\public_path("/images"), $imageName);
                Image::create($request->all());
            }
        }
        return redirect("/admin/dashboard");
    }

    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        $pservices = Pservices::all();
        $stypes = Stypes::all();
        return view('admin.edit')->with('posts', $posts)->with('pservices', $pservices)->with('stypes', $stypes);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        if ($request->hasFile("cover")) {
            if (file::exists("posts/" . $post->media)) {
                File::delete("posts/" . $post->media);
            }
            $file = $request->file("cover");
            $post->media = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/posts"), $post->media);
            $request['cover'] = $post->media;
        }

        $post->update([
            "title" => $request->title,
            "author" => $request->author,
            "location" => $request->location,
            "date" => $request->date,
            "media" => $post->media,
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

        return redirect("/admin/allposts");
    }

    public function destroy($id)
    {
        $posts = Post::findOrFail($id);

        if (File::exists("posts/" . $posts->media)) {
            File::delete("posts/" . $posts->media);
        }
        $images = Image::where("post_id", $posts->id)->get();
        foreach ($images as $image) {
            if (File::exists("images/" . $image->image)) {
                File::delete("images/" . $image->image);
            }
        }
        $posts->delete();
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
        $cover = Post::findOrFail($id)->media;
        if (File::exists("cover/" . $cover)) {
            File::delete("cover/" . $cover);
        }
        return back();
    }
}
