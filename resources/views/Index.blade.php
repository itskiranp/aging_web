<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')

@section('title', 'CVFS on Cognition and Aging in Nepal')
@section('content')

    <div class="container-fluid p-0 mb-5 ">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach (($homeContent->carousel_images) as $key => $image)
                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="{{ $key }}" 
                        class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $key + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach (($homeContent->carousel_images) as $key => $image)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $image) }}" class="d-block w-100" alt="...">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
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
