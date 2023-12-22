<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\File;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {


        $users= User::all();
        $testimonials = Testimonial::all();
        return view('admin.dashboard', compact( 'users', 'testimonials'));
    }
    public function profile()
    {
        $users = User::all();
        return view('admin.profile', compact('users'));
    }
}
