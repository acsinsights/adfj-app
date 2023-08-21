<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request as FacadesRequest;

class DashboardController extends Controller
{
    protected function index()
    {
        $posts = Post::all();
        return view('admin.dashboard')->with('posts', $posts);
        // $admin = Auth::guard('admin')->user();
        // echo 'Welcome ' . $admin->name . ' <a href="' . route('admin.logout') . '">Logout</a>';
    }

    protected function profile()
    {
        $users = User::all();
        return view('admin.profile')->with('users', $users);
    }

    protected function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        if ($request->hasFile("cover")) {
            if (file::exists("profile/" . $users->profile_img)) {
                File::delete("profile/" . $users->profile_img != 'profile_av.png');
            }

            $file = $request->file("cover");
            $users->profile_img = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/profile"), $users->profile_img);
            $request['cover'] = $users->profile_img;
        }

        $users->update([
            "name" => $request->name,
            "email" => $request->email,
            "profile_img" => $users->profile_img != null ? "$users->profile_img" : 'profile_av.png',
        ]);

        return redirect("/admin/profile");
    }

    protected function logout()
    {

        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
