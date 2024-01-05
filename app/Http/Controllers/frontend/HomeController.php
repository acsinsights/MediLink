<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSubmitMail;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Testimonial;
use App\Models\WebsiteData;
use Illuminate\Support\Facades\File;
class HomeController extends Controller
{


    public function getWebsiteSettings()
    {
        $settings = WebsiteData::all();
        $data = [];
        foreach ($settings as  $setting) {
            $data[$setting->slug] =   $setting->value;
        }
        return $data;
    }

    public function index()
    {
        $testimonials = Testimonial::all();
        $data = $this->getWebsiteSettings();
        return view('frontend.home', compact( 'testimonials','data'));
    }
    public function appointment()
    {
        $data = $this->getWebsiteSettings();
        return view('frontend.appointment',compact('data'));

    }

    public function about()
    {
        $data = $this->getWebsiteSettings();
        return view('frontend.about',compact('data'));

    }
    public function blogs()
    {
        $data = $this->getWebsiteSettings();
        return view('frontend.blog.index',compact('data'));

    }
    public function treatment()
    {
        $data = $this->getWebsiteSettings();
        return view('frontend.treatment',compact('data'));
    }


    public function contact()
    {
        $data = $this->getWebsiteSettings();
        return view('frontend.contact',compact('data'));

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
        Mail::to(config('app.mail_to_address'))->send(new FormSubmitMail($form, 'Contact'));
        return back()->with('success', 'Form submitted successfully');
    }
    public function table()
    {
        return view('frontend.table');
    }
}
