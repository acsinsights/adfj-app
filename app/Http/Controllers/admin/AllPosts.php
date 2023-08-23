<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pservices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Stypes;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class AllPosts extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(15);
        return view('admin.allposts')->with('posts', $posts);
    }

    public function featured()
    {
        $posts = Post::latest()->take(10)->get();
        return view('admin.featuredposts')->with('posts', $posts);
    }

    public function music()
    {
        $posts = Post::all();
        $pservices = Pservices::all();
        return view('admin.music')->with('posts', $posts)->with('pservices', $pservices);
    }

    public function video()
    {
        $posts = Post::all();
        return view('admin.video')->with('posts', $posts);
    }

    public function graphics()
    {
        $posts = Post::all();
        return view('admin.graphics')->with('posts', $posts);
    }

    public function type()
    {
        $stypes = Stypes::all();
        $pservices = Pservices::all();
        return view('admin.servicetype')->with('stypes', $stypes)->with('pservices', $pservices);
    }

    public function create()
    {
        $stypes = Stypes::all();
        $pservices = Pservices::all();
        return view('admin.addpost')->with('pservices', $pservices)->with('stypes', $stypes);
    }

    // ?Store function for posts
    public function store(Request $request)
    {
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("posts/"), $imageName);

            $post = new Post([
                "title" => $request->author,
                "author" => $request->author,
                "location" => $request->location,
                "date" => $request->date,
                "media" => $imageName,
                "serviceid" => $request->service,
                "stypeid" => $request->type,
                "status" => $request->playbtn == 1 ? "$request->playbtn" : '0',
                "hypelinks" => $request->videolink,
                "featured_post" => $request->featured,
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
        return redirect("/admin/allposts");
    }

    // ?Edit function for posts
    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        $pservices = Pservices::all();
        $stypes = Stypes::all();
        return view('admin.edit')->with('posts', $posts)->with('pservices', $pservices)->with('stypes', $stypes);
    }

    // ?Update function for posts
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
            "serviceid" => $request->service,
            "stypeid" => $request->type,
            "hypelinks" => $request->hypelinks,
            "featured_post" => $request->featured == 1 ? "$request->featured" : '0',
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

        if (File::exists("cover/" . $posts->cover)) {
            File::delete("cover/" . $posts->cover);
        }
        $posts->delete();
        return back();
    }

    public function deletecover($id)
    {
        $cover = Post::findOrFail($id)->cover;
        if (File::exists("cover/" . $cover)) {
            File::delete("cover/" . $cover);
        }
        return back();
    }

    public function addtype(Request $request)
    {
        $stypes = new Stypes([
            "stype_name" => $request->type,
            "slug" => $request->slug,
            "pservices_id" => $request->service,
        ]);
        $stypes->save();
        return redirect("/admin/add-type");
    }

    public function stypeedit($id)
    {
        $stypes = Stypes::findOrFail($id);
        $pservices = Pservices::all();
        return view('admin.stypesedit')->with('stypes', $stypes)->with('pservices', $pservices);
    }
}
