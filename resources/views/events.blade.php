<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'News and Events')

@section('content')

    <div id="main-content" class="container my-5">
        <section id="latest-news" class="mb-5 ">
            <h2>Latest News</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1495020689067-958852a7765e" class="card-img-top"
                            alt="News article image">
                        <div class="card-body">
                            <h5 class="card-title">Breaking News Title</h5>
                            <p class="card-text">This is a short description of the breaking news article.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c" class="card-img-top"
                            alt="News article image">
                        <div class="card-body">
                            <h5 class="card-title">Latest Update</h5>
                            <p class="card-text">A brief overview of the latest update in the news.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://images.unsplash.com/photo-1585829365295-ab7cd400c167" class="card-img-top"
                            alt="News article image">
                        <div class="card-body">
                            <h5 class="card-title">Important Announcement</h5>
                            <p class="card-text">Details about an important announcement or news item.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="events" class="mb-5">
            <h2 class="mb-4">Upcoming Events</h2>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div id="calendar" class="bg-light p-3 rounded">
                        <h3 class="h5 mb-3">Event Calendar</h3>
                        <p> calendar</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Annual Tech Conference</h5>
                                <small>3 days away</small>
                            </div>
                            <p class="mb-1">Join us for our annual tech conference featuring industry leaders and innovative workshops.</p>
                            <small>Date: Sep 25, 2024 | Location: Convention Center</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Charity Fundraiser Gala</h5>
                                <small class="text-muted">1 week away</small>
                            </div>
                            <p class="mb-1">Support a great cause at our annual charity fundraiser gala. Enjoy dinner, music, and more.</p>
                            <small class="text-muted">Date: May 27, 2023 | Location: Grand Hotel</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Community Clean-up Day</h5>
                                <small class="text-muted">2 weeks away</small>
                            </div>
                            <p class="mb-1">Join your neighbors in keeping our community clean and beautiful. All supplies provided.</p>
                            <small class="text-muted">Date: June 3, 2023 | Location: City Park</small>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="event-details" class="mb-5">
            <h3 class="mb-4">Event Details</h3>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Annual Tech Conference</h4>
                    <p class="card-text">Join us for our annual tech conference featuring industry leaders and innovative workshops. This year's theme is "AI and the Future of Work." Don't miss out on networking opportunities and hands-on sessions with cutting-edge technologies.</p>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><strong>Date:</strong> Sep 25, 2024</li>
                        <li class="list-group-item"><strong>Time:</strong> 9:00 AM - 5:00 PM</li>
                        <li class="list-group-item"><strong>Location:</strong> Convention Center, 123 Main St, Anytown, USA</li>
                    </ul>
                    {{-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rsvpModal">RSVP Now</button> --}}
                </div>
            </div>
        </section>        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

@endsection
