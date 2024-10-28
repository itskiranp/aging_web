<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'gallery of aging projects')

@section('content')

<div class="container my-5">
    <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb" class="d-flex justify-content-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
      </nav>
    <h1 class="text-center mb-5">Image Gallery</h1>
    <div class="row" id="gallery">
        <!-- Image 1 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal1">
                <img src="/images/gallery1.jpg" alt="Image 1" class="img-fluid rounded gallery-img">
            </a>
        </div>

        <!-- Image 2 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2">
                <img src="/images/gallery51.png" alt="Image 2" class="img-fluid rounded gallery-img">
            </a>
        </div>

        <!-- Image 3 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal3">
                <img src="/images/blood_sample3.JPG" alt="Image 3" class="img-fluid rounded gallery-img">
            </a>
        </div>

        <!-- Image 4 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal4">
                <img src="/images/gallery81.png" alt="Image 4" class="img-fluid rounded gallery-img">
            </a>
        </div>

        <!-- Image 5 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal5">
                <img src="/images/gallery7.png" alt="Image 5" class="img-fluid rounded gallery-img">
            </a>
        </div>

        <!-- Image 6 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal6">
                <img src="/images/Blood_sample2.JPG" alt="Image 6" class="img-fluid rounded gallery-img">
            </a>
        </div>

        <!-- Image 7 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal7">
                <img src="/images/gallery6.jpg" alt="Image 7" class="img-fluid rounded gallery-img">
            </a>
        </div>

        <!-- Image 8 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal8">
                <img src="/images/Blood_sample.JPG" alt="Image 8" class="img-fluid rounded gallery-img">
            </a>
        </div>
    </div>
</div>

<!-- Bootstrap Modal Template for Image 1 -->
<div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <img src="/images/gallery1.jpg" alt="Image 1" class="img-fluid rounded">
            </div>
           
            <div class="modal-footer">
                <h5 class="modal-title" id="imageModal1Label">Image 1</h5>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Repeat Modal for Each Image -->
<!-- Image Modal 2 -->
<div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <img src="/images/gallery51.png" alt="Image 2" class="img-fluid rounded">
            </div>
            <div class="modal-footer">
                <h5 class="modal-title" id="imageModal2Label">Image 2</h5>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Repeat similar modal structure for remaining images... -->





@endsection