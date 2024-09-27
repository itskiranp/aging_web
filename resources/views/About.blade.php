<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'About')

@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-md-8 mb-4 mb-md-0">
                <h2 class="mb-4">About Our Project</h2>
                <div class="card">
                    {{-- <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Project workspace"> --}}
                    <div class="card-body">
                        <h2 class="text-center">International Labor Migration, Armed Conflict and Alzheimer Disease and
                            related Dementia Risk in Nepal</h2>
                        <h5 class="card-title">Our Goal</h5>
                        <p class="card-text">The main goal is to build research capacity and gather data to address and
                            prevent Alzheimer’s disease and related dementias (ADRD) in Nepal’s aging population.</p>
                        <h5 class="card-title">Specific Aims</h5>
                        <p class="card-text">This project focuses on understanding and addressing Alzheimer’s disease and
                            related dementias (ADRD) in Nepal, a growing concern due to the country’s aging population. The
                            study has three main objectives:
                        <ol>
                            <li>Build research capacity to study ADRD and other age-related health conditions by training in
                                cognitive assessments and statistical methods.</li>
                            <li>Conduct a population-based study of 4,000 adults over 50 years of age to gather data on
                                ADRD, with follow-up research.</li>
                            <li>Analyze the impact of key risk factors, including international labor migration and exposure
                                to political conflict, on the prevalence of ADRD.</li>
                        </ol>
                        </p>
                        <h5 class="card-title">Objective</h5>
                        <ol>
                            <li>Estimate the prevalence of ADRD and cognitive impairment and assess key risk factors.</li>
                            <li>Conduct a longitudinal study on aging-related health changes in older adults in Nepal.</li>
                            <li>Build expertise in analyzing complex longitudinal data.</li>
                        </ol>


                        <h5 class="card-title mt-4">Thematic area</h5>
                        <p class="card-text">Non communicable disease, Alzheimer disease and related dementias
                            (ADRD) and International out-migration</p>
                        <h5 class="card-title mt-4">Project Status/Duration</h5>
                        <p>Ongoing/5 years (2022-2027)</p>
                        {{-- <p class="card-text">Our team collaborates remotely, with our main research hub located in Chitwan,Nepal.</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="mb-4">Important Links</h2>
                <div class="d-grid gap-3">
                    <a href="#" class="btn btn-primary">Connect With Us</a>
                    <a href="{{ route('feedback') }}" class="btn btn-outline-secondary">Website Feedback</a>
                    <a href="{{ route('links') }}" class="btn btn-info">Documentation</a>
                    <a href="#" class="btn btn-success">Join Our Team</a>
                </div>
                <div class="card mt-4 mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Stay Updated</h5>
                        <p class="card-text">Subscribe to our newsletter for the latest updates and features.</p>
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div>
                    <div class="map-container">
                        <div id="map" style="height: 40%; width: 100%;"></div>
                        <div class="map-overlay ">
                            <h3>Study Location</h3>
                            <p>Chitwan District, Nepal</p>
                        </div>
                        <div class="map-error d-none alert alert-danger" role="alert">
                            Unable to load the map. Please check your internet connection and try again.
                        </div>
                    </div>
                    
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script>
                    
                    <script async
                        src="https://maps.gomaps.pro/maps/api/js?key=AlzaSy2ky9iiI63FurfccxQFYqdzr39DyfrW4GM&callback=initMap">
                    </script>
                    
                    <script>
                        function initMap() {
                            // Coordinates of the Chitwan District, Nepal
                            const chitwan = { lat: 27.68333, lng: 84.43333 };
                    
                            // Initialize the map, centered at Chitwan
                            const map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 10,
                                center: chitwan,
                                mapTypeId: 'roadmap'
                            });
                    
                            // Add a marker at Chitwan District
                            const marker = new google.maps.Marker({
                                position: chitwan,
                                map: map,
                                title: 'Chitwan District, Nepal'
                            });
                        }
                    
                        // Error handling for iframe map errors (if you use iframes elsewhere)
                        window.addEventListener('error', function(e) {
                            if (e.target.tagName === 'IFRAME') {
                                document.querySelector('.map-error').classList.remove('d-none');
                            }
                        }, true);
                    </script>

                </div>
            </div>
        </div>
    </div>
   
    
@endsection
