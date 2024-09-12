<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function Cvfs()
    {
        return view('Cvfs');
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

