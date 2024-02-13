<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }

    public function about()
    {
        return view('website.home.about');
    }

    public function instructor()
    {
        return view('website.home.instructor');
    }

    public function notice()
    {
        return view('website.home.notice');
    }

    public function admission()
    {
        return view('website.home.admission');
    }

    public function admissionform()
    {
        return view('website.home.admissionform');
    }
    public function gallery()
    {
        return view('website.home.gallery');
    }
}
