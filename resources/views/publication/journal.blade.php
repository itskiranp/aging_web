<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')

@section('title', 'Publications | CVFS–SCAN')
@section('meta')
<meta name="description" content="Explore CVFS–SCAN publications and research outputs on aging, cognition, dementia, and social determinants of health in Nepal.">
<meta name="keywords" content="CVFS publications, SCAN research, Alzheimer’s papers, dementia studies, aging Nepal, ISER Nepal publications">
@endsection


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
    <h1 class="gallery-title text-center">Journal Articles</h1>


    <!-- Publication List -->
    
        @if($publications->isEmpty())
        <p>No publications yet.</p>
        @else
        @php
        // Group publications by year in descending order
        $groupedPublications = $publications->sortByDesc('year')->groupBy('year');
        @endphp

        @foreach($groupedPublications as $year => $publicationsInYear)
        <h3 class="mt-4 mb-3">{{ $year }}</h3>

        @foreach($publicationsInYear as $publication)
        <div class="publication-item mb-4 p-3 border-start border-4">
            <p>
                <strong>{{ $publication->authors }} ({{ $publication->year }}).</strong>
                {{ $publication->title }}.
                @if($publication->journal)
                <em>{{ $publication->journal }}</em>
                @if($publication->volume)
                , <em>{{ $publication->volume }}</em>
                @if($publication->issue)
                ({{ $publication->issue }})
                @endif
                @if($publication->pages)
                , {{ $publication->pages }}.
                @else
                .
                @endif
                @else
                .
                @endif
                @endif
            </p>
            <div class="mt-2">
                @if($publication->doi)
                <a href="https://doi.org/{{ $publication->doi }}" class="btn btn-primary btn-sm me-2" target="_blank">DOI</a>
                @endif
                @if($publication->url)
                <a href="{{ $publication->url }}" class="btn btn-secondary btn-sm me-2" target="_blank">URL</a>
                @endif
            </div>
        </div>
        @endforeach
        @endforeach
        @endif
   
</div>
@endsection