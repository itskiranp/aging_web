<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;


class PublicationController extends Controller
{
    public function index()
    {
        // Fetch all publications from the database
        $publications = Publication::all();
        
        // Pass the publications data to the view
        return view('publications', compact('publications'));
    }
}
