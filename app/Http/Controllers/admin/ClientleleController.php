<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Image;
use App\Models\Clientlele;

class ClientleleController extends Controller
{
    public function index()
    {
        $clientleles = Clientlele::all();
        return view('admin.our-clientlele')->with('clientleles', $clientleles);
    }


    public function create()
    {
        return view('admin.add-clientlele');
    }

    public function store(Request $request)
    {
        if ($request->hasFile("clientimg")) {
            $file = $request->file("clientimg");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("clientleleimg/"), $imageName);

            $clientleles = new Clientlele([
                "clientname" => $request->clientelename,
                "clientimg" => $imageName,

            ]);
            $clientleles->save();
        }

        return redirect("/admin/our-clientlele")->with('success', 'Added Successfully');
    }

    // ?Edit function for posts
    public function edit($id)
    {
        $clientleles = Clientlele::findOrFail($id);
        return view('admin.edit-ourclientlele')->with('clientleles', $clientleles);
    }

    // ?Update function for posts
    public function update(Request $request, $id)
    {
        $post = Clientlele::findOrFail($id);
        if ($request->hasFile("clientimg")) {
            if (file::exists("clientleleimg/" . $post->clientimg)) {
                File::delete("clientleleimg/" . $post->clientimg);
            }
            $file = $request->file("clientimg");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("clientleleimg/"), $imageName);
            // $request['clientimg'] = $imageName;
        }
        $post->update([
            "clientname" => $request->clientelename,
            "clientimg" => $clientimg,
        ]);
        return redirect("/admin/our-clientlele")->with('success', 'Updated Successfully');
    }

    public function destroy($id)
    {
        $posts = Clientlele::findOrFail($id);

        if (File::exists("clientleleimg/" . $posts->clientimg)) {
            File::delete("clientleleimg/" . $posts->clientimg);
        }
        $posts->delete();
        return back()->with('success', 'Deleted Successfully');
    }

    public function deletecover($id)
    {
        $custimg = Clientlele::findOrFail($id)->custimg;
        if (File::exists("clientleleimg/" . $custimg)) {
            File::delete("clientleleimg/" . $custimg);
        }
        return back();
    }
}
