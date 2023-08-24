<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminFeaturedPostController extends Controller
{
    public function update(Request $request, $id)
    {
        $stypes = Post::findOrFail($id);
        $stypes->update([
            "fstatus" => $request->fstatus,
        ]);

        return redirect('/admin/allposts')->with('success', 'Status updated successfully for ' . $stypes->title);
    }
}
