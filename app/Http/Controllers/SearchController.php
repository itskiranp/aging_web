<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investigator as InvestigatorModel;
use App\Models\Staff;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Staff as StaffModel;

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
        $investigators = InvestigatorModel::where('name', 'LIKE', "%{$query}%")
            ->orWhere('position', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->get();



        // Search Staff
        $staffs = StaffModel::where('name', 'LIKE', "%{$query}%")
            ->orWhere('position', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->get();


        // $results = StaffModel::where('name', 'LIKE', "%{$query}%")
        //     ->orWhere('position', 'LIKE', "%{$query}%")
        //     ->orWhere('email', 'LIKE', "%{$query}%")
        //     ->get();

        // $results = Staff::search($query)
        //     ->with([
        //         'queryBy' => 'name,position,email',
        //         'sortBy' => '_text_match:desc,id:desc',
        //     ])
        //     ->get();

        return view('search_results', [
            'investigators' => $investigators,
            'staffs' => $staffs,
        ]);
    }
}
