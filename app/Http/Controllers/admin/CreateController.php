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
    public function update(Request $request, $id)
    {
        $stypes = Stypes::findOrFail($id);
        $stypes->update([
            "stype_name" => $request->type,
            "slug" => $request->slug,
        ]);

        return redirect("/admin/add-type");
    }

    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();
        return back();
    }
}
