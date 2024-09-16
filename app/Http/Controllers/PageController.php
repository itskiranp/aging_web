<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function Index()
    {
        return view('Index');
    }

    public function Research()
    {
        return view('Research');
    }
    public function cvfs()
    {
        // This method only returns the view since the content is static in the Blade file
        return view('cvfs');
    }

    public function publications()
    {
        return view('publications');
    }
    public function links()
    {
        return view('links');
    }
    public function About()
    {
        return view('About');
    }

}

