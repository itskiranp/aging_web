<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\News;

class EventController extends Controller
{
    public function showEvents()
    {
        $events = Event::all(); // Retrieve all events
        $news = News::latest()->paginate(6);
        return view('events', compact('news', 'events'));
    }
    public function showNews($id)
    {
        $news = News::findOrFail($id); // Find the news by ID or throw 404
        $news->images = $news->images ?? []; 
        return view('news', compact('news'));
    }
}
