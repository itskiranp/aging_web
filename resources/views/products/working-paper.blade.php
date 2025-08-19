<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')
@section('title', 'Working Papers')
@section('content')
    <div class="container my-4 mb-5">
        <!-- Breadcrumb Navigation -->
        <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
            <ol class="breadcrumb mt-3">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/products') }}">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Working Paper</li>
            </ol>
        </nav>

        <!-- Page Title -->
        <h1 class="gallery-title text-center">Working Papers</h1>

        <!-- Working Papers List -->
        <div class="row">
            <!-- Paper 1 -->
            
            <!-- Paper 1: Major Depressive Disorder and Associated Factors Among Older Adults -->
            <div >
                <div >
                    <li class="paper-item mb-5" style="font-size: 1.2rem;">
                    Major Depressive Disorder and Associated Factors Among Older Adults, Sharma et al. <br></li>
                    <!-- <p class="paper-description">This study investigates the prevalence of Major Depressive Disorder (MDD) among older adults, identifying key risk factors such as social isolation, chronic illness, and lifestyle factors that contribute to its onset.</p> -->
                    <!-- <a href="{{ asset('papers/major_depressive_disorder.pdf') }}" class="btn btn-primary" download>Download Paper</a> -->
                    
                </div>
            </div>
        
            
        </div>
    </div>
@endsection
