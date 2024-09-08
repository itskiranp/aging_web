<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')

@section('title', 'Publications')

@section('content')
    <div class="publications-container">
        <h1>Publications</h1>
        @foreach ($publications as $publication)
            <div class="publication-item">
                <h3>{{ $publication->authors }}</h3>
                <a href="{{ $publication->doi }}" target="_blank">{{ $publication->title }}</a>
                <em>{{ $publication->journal }}</em>, {{ $publication->volume_issue }}, {{ $publication->year }}.<br>
                </h3>
            </div>
        @endforeach
        <h1>Conference Posters</h1>
    </div>
@endsection
