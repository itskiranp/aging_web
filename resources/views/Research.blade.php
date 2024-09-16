<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'Research')

@section('content')

    {{-- @extends('layouts.app') --}}

@section('content')
    <div class="container mt-5">

        <!-- Section 1: Full-width image with text overlay -->
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white">
                    <img src="{{ asset('images/background.JPG') }}" class="card-img overlay-image-blur" alt="Meditations"
                        height="300px">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center text-center">
                        <div>
                            <h1 class="card-title">Chitwan Valley Family
                                Study on Cognition and Aging in Nepal
                                (CVFS-SCAN)</h1>
                            <p class="card-text mb-5">
                                This longitudinal study investigates the cognitive decline and dementia
                                risks in older adults in the Chitwan Valley of Nepal, involving 4,000 participants and their
                                caregivers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2: Two-column layout with images and text -->
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card bg-dark text-white">
                    <img src="{{ asset('images/Blog1.jpg') }}" class="card-img overlay-image-blur" alt="Dr Joe's Blog" height="300px">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center text-center">
                        <div>
                            <h3 class="card-title">Blog 1</h3>
                            <p class="card-text">
                                Every two weeks, Dr Joe answers common questions, introduces new material, simplifies
                                complex ideas, and explains
                                the foundational teachings of this work.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card bg-dark text-white">
                    <img src="{{ asset('images/Blog2.jpg') }}" class="card-img overlay-image-blur" alt="New Research" height="300px">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center text-center">
                        <div>
                            <h3 class="card-title">New Research</h3>
                            <p class="card-text">
                                Discover new breakthroughs and insights in neuroscience, quantum physics, and epigenetics
                                that are driving
                                profound change and transformation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    {{-- <div class="card">
        <div class="card-header">
            <h2>Longitudinal Aging Study in Nepal - Summary</h2>
        </div>
        <div class="card-body">
            <p><strong>Study Overview:</strong> This longitudinal study investigates the cognitive decline and dementia
                risks in older adults in the Chitwan Valley of Nepal, involving 4,000 participants and their caregivers.</p>

            <h4>Key Objectives:</h4>
            <ul>
                <li>Build research capacity for Alzheimer's Disease and Related Dementias (ADRD).</li>
                <li>Develop a systematic population-based study on ADRD and aging in Nepal.</li>
                <li>Study the effects of labor migration and armed conflict on dementia risk.</li>
            </ul>

            <h4>Research Methods:</h4>
            <ul>
                <li><strong>Study Design:</strong> Longitudinal cohort study.</li>
                <li><strong>Population:</strong> 4,000 older adults (aged 50+) and their caregivers (aged 18+).</li>
                <li><strong>Sampling Technique:</strong> Stratified two-stage cluster sampling with oversampling for
                    specific ethnic groups.</li>
            </ul>

            <h4>Team Collaboration:</h4>
            <p>This study is conducted in collaboration with researchers from Nepal and major U.S. institutions, including
                ISER-Nepal and the University of Michigan.</p>

            <h4>Projected Timeline:</h4>
            <p>Full participation and data collection are expected to be completed by 2024.</p>
        </div>
    </div>
    </div> --}}
@endsection
