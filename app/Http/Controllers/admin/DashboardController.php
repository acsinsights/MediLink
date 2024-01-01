<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\File;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        $blogs = \Wink\WinkPost::count();
        $users= User::all();
        $messages= Message::all();
        $testimonials = Testimonial::all();
        return view('admin.dashboard', compact('blogs', 'users', 'testimonials','messages'));
    }
    public function profile()
    {
        $users = User::all();
        return view('admin.profile', compact('users'));
    }
}
