<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        $entries = Form::latest()->contact()->paginate(10);
        return view('admin.form-entries', compact('entries'));
    }

    public function show($id)
    {
        $form = Form::findOrFail($id);
        return view('admin.form-entry', compact('form'));
    }

    public function consultation()
    {
        $entries = Form::latest()->consultation()->paginate(10);
        return view('admin.consultations', compact('entries'));
    }
}
