<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investigator;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
    
        // If there's no query, redirect back or show a message
        if (!$query) {
            return redirect()->back()->with('error', 'Please enter a search term.');
        }
    
        // Otherwise, proceed with search logic
        $results = Investigator::where('name', 'LIKE', "%{$query}%")
                    ->orWhere('position', 'LIKE', "%{$query}%")
                    ->orWhere('email', 'LIKE', "%{$query}%")
                    ->get();
    
        return view('search_results', ['results' => $results]);
    }
    
}
