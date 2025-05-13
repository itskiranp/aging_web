<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')
@section('title', 'products')
@section('content')
    <div class="container my-4 mb-5">
        <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
            <ol class="breadcrumb mt-3">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
                <li class="breadcrumb-item active" aria-current="page">Policy Brief</li>
            </ol>
        </nav>

        <h1 class="gallery-title text-center">Policy Brief</h1>
    </div>
@endsection