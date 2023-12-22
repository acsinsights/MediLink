<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmitMail;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Testimonial;
use Illuminate\Support\Facades\File;
class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('frontend.home', compact( 'testimonials'));
    }
    public function appointment()
    {
        return view('frontend.appointment');

    }
    public function service()
    {
        return view('frontend.service');
    }
    public function singleservice()
    {
        return view('frontend.singleservices');
    }
    public function about()
    {
        return view('frontend.about');

    }
    public function treatment()
    {
        return view('frontend.treatment');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function singleblog()
    {
        return view('frontend.singleblog');
    }
    public function contact()
    {
        return view('frontend.contact');

    }
    protected function contact_store(Request $request)
    {

        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "phone" => "required",
            "message" => "required",
        ]);

        $form = new Message([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "message" => $request->message,
        ]);

        $form->save();
        return back()->with('success', 'Form submitted successfully');
    }
    public function table()
    {
        return view('frontend.table');
    }
}
