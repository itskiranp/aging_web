<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')

@section('title', 'Publications')

@section('content')
    <div class="container mt-5 mb-5">
        <nav aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Publications</li>
            </ol>
          </nav>
        <h1>Publications</h1>
        No publications yet.
        {{-- @foreach ($publications as $publication)
            <div class="publication-item">
                <p>{{ $publication->authors }}</p>
                <p><a href="{{ $publication->doi }}" target="_blank">{{ $publication->title }}</a>
                <em>{{ $publication->journal }}</em>, {{ $publication->volume_issue }}, {{ $publication->year }}.<br>
                </p>
            </div>
        @endforeach
        <h1>Conference Posters</h1>
        <ul>
            @foreach($conferences as $conference)
            <div class="Conference-item">
                <li>
                    <p>{{ $conference->authors }} ({{ $conference->year }})</p> 
                    <p><a href="{{ $conference->doi }}" target="_blank">{{ $conference->title }}</a>
                    <em>{{ $conference->journal }}
                    </p>
                </li>
            </div>
            @endforeach
        </ul> --}}

    </div>
@endsection 
