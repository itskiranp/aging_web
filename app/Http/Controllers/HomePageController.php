<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePageContent;

class HomePageController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
