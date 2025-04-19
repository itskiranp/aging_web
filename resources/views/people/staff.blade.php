<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'researcher')

@section('content')
<div class="container text-center my-5">
    <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('#') }}">People</a></li>
            <li class="breadcrumb-item active" aria-current="page">Staff</li>
        </ol>
    </nav>
    <h2 class="gallery-title">Staff</h2>
    <div class="row justify-content-center">
        @foreach ($staffMembers as $staff)
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="{{ Storage::url($staff->image) }}" alt="{{ $staff->name }}"
                        class="img-fluid rounded-circle mb-3">
                    <h3>{{ $staff->name }}</h3>
                    <p class="position">{{ $staff->position }}</p>
                    
                    <!-- Only show Email and CV for the first 9 staff members -->
                    @php
                        $maxDisplayCount = 8; // You can adjust this number as needed
                        $staffCounter = $loop->index + 1; // $loop->index starts from 0, so we add 1
                    @endphp

                    @if($staffCounter <= $maxDisplayCount)
                        <p><a href="mailto:{{ $staff->email }}">Email</a></p>
                        <p><a href="{{ Storage::url($staff->cv_link) }}" target="_blank">Curriculum Vitae</a></p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
