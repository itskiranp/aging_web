<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')
@section('title', 'Working Papers')
@section('content')
<div class="container my-4 mb-5">
    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
        <ol class="breadcrumb mt-3">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/products') }}">Publications</a></li>
            <li class="breadcrumb-item active" aria-current="page">Working Paper</li>
        </ol>
    </nav>

    <!-- Page Title -->
    <h1 class="gallery-title text-center">Working Papers</h1>

    <!-- Working Papers List -->
    <div class="col-12">
        <!-- <h2 class="section-header fs-4 fw-bold">2023</h2> -->

        <div class="presentation-card p-3 mb-3">
            <h5 class="fw-semibold mb-1">Major Depressive Disorder and Associated Factors Among Older Adults</h5>
            <div class="text-muted small mb-1">
                <span class="me-3"><i class="fas fa-user me-1"></i> Sharma et al.</span>
                <!-- <span><i class="fas fa-calendar-alt me-1"></i> Monthly webinar series at University of Michigan</span> -->
            </div>
            <!-- <p class="text-muted small mb-0"><i class="fas fa-clock me-1"></i> December 2023</p> -->
        </div>
        <div class="presentation-card p-3 mb-3">
            <h5 class="fw-semibold mb-1">Low Literacy and Late-Life Functional Health: Exploring Associations in a Low-Middle Income Country</h5>
            <div class="text-muted small mb-1">
                <span class="me-3"><i class="fas fa-user me-1"></i> Dhakal et al. </span>
                <!-- <span><i class="fas fa-calendar-alt me-1"></i> Monthly webinar series at University of Michigan</span> -->
            </div>
            <!-- <p class="text-muted small mb-0"><i class="fas fa-clock me-1"></i> December 2023</p> -->
        </div>
    </div>
    @endsection