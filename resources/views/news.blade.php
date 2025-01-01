<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'CVFS')

@section('content')
<main class="container my-4 mb-5">
    <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb" class="d-flex justify-content-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">News and Events</li>
          <li class="breadcrumb-item active" aria-current="page">News</li>
        </ol>
    </nav>

    <div class="card shadow-sm">
   
      <div class="card-body">
          <h1 class="card-title">{{ $news->title }}</h1>
          <p class="card-text text-muted small">{{ $news->published_at->format('M d, Y') }}</p>
          <p class="card-text">{!! $news->content !!}</p>
      

          <div class="container-fluid p-0 mb-5">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                @if(!empty($news->images) && is_array($news->images))
                    <div class="carousel-indicators">
                        @foreach ($news->images as $key => $image)
                            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="{{ $key }}" 
                                class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $key + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($news->images as $key => $image)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $image) }}" class="d-block w-100" alt="Image {{ $key + 1 }}">
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
                @else
                    <p>No images available.</p>
                @endif
            </div>
        </div>

  <div class="mt-4">
      <a href="{{ route('events') }}" class="btn btn-secondary">Back to News & Events</a>
  </div>

</main>
@endsection
