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

    public function Research()
    {
        return view('Research');
    }

    public function publications()
    {
        return view('publications');
    }
    public function people()
    {
        return view('people');
        
    }
    public function links()
    {
        return view('links');
    }
    public function About()
    {
        return view('About');
    }

        // Method for Researcher page
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
        public function showBoardMember()
        {
            return view('people.board'); 
        }


}

