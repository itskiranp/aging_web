<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\publications;
use Illuminate\Http\Request;
use App\Models\Conference;


class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::all(); // Fetch all publications
        $conferences = Conference::all(); 
        return view('publications', compact('publications','conferences')); // Pass the data to the view

        
    }
}
