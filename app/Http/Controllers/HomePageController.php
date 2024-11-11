<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePageContent;

class HomePageController extends Controller
{
    public function index()
    {
        // Fetch the content from the database
        $homeContent = HomePageContent::first(); // Assuming only one record

        return view('Index', compact('homeContent'));
    }
}
