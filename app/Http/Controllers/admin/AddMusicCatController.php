<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddMusicCatController extends Controller
{
    public function index(){
        return view('admin.add-musiccat');
    }
}
