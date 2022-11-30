<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function portofolio()
    {
        return view('landing.portofolio');
    }

    public function gallery()
    {
        return view('landing.gallery');
    }

    public function exhibitions()
    {
        return view('landing.exhibitions');
    }

    public function about()
    {
        return view('landing.about');
    }
}
