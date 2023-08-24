<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Testimonial;
use App\Models\Image;
use App\Models\Post;
use App\Models\Pservices;
use App\Models\Stypes;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial')->with('testimonials', $testimonials);
    }
    public function create()
    {
        return view('admin.addtestimonial');
    }

    public function store(Request $request)
    {
        if ($request->hasFile("cover")) {
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("testiimages/"), $imageName);

            $testimonials = new Testimonial([
                "custname" => $request->name,
                "custreview" => $request->review,
                "custimg" => $imageName,
                "custstar" => $request->star,
            ]);
            $testimonials->save();
        }

        return redirect("/admin/testimonial");
    }

    // ?Edit function for posts
    public function edit($id)
    {
        $testimonials = Testimonial::findOrFail($id);
        return view('admin.edittestimonial')->with('testimonials', $testimonials);
    }

    // ?Update function for posts
    public function update(Request $request, $id)
    {
        $post = Testimonial::findOrFail($id);
        if ($request->hasFile("cover")) {
            if (file::exists("posts/" . $post->media)) {
                File::delete("posts/" . $post->media);
            }
            $file = $request->file("cover");
            $post->media = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/testiimages"), $post->media);
            $request['cover'] = $post->media;
        }

        $post->update([
            "custname" => $request->custname,
            "custreview" => $request->custreview,
            "custimg" => $request->custimg,
            "custstar" => $request->custstar,
        ]);
        return redirect("/admin/testimonial");
    }

    public function destroy($id)
    {
        $posts = Testimonial::findOrFail($id);

        if (File::exists("testiimages/" . $posts->custimg)) {
            File::delete("testiimages/" . $posts->custimg);
        }
        $posts->delete();
        return back();
    }

    public function deletecover($id)
    {
        $custimg = Testimonial::findOrFail($id)->custimg;
        if (File::exists("testiimages/" . $custimg)) {
            File::delete("testiimages/" . $custimg);
        }
        return back();
    }
}
