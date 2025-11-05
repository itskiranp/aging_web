<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Stichoza\GoogleTranslate\GoogleTranslate;
use App\Models\Investigator;
use App\Models\Staff;


class PageController extends Controller
{
    public function index()
    {
        return view('Index');
    }
    public function biomarkers()
    {
        return view('biomarkers');
    }
    // public function data()
    // {
    //     return view('data');
    // }

    public function publications()
    {
        return view('publications');
    }
    public function people()
    {
        return view('people');
    }
    // Method for People page

    // Method for Staff page
    // public function showStaff()
    // {
    //     return view('people.staff');
    // }

    // Method for Investigator page
    public function showInvestigatorMember()
    {
        return view('people.investigators');
    }

    public function links()
    {
        return view('links');
    }
    public function events()
    {
        return view('events');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function About()
    {
        return view('About');
    }

    // Method to display the feedback page
    public function showFeedback()
    {
        return view('feedback'); 
    }
    public function showConnect()
    {
        return view('connect'); 
    }

    public function showinterviewingMember()
    {
        return view('capacitybuilding.interviewing');
    }
    public function showspecificMember()
    {
        return view('capacitybuilding.specifictraining');
    }
    public function showdataMember()
    {
        return view('capacitybuilding.datatraining');
    }
    public function showciMember()
    {
        return view('capacitybuilding.ci');
    }
  


    public function investigators()
    {
        $investigators = Investigator::all();  // Fetch all investigators
        return view('people.investigators', compact('investigators'));
    }

    public function downloadPDF($id)
    {
        $investigator = Investigator::findOrFail($id);
        $media = $investigator->getFirstMedia('profile_pdf');

        if ($media) {
            return response()->download($media->getPath(), $media->file_name);
        }

        return redirect()->back()->with('error', 'PDF not found.');
    }
    public function showStaff()
    {
        $staffMembers = Staff::all(); // Fetch all staff data
        return view('people.staff', compact('staffMembers'));
    }
}
