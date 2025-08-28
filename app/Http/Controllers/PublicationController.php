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
        return view('publication.journal', compact('publications'));
    }

    public function presentations()
    {
        return view('publication.presentations');
    }

    public function workingPaper()
    {
        return view('publication.working');
    }
}
