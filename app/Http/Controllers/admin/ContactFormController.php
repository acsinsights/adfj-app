<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        $entries = Form::latest()->paginate(10);
        return view('admin.form-entries', compact('entries'));
    }
}
