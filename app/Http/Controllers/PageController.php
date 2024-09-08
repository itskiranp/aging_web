<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function investigators()
    {
        return view('investigators');
    }

    public function publications()
    {
        return view('publications');
    }
    public function links()
    {
        return view('links');
    }
    public function contact()
    {
        return view('contact');
    }

}
