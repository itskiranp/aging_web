<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'Links')

@section('content')
    <div class="container mb-5 mt-5">
        <nav class="breadcrumb-nav mb-2 d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/About') }}">About</a></li>
                <li class="breadcrumb-item active" aria-current="page">Documentation</li>
            </ol>
        </nav>
        <!-- Links Section -->
        <div class="row links mt-2">
            <h1 class="gallery-title">Links</h1>
            <div class="col">
                <ul class="links-list">
                    <li><a href="#" >Chitwan Valley Family Study-Study on Cognition and Aging in Nepal (CVFS-SCAN)</a></li>
                    <li><a href="#" >NHRC Summary_10122022</a></li>
                    <li><a href="#" >Project Details</a></li>
                    <li><a href="#" target="_blank" >Longitudinal Aging Study in Nepal</a></li>
                </ul>
            </div>
            
        </div>
    </div>
@endsection
