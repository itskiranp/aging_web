<link rel="stylesheet" href="{{ asset('css/style.css') }}">


@extends('layout')

@section('title', 'Gallery of Aging Projects')

@section('content')
<div class="gallery-section">
    <div class="container">
        <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
        </nav>
        
        <h1 class="gallery-title text-center">Gallery</h1>
        
        <!-- Filter Buttons -->
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="training">Trainings</button>
            <button class="filter-btn" data-filter="meetings">Meetings</button>
            <button class="filter-btn" data-filter="survey">Surveys</button>
            <button class="filter-btn" data-filter="lab">Lab Work</button>
            <button class="filter-btn" data-filter="visitors">Guest Visits</button>

        </div>
        
        <!-- Gallery Grid -->
        <div class="gallery-container">
            @foreach($galleryItems as $index => $item)
                <div class="gallery-item" data-category="{{ $item->category }}">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal{{ $index }}">
                        <img src="{{ Storage::url($item->image_path) }}" alt="{{ $item->title }}" class="img-fluid gallery-img">
                        <div class="gallery-caption">
                            <h6>{{ $item->title }}</h6>
                            <small>Click to enlarge</small>
                        </div>
                    </a>
                </div>

                <!-- Modal for each image -->
                <div class="modal fade" id="imageModal{{ $index }}" tabindex="-1" aria-labelledby="imageModal{{ $index }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header border-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="{{ Storage::url($item->image_path) }}" alt="{{ $item->title }}" class="img-fluid rounded">
                            </div>
                            <div class="modal-footer border-0">
                                <h5 class="modal-title w-100 text-center" id="imageModal{{ $index }}Label">{{ $item->title }}</h5>
                                @if($item->description)
                                    <p class="text-center w-100">{{ $item->description }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection