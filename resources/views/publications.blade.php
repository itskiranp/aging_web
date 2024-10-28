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
    </div>
@endsection
