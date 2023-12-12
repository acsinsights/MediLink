<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
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
    public function table()
    {
        return view('frontend.table');
    }
}
