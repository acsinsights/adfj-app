<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Image;
use App\Models\Offer;


class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        return view('admin.alloffer')->with('offers', $offers);
    }
    public function create()
    {
        return view('admin.add-offer');
    }


    public function store(Request $request)
    {
        if ($request->hasFile("offerimage")) {
            $file = $request->file("offerimage");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("offerimg/"), $imageName);

            $offers = new Offer([
                "offername" => $request->offername,
                "offerlink" => $request->offerlink,
                "offerimage" => $imageName,

            ]);
            $offers->save();
        }

        return redirect("/admin/alloffer")->with('success', 'Added Successfully');
    }

        // ?Edit function for offers
        public function edit($id)
        {
            $offers = Offer::findOrFail($id);
            return view('admin.editoffer')->with('offers', $offers);
        }
    // ?Update function for offers
    public function update(Request $request, $id)
    {   
        $post = Offer::findOrFail($id);

        if ($request->hasFile("offerimage")) {
            if (file::exists("offerimg/" . $post->offerimage)) {
                File::delete("offerimg/" . $post->offerimage);
            }
            $file = $request->file("offerimage");
            $post->offerimage = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/offerimg"), $post->offerimage);
            $request['offerimage'] = $post->offerimage;
        }



        $post->update([
            "offername" => $request->offername,
            "offerlink" => $request->offerlink,
            "offerimage" =>$post->offerimage,
        ]);
        return redirect("/admin/alloffer")->with('success', 'Updated Successfully');
    }


    public function destroy($id)
    {
        $posts = Offer::findOrFail($id);

        if (File::exists("offerimg/" . $posts->offerimage)) {
            File::delete("offerimg/" . $posts->offerimage);
        }
        $posts->delete();
        return back()->with('success', 'Deleted Successfully');
    }

    public function deletecover($id)
    {
        $offerimage = Offer::findOrFail($id)->offerimage;
        if (File::exists("offerimg/" . $offerimage)) {
            File::delete("offerimg/" . $offerimage);
        }
        return back();
    }

}
