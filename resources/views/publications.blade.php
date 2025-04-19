<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')

@section('title', 'Publications')

@section('content')
    <div class="container mt-5 mb-5">
        <!-- Breadcrumb Navigation -->
        <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Publication</li>
            </ol>
        </nav>

        <!-- Page Title -->
        <h1 class="gallery-title text-center">Publications</h1>

        <!-- Publication List -->
        @if($publications->isEmpty())
            <p>No publications yet.</p>
        @else
            @foreach($publications as $publication)
                <div class="publication-item mb-4 p-3 border-start border-4">
                    <p>
                        <strong>{{ $publication->authors }} ({{ $publication->year }}).</strong>
                        <a href="{{ $publication->url }}" class="publication-link">{{ $publication->title }}</a>
                        <em>{{ $publication->journal }}.</em>
                    </p>
                    <div class="mt-2">
                        @if($publication->doi)
                            <a href="{{ $publication->doi }}" class="btn btn-primary btn-sm me-2" target="_blank">DOI</a>
                        @endif
                        @if($publication->url)
                            <a href="{{ $publication->url }}" class="btn btn-secondary btn-sm me-2" target="_blank">URL</a>
                        @endif
                        <a href="#" class="btn btn-info btn-sm" target="_blank">CITE</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
