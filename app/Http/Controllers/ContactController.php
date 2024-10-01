<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the contact form submission and send the message via email.
     */
    public function send(Request $request)
    {
        // Validate form inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Prepare the email data
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message_content' => $request->input('message'),
        ];

        try {
            // Send the email
            Mail::send('emails.contact', $data, function($message) use ($data) {
                $message->to('your-email@domain.com') // Replace with your email
                        ->subject('New Contact Message from ' . $data['name']);
            });

            // Flash a success message to the session
            return redirect()->back()->with('success', 'Thank you for your message! We will get back to you shortly.');

        } catch (\Exception $e) {
            // Handle email sending error
            return redirect()->back()->with('error', 'Sorry, there was an issue sending your message. Please try again later.');
        }
    }
}
