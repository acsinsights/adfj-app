<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
use App\Models\Pservices;
use App\Models\Stypes;
use App\Models\Testimonial;
use App\Models\Clientlele;
use App\Models\Form;
use App\Models\Offer;

use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        $testimonials = Testimonial::all();
        $clientleles = Clientlele::all();
        $offers = Offer::all();
        return view('frontend.index', compact('posts', 'testimonials', 'clientleles', 'offers'));
    }
    // {
    //     $posts = Post::latest()->take(10)->get();
    //     $testimonials = Testimonial::all();
    //     $clientleles = Clientlele::all();
    //     $offers = Offer::all();
    //     return view('frontend.index' ,compact('posts','testimonials','clientleles','offers'));
    // }

    public function about()
    {
        return view('frontend.about');
    }

    public function audio()
    {
        return view('frontend.audio');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function getstarted()
    {
        return view('frontend.get-started');
    }

    public function graphics()
    {
        $posts = Post::all();
        $stypes = Stypes::all();
        return view('frontend.graphics')->with('posts', $posts)->with('stypes', $stypes);
    }

    public function music()
    {
        $posts = Post::all();
        $stypes = Stypes::all();
        return view('frontend.music')->with('posts', $posts)->with('stypes', $stypes);
    }

    public function newsletter()
    {
        return view('frontend.newsletter');
    }

    public function pricing()
    {
        $offers = Offer::all();
        return view('frontend.pricing-plan')->with('offers', $offers);
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function service()
    {
        $posts = Post::all();
        return view('frontend.service')->with('posts', $posts);
    }

    public function subscription()
    {
        $posts = Post::all();
        $offers = Offer::all();
        return view('frontend.subscription', compact('posts', 'offers'));
    }

    public function terms()
    {
        return view('frontend.terms');
    }

    public function video()
    {
        $posts = Post::all();
        $stypes = Stypes::all();
        return view('frontend.video')->with('posts', $posts)->with('stypes', $stypes);
    }

    public function form_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required|max:200',
        ]);

        $form = new Form();
        $form->name = $request->name;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->message = $request->message;
        $form->save();

        return redirect()->back()->with('success', 'Your form has been submitted successfully');
    }

    public function consultation(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'city' => 'required',
            'company_name' => 'nullable|sometimes',
            'service' => 'required',
            'reference' => 'required',
            'attach_file' => 'nullable|sometimes|max:5100',
            'consultation' => 'nullable|sometimes'
        ]);

        $form  = new Form();
        $form->name = $request->name;
        $form->phone = $request->phone;
        $form->email = $request->email;
        $form->city = $request->city;
        $form->company_name = $request->company_name;
        $form->service = $request->service;
        $form->reference = $request->reference;
        $form->consultation = $request->consultation;

        if ($request->attach_file) {
            $file = $request->attach_file->store('consultation', 'public');
            $filename = 'storage/' . $file;
            $form->attach_file = $filename;
        }
        $form->form_type = 'consultation';
        $form->save();

        return redirect()->back()->with('success', 'Your form has been submitted successfully');
    }
}
