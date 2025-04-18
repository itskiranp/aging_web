<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'About')

@section('content')
    <div class="container my-5">
        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
          </nav>
        <div class="row">
            <div class="col-md-8 mb-4 mb-md-0">
                <h2 class="gallery-title text-center">About Our Project</h2>
                <div class="card">
                    
                    <div class="card-body">
                        <h2 class="text-start">International Labor Migration, Armed Conflict and Alzheimer Disease and
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
                    <a href="{{ route('connect') }}" class="btn btn-primary">Connect With Us</a>
                    <a href="{{ route('links') }}" class="btn btn-info">Documentation</a>
                    {{-- <a href="#" class="btn btn-success">Join Our Team</a> --}}
                    <a href="{{ route('feedback') }}" class="btn btn-outline-secondary">Website Feedback</a>
                </div>
                <div class="card mt-4 mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Stay Updated</h5>
                        <p class="card-text">Subscribe to our newsletter for the latest updates and features.</p>
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div>
                    <div class="map-container">
                        <div id="map" style="height: 45%; width: 100%;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9849.228324968473!2d84.37578462921785!3d27.65381230539688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fa3c167e33df%3A0xdc393700902f9460!2sInstitute%20for%20Social%20and%20Environmental%20Research-Nepal!5e1!3m2!1sen!2snp!4v1729080868135!5m2!1sen!2snp"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
