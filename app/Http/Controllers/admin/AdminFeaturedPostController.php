<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminFeaturedPostController extends Controller
{
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'featured_post' => 'required',
            'fstatus' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $posts = Post::find($id);

            if ($posts) {
                $posts->featured_post = $request->input('featured_post');
                $posts->fstatus = $request->input('fstatus');
                $posts->update();

                return response()->json([
                    'status' => 200,
                    'errors' => 'Updated Successfully' . $posts->title,
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'errors' => 'Not Found!',
                ]);
            }
        }
    }

    protected function featured(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'featured_post' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $posts = Post::find($id);

            if ($posts) {
                $posts->featured_post = $request->data == 1 ? "1" : '0';
                $posts->update();

                return response()->json([
                    'status' => 200,
                    'success' => 'Status Updated Successfully' . ' ' . $posts->title,
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'errors' => 'Not Found!',
                ]);
            }
        }
    }
}
