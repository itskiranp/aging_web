<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'News and Events')

@section('content')
@php
    use Illuminate\Support\Str;
@endphp

    <div id="main-content" class="container my-5">
        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">News & Events</li>
            </ol>
        </nav>

        <div class="container py-5">
            <h1 class="mb-4">Latest News</h1>
            
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($news as $newsItem)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            @if($newsItem->image_url)
                                <img src="{{ $newsItem->image_url }}" class="card-img-top" alt="{{ $newsItem->title }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $newsItem->title }}</h5>
                                <p class="card-text text-muted small">
                                    {{ $newsItem->published_at->format('M d, Y') }}
                                </p>
                                <p class="card-text">
                                    {!! Str::limit($newsItem->content, 100) !!}
                                </p>
                                <a href="{{ route('news.show', $newsItem) }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        
            <div class="d-flex justify-content-center mt-4">
                {{ $news->links('pagination::bootstrap-5') }}
            </div>
        </div>
        <section id="events" class="mb-5">
            <h2 class="mb-4">Upcoming Events</h2>
            <div class="row mb-3">
                <div class="col-md-7">

                    <div id="calendar-container" class="bg-light p-3 rounded">
                        <div class="calendar-header text-center mb-3">
                            <button class="btn btn-outline-secondary btn-sm me-2" id="prev-month">&lt;</button>
                            <span id="calendar-month" class="fw-bold">November 2024</span>
                            <button class="btn btn-outline-secondary btn-sm ms-2" id="next-month">&gt;</button>
                        </div>
                        <div class="calendar-days text-center text-secondary mb-3">
                            <span>Sun</span>
                            <span>Mon</span>
                            <span>Tue</span>
                            <span>Wed</span>
                            <span>Thu</span>
                            <span>Fri</span>
                            <span>Sat</span>
                        </div>
                        <div id="calendar" class="calendar-grid">
                            <!-- Calendar days will be inserted here by JavaScript -->
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h3 class="mb-3">Event List</h3>
                    <div id="event-list" class="list-group">
                    <!-- Event list will be dynamically inserted here by JavaScript -->
                    </div>
                </div>
            </div>
        </section>

        <section id="event-details" class="mb-5">
            <h3 class="mb-4">Event Details</h3>
            <div class="card">
                <div class="card-body" id="event-details-content">
                    <!-- Event details will be dynamically inserted here by JavaScript -->
                </div>
            </div>
            @php
                $formattedEvents = $events
                    ->map(function ($event) {
                        return [
                            'title' => $event->title,
                            'date' => $event->date->format('Y-m-d'), // Format date as Y-m-d
                            'description' => $event->description,
                            'short_description' => $event->short_description,
                            'location' => $event->location,
                            'time' => $event->time,
                        ];
                    })
                    ->toArray();
            @endphp
            <script>
                const events = @json($formattedEvents); // Make events data available to JavaScript

                document.addEventListener("DOMContentLoaded", function() {
                    // Your JavaScript code that interacts with the events
                    // e.g., renderCalendar(events), renderEventList(events);
                });
            </script>
        </section>
    </div>
@endsection
