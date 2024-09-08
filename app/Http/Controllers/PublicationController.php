<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\publications;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = publications::all(); // Fetch all publications
        return view('publications', compact('publications')); // Pass the data to the view
    }
}
