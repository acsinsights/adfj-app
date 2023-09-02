<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request as FacadesRequest;

class DashboardController extends Controller
{
    protected function index()
    {
        $posts = Post::all();
        $users= User::all();
        return view('admin.dashboard', compact('posts', 'users'));
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
            if ($users->profile_img != 'profile_av.png') {
                if (file::exists("profile/" . $users->profile_img)) {
                    File::delete("profile/" . $users->profile_img);
                }
            }

            $file = $request->file("cover");
            $users->profile_img = time() . "_" . $file->getClientOriginalName();
            $file->move(\public_path("/profile"), $users->profile_img);
            $request['cover'] = $users->profile_img;
        }

    //    $users->update([
    //        "name" => $request->name,
    //        "email" => $request->email,
    //        "password" => Hash::make($request->password),
    //        "profile_img" => $users->profile_img != null ? "$users->profile_img" : 'profile_av.png',
    //    ]);


        $users->update([
            "name" => $request->name,
            "email" => $request->email,
            // "password" => Hash::make($request->password),
            "profile_img" => $users->profile_img != null ? "$users->profile_img" : 'profile_av.png',
        ]);

      
        return redirect("/admin/profile")->with('success', 'Profile Updated Successfully');
    }


    protected function updatepass(Request $request, $id)
    {


    //    $users->update([
    //        "name" => $request->name,
    //        "email" => $request->email,
    //        "password" => Hash::make($request->password),
    //        "profile_img" => $users->profile_img != null ? "$users->profile_img" : 'profile_av.png',
    //    ]);




            $request->validate([
                'current_password',
                'password' => ['confirmed']
            ]);

            $currentPasswordStatus = Hash::check($request->current_password, auth()->user()->password);
            if($currentPasswordStatus){

                User::findOrFail(Auth::user()->id)->update([
                    'password' => Hash::make($request->password),
                ]);

                return redirect()->back()->with('success','Password Updated Successfully');

            }else{

                return redirect()->back()->with('error','Current Password does not match with Old Password');
            }
        return redirect("/admin/profile")->with('success', 'Profile Updated Successfully');
    }

    protected function logout()
    {

        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
