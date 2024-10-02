<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investigator;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Get the search term from the request
        $query = $request->input('query');
        
        // Search the investigators table
        $results = Investigator::search($query)->get();

        // Pass the results to a search results view
        return view('search_results', compact('results'));
    }
}
