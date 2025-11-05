<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('data');
    }

    public function requestData(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'affiliation' => 'nullable|string|max:255',
            'dataset' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:1000',
            
        ]);

        // Rename "message" to "user_message" to avoid collision
        $data = [
            'name' => htmlspecialchars($validated['name']),
            'email' => htmlspecialchars($validated['email']),
            'affiliation' => htmlspecialchars($validated['affiliation'] ?? ''),
            'dataset' => htmlspecialchars($validated['dataset'] ?? ''),
            'user_message' => htmlspecialchars($validated['message'] ?? ''),
        ];

        Mail::send('emails.request-data', $data, function ($mail) use ($data) {
            $mail->to('info.isernepal@gmail.com')
                ->subject('Data Access Request: ' . ($data['dataset'] ?: 'General'));
        });

        return back()->with('success', 'Your data request has been sent successfully!');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
