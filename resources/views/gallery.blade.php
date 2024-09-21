<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'gallery of aging projects')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-5">Image Gallery</h1>
    <div class="row" id="gallery">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a  data-lightbox="gallery" data-title="Image 1">
                <img src="/images/gallery1.jpg" alt="Image 1" class="img-fluid rounded gallery-img">
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a data-lightbox="gallery" data-title="Image 2">
                <img src="/images/gallery5.jpg" alt="Image 2" class="img-fluid rounded gallery-img">
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a data-lightbox="gallery" data-title="Image 3">
                <img src="/images/gallery4.png" alt="Image 3" class="img-fluid rounded gallery-img">
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a  data-lightbox="gallery" data-title="Image 4">
                <img src="/images/gallery8.png" alt="Image 4" class="img-fluid rounded gallery-img">
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a  data-lightbox="gallery" data-title="Image 5">
                <img src="/images/gallery7.png" alt="Image 5" class="img-fluid rounded gallery-img">
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a  data-lightbox="gallery" data-title="Image 6">
                <img src="/images/gallery3.jpg" alt="Image 6" class="img-fluid rounded gallery-img">
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a  data-lightbox="gallery" data-title="Image 7">
                <img src="/images/gallery6.jpg" alt="Image 7" class="img-fluid rounded gallery-img">
            </a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <a  data-lightbox="gallery" data-title="Image 8">
                <img src="/images/gallery2.png" alt="Image 8" class="img-fluid rounded gallery-img">
            </a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>





@endsection