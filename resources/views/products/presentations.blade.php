<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')
@section('title', 'products')
@section('content')
    <div class="container my-4 mb-5">
        <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
            <ol class="breadcrumb mt-3">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
                <li class="breadcrumb-item active" aria-current="page">Presentations</li>
            </ol>
        </nav>
    </div>
    
    <div class="container py-5">
        <!-- Header -->
        <header class="text-center mb-5">
            <h1 class="display-5 fw-bold text-dark mb-3">Presentations</h1>
            <div class="mx-auto" style="width: 100px; height: 3px; background-color: #0d6efd;"></div>
        </header>

        <!-- Presentations List -->
        <div class="row">
            <!-- 2024 Presentations -->
            <div class="col-12 mb-5">
                <h2 class="section-header fs-1 fw-semibold text-dark">2024</h2>
                
                <div class="row g-4">
                    <!-- Presentation 1 -->
                    <div class="col-12">
                        <div class="presentation-card bg-white rounded p-4 position-relative">
                            <span class="year-badge badge bg-primary rounded-pill">2024</span>
                            <div class="d-flex flex-column flex-md-row">
                                <div class="me-md-4 mb-3 mb-md-0 text-primary fs-3">
                                    <i class="fas fa-microphone"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="h3 fw-semibold text-dark mb-2">Adapting the HCAP in Nepal: The Chitwan Valley Family Study</h3>
                                    <p class="text-muted mb-3">Study of Cognition and Aging in Nepal (CVFS-SCAN)</p>
                                    <div class="d-flex flex-wrap align-items-center text-muted small">
                                        <span class="me-3"><i class="fas fa-user me-1"></i> Emily Briceño, et al.</span>
                                        <span><i class="fas fa-calendar-alt me-1"></i> The Health and Aging in Africa: A Longitudinal Study in South Africa (HAALSA) network meeting</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2023 Presentations -->
            <div class="col-12 mb-5">
                <h2 class="section-header fs-1 fw-semibold text-dark">2023</h2>
                
                <div class="row g-4">
                    <!-- Presentation 2 -->
                    <div class="col-12">
                        <div class="presentation-card bg-white rounded p-4 position-relative">
                            <span class="year-badge badge bg-primary rounded-pill">2023</span>
                            <div class="d-flex flex-column flex-md-row">
                                <div class="me-md-4 mb-3 mb-md-0 text-primary fs-3">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="h3 fw-semibold text-dark mb-2">CVFS-Study on Cognition and Aging in Nepal (CVFS-SCAN)</h3>
                                    <div class="d-flex flex-wrap align-items-center text-muted small mb-3">
                                        <span class="me-3"><i class="fas fa-user me-1"></i> Ghimire et al.</span>
                                        <span><i class="fas fa-calendar-alt me-1"></i> Monthly webinar series at University of Michigan</span>
                                    </div>
                                    <p class="text-muted"><i class="fas fa-clock me-1"></i> December 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Presentation 3 -->
                    <div class="col-12">
                        <div class="presentation-card bg-white rounded p-4 position-relative">
                            <span class="year-badge badge bg-primary rounded-pill">2023</span>
                            <div class="d-flex flex-column flex-md-row">
                                <div class="me-md-4 mb-3 mb-md-0 text-primary fs-3">
                                    <i class="fas fa-microphone"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="h3 fw-semibold text-dark mb-2">International Labor Migration, Armed Conflict and Dementia Risk in Nepal</h3>
                                    <p class="text-muted mb-3">A Population Study</p>
                                    <div class="d-flex flex-wrap align-items-center text-muted small">
                                        <span class="me-3"><i class="fas fa-user me-1"></i> Carlos Mendes de Leon</span>
                                        <span><i class="fas fa-calendar-alt me-1"></i> 5th Annual Meeting of the Harmonized Cognitive Assessment Protocol (HCAP) International Network</span>
                                    </div>
                                    <p class="text-muted mt-2"><i class="fas fa-clock me-1"></i> October 12-13, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Presentation 4 -->
                    <div class="col-12">
                        <div class="presentation-card bg-white rounded p-4 position-relative">
                            <span class="year-badge badge bg-primary rounded-pill">2023</span>
                            <div class="d-flex flex-column flex-md-row">
                                <div class="me-md-4 mb-3 mb-md-0 text-primary fs-3">
                                    <i class="fas fa-microphone"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h3 class="h3 fw-semibold text-dark mb-2">Population-Based Dementia Assessment in Nepal</h3>
                                    <p class="text-muted mb-3">The Chitwan Valley Family Study - Study of Cognition and Aging in Nepal (CVFS-SCAN)</p>
                                    <div class="d-flex flex-wrap align-items-center text-muted small">
                                        <span class="me-3"><i class="fas fa-user me-1"></i> Emily Briceño</span>
                                        <span class="me-3"><i class="fas fa-calendar-alt me-1"></i> Fogarty International Center (FIC) Global Brain Network Meeting</span>
                                        <span><i class="fas fa-map-marker-alt me-1"></i> Rockville, MD and virtual</span>
                                    </div>
                                    <p class="text-muted mt-2"><i class="fas fa-clock me-1"></i> October 19, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection