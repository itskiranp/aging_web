<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'CVFS on Cognition and Aging in Nepal')
@section('content')
<div class="container mt-4 mb-5">
    <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('#') }}">Capacity Building</a></li>
            <li class="breadcrumb-item active" aria-current="page">Research Capacity Building Activities</li>
        </ol>
    </nav>

<div><h2 class="gallery-title">Research Capacity Building Activities</h2></div>

    <p>Our research capacity building program aims to strengthen the ability to conduct clinical and population studies on <strong>Alzheimer's Disease and Related Dementias (ADRD)</strong> and other chronic health conditions associated with aging. The program has two primary goals:</p>
    <p>
        <ul>
            <li>Strengthen survey data collection methods, with a focus on culturally informed ADRD assessments.</li>
            <li>Build and enhance statistical analysis methods for longitudinal population studies.</li>
        </ul>
        The activities focus on training Nepali investigators, who will then train others in academic and clinical settings across Nepal.
    </p>
</div>
@endsection