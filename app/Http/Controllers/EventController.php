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
        $news = News::latest()->paginate(3);
        return view('events', compact('news', 'events'));
    }
    public function showNews($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $news->images = $news->images ?? [];
        return view('news', compact('news'));
    }
}
