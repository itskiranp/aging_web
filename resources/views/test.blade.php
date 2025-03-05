<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')

@section('title', 'CVFS on Cognition and Aging in Nepal')
@section('content')

<!-- Video Background Section -->
<div class="container-fluid p-0 mb-5 video-background">
<video autoplay muted loop id="background-video">
<!-- Replace 'sample-video.mp4' with your actual video file -->
<source src="{{ asset('videos/final_backgroundvideo.mp4') }}" type="video/mp4">
Your browser does not support the video tag.
</video>
{{-- <div class="video-overlay">
<h1 class="text-white">Welcome to CVFS on Cognition and Aging in Nepal</h1>
<p class="text-white">Exploring the impact of cognition and aging in Nepal</p>
</div> --}}
</div>

<div class="container mb-3">
<h2>Study on Cognition and Aging in Nepal.</h2>
<p>{!! $homeContent->main_text !!}</p>
</div> 
<div class="container mb-5">
<h2>Why This Matters</h2>
<p>{!! $homeContent->why_this_matters !!}</p>
</div>

<section class="collaborators-section">
<div class="container">
<h2 class="text-center mb-5">Our Collaborators</h2>
<div class="position-relative">
<div class="collaborators-slider">
<div class="row">
@foreach (($homeContent->collaborators) as $collaborator)
<div class="col-md-4 col-sm-6 mb-4 mb-md-0">
<div class="collaborator-card">
<img src="{{ asset('storage/' . $collaborator) }}" alt="Collaborator" class="img-fluid mb-4 collaborator-card--img">
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>
</section>
@endsection
