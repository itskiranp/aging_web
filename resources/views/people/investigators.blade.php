<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')

@section('title', 'Investigators | CVFS–SCAN')
@section('meta')
<meta name="description" content="Meet the CVFS–SCAN research team — experts in aging, cognition, social science, and public health driving Nepal’s dementia research forward.">
<meta name="keywords" content="CVFS researchers, SCAN team, ISER Nepal researchers, dementia experts, cognition researchers, ISER-N CVFS-SCAN research team">
@endsection

@section('content')
<div class="container text-center my-5">
    <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('#') }}">People</a></li>
            <li class="breadcrumb-item active" aria-current="page">Investigators</li>
        </ol>
    </nav>


    <h2 class="mb-5 gallery-title">Investigators</h2>
    <div class="container">
        @foreach ($investigators as $investigator)
        <div class="row investigator mb-4">
            <!-- Investigator Image -->
            <div class="col-md-3 text-center">
                <img src="{{ Storage::url($investigator->image) }}" alt="{{ $investigator->name }}"
                    class="img-fluid">

            </div>
            <!-- Investigator Details -->
            <div class="col-md-9 text-start">
                <h5>{{ $investigator->name }}</h5>
                <p><strong>{{ $investigator->position }}</strong></p>
                <p><strong><i class="fas fa-phone"></i> {{ $investigator->phone }}</strong></p>
                <p><strong><i class="fa-solid fa-envelope"></i></strong> <a
                        href="mailto:{{ $investigator->email }}">{{ $investigator->email }}</a></p>
                <p>{!! $investigator->bio !!}</p>
                <p>{!! $investigator->description !!}</p>
                <a href="{{ Storage::url($investigator->profile_pdf) }} " class="btn btn-primary"
                    target="_blank">Download CV</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection