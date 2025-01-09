<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public $previousRoute;
    public function index()
    {
        $entries = Form::latest()->contact()->paginate(10);
        return view('admin.form-entries', compact('entries'));
    }

    public function show($id)
    {
        $form = Form::findOrFail($id);
        $this->previousRoute = url()->previous();
        // dd($this->previousRoute);
        if ($form) {
            return view('admin.form-entry', compact('form'));
        }
        return redirect()->route('contact.entries');
    }

    public function consultation()
    {
        $entries = Form::latest()->consultation()->paginate(10);
        return view('admin.consultations', compact('entries'));
    }

    public function destroy($id, $type)
    {
        $form = Form::findOrFail($id);
        $form->delete();

        if ($type == 'contact') {
            return redirect()->route('contact.entries')->with('success', 'Form entry deleted successfully');
        }
        return redirect()->route('consultation.entries')->with('success', 'Form entry deleted successfully');
    }
}
