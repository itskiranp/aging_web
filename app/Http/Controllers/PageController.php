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

    public function study()
    {
        return view('study');
    }
    public function data()
    {
        return view('data');
    }

    public function publications()
    {
        return view('publications');
    }
    public function people()
    {
        return view('people');
    }
    // Method for People page
    public function showResearcher()
    {
        return view('people.researcher');
    }

    // Method for Staff page
    public function showStaff()
    {
        return view('people.staff');
    }

    // Method for Board Member page
    public function showInvestigatorMember()
    {
        return view('people.investigators');
    }

    public function links()
    {
        return view('links');
    }
    public function About()
    {
        return view('About');
    }

    // Method to display the feedback page
    public function showFeedback()
    {
        return view('feedback'); // Returns the feedback.blade.php view
    }
}
