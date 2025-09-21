<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')
@section('title', 'Presentations')

@section('content')
<div class="container my-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-2 rounded small justify-content-end">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/products') }}">Publications</a></li>
            <li class="breadcrumb-item active" aria-current="page">Presentations</li>
        </ol>
    </nav>

    <!-- Title -->
    <h1 class="gallery-title">Presentations</h1>

    <div class="row gy-4">


        <!-- 2025 Section -->
        <div class="col-12">

            <h2 class="section-header fs-4 fw-bold">2025</h2>
            <div class="presentation-card p-3">
                <h5 class="fw-semibold mb-1">Aging and Dementia Research in LMIC: Opportunities and Challenges.</h5>
                <p class="text-muted small mb-2">Department of Health Services Research and Policy</p>
                <div class="text-muted small">
                    <span class="me-3"><i class="fas fa-user me-1"></i> Carlos Mendes de Leon</span>
                    <span class="me-3"><i class="fas fa-calendar-alt me-1"></i> London School of Tropical Medicine and Hygiene</span>
                    <span><i class="fas fa-map-marker-alt me-1"></i> London, UK</span>
                </div>
                <p class="text-muted small mt-1 mb-0"><i class="fas fa-clock me-1"></i> May 15, 2025</p>
            </div>
        </div>
        <!-- 2024 Section -->
        <div class="col-12">
            <h2 class="section-header fs-4 fw-bold">2024</h2>
            <div class="presentation-card p-3 mb-3">
                <h5 class="fw-semibold mb-1">Adapting the HCAP in Nepal: The Chitwan Valley Family Study</h5>
                <p class="text-muted small mb-2">Study of Cognition and Aging in Nepal (CVFS-SCAN)</p>
                <div class="text-muted small">
                    <span class="me-3"><i class="fas fa-user me-1"></i> Emily Briceño, et al.</span>
                    <span><i class="fas fa-calendar-alt me-1"></i> The Health and Aging in Africa: A Longitudinal Study in South Africa (HAALSA)  network meeting</span>
                </div>
            </div>
            <div class="presentation-card p-3 mb-3">
                <h5 class="fw-semibold mb-1">Aging and Dementia Research from a Global Perspective</h5>
                <p class="text-muted small mb-2"></p>
                <div class="text-muted small">
                    <span class="me-3"><i class="fas fa-user me-1"></i> Carlos Mendes de Leon</span>
                    <span class="me-3"><i class="fas fa-calendar-alt me-1"></i> Seminar, Global Health Institute</span>
                    <span><i class="fas fa-map-marker-alt me-1"></i> Georgetown University, Washington, DC, USA</span>
                </div>
                <p class="text-muted small mt-1 mb-0"><i class="fas fa-clock me-1"></i> September 22, 2024</p>
            </div>
            <div class="presentation-card p-3">
                <h5 class="fw-semibold mb-1">Building Sustainable Research Programs on Aging and Dementia in LMIC</h5>
                <p class="text-muted small mb-2"></p>
                <div class="text-muted small">
                    <span class="me-3"><i class="fas fa-user me-1"></i> Carlos Mendes de Leon</span>
                    <span class="me-3"><i class="fas fa-calendar-alt me-1"></i> Global Brain Network Meeting</span>
                    <span><i class="fas fa-map-marker-alt me-1"></i> Bethesda, MD, USA</span>
                </div>
                <p class="text-muted small mt-1 mb-0"><i class="fas fa-clock me-1"></i> November 11, 2024</p>
            </div>
        </div>

        <!-- 2023 Section -->
        <div class="col-12">
            <h2 class="section-header fs-4 fw-bold">2023</h2>

            <div class="presentation-card p-3 mb-3">
                <h5 class="fw-semibold mb-1">CVFS-Study on Cognition and Aging in Nepal (CVFS-SCAN)</h5>
                <div class="text-muted small mb-1">
                    <span class="me-3"><i class="fas fa-user me-1"></i> Ghimire et al.</span>
                    <span><i class="fas fa-calendar-alt me-1"></i> Monthly webinar series at University of Michigan</span>
                </div>
                <p class="text-muted small mb-0"><i class="fas fa-clock me-1"></i> December 2023</p>
            </div>

            <div class="presentation-card p-3 mb-3">
                <h5 class="fw-semibold mb-1">International Labor Migration, Armed Conflict and Dementia Risk in Nepal</h5>
                <p class="text-muted small mb-2">A Population Study</p>
                <div class="text-muted small">
                    <span class="me-3"><i class="fas fa-user me-1"></i> Carlos Mendes de Leon</span>
                    <span><i class="fas fa-calendar-alt me-1"></i> 5th Annual Meeting of the Harmonized Cognitive Assessment Protocol (HCAP) International Network</span>
                </div>
                <p class="text-muted small mt-1 mb-0"><i class="fas fa-clock me-1"></i> October 12–13, 2023</p>
            </div>

            <div class="presentation-card p-3">
                <h5 class="fw-semibold mb-1">Population-Based Dementia Assessment in Nepal</h5>
                <p class="text-muted small mb-2">The Chitwan Valley Family Study – CVFS-SCAN</p>
                <div class="text-muted small">
                    <span class="me-3"><i class="fas fa-user me-1"></i> Emily Briceño</span>
                    <span class="me-3"><i class="fas fa-calendar-alt me-1"></i> Oral presentation at the Fogarty International Center (FIC) Global Brain Network Meeting</span>
                    <span><i class="fas fa-map-marker-alt me-1"></i> Rockville, MD & virtual</span>
                </div>
                <p class="text-muted small mt-1 mb-0"><i class="fas fa-clock me-1"></i> October 19, 2023</p>
            </div>
        </div>
    </div>
</div>
@endsection