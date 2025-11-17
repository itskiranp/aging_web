<link rel="stylesheet" href="{{ asset('css/data.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')
@section('title', 'Data | CVFS–SCAN')
@section('meta')
<meta name="description" content="Access CVFS–SCAN datasets linking social, economic, and demographic data to cognition and aging in Nepal. Data are available for qualified researchers.">
<meta name="keywords" content="CVFS data, aging research data, dementia dataset, ADRD, Nepal data, cognitive study, CVFS–SCAN datasets">
@endsection

@section('content')
<div class="container my-4 mb-5">
    <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
        <ol class="breadcrumb mt-3">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>

    <h1 class="gallery-title text-center">Data</h1>

    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- Success Toast -->
    <!-- Modern Success Toast -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1100;">
        <div id="successToast" class="toast align-items-center text-bg-success shadow-lg border-0"
            role="alert" aria-live="assertive" aria-atomic="true"
            data-bs-delay="5000" data-bs-autohide="true">
            <div class="d-flex">
                <div class="toast-body fw-semibold">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    Your data request has been sent successfully!
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto"
                    data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>



    <div class="container py-3">
        <div class="text-center mb-5">
            <!-- <h2 class="fw-bold display-6 mb-3">Available Data Sets</h2> -->
            <p style="font-size: 1.1rem;">Our curated datasets will be available soon. You can request access to receive detailed files and documentation once they are ready.</p>
        </div>

        <div class="row g-4">
            {{-- Card 1 --}}
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3">
                                <i class="bi bi-database text-primary fs-4"></i>
                            </div>
                            <h5 class="card-title mb-0">CVFS Linked Data Sets</h5>
                        </div>
                        <p class="text-muted small mb-4">Chitwan Valley Family Study datasets linking social, economic, and demographic data. Available soon. </p>
                        <ul class="list-unstyled flex-grow-1">
                            <li>📄 <a href="#" class="text-decoration-none text-primary">Questionnaire</a></li>
                            <li>📘 <a href="#" class="text-decoration-none text-primary">CodeBook</a></li>
                            <li>💾 <a href="#" class="text-decoration-none text-primary">Data Files</a></li>
                        </ul>
                        <button class="btn btn-primary w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#requestModal" data-dataset="CVFS Linked Data Sets">
                            Request Data
                        </button>
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-success bg-opacity-10 p-3 me-3">
                                <i class="bi bi-clipboard-data text-success fs-4"></i>
                            </div>
                            <h5 class="card-title mb-0">Data Title 2</h5>
                        </div>
                        <p class="text-muted small mb-4">Dataset description or information will be available soon.</p>
                        <button class="btn btn-outline-primary w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#requestModal" data-dataset="Data Title 2">
                            Request Data
                        </button>
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex align-items-center mb-3">
                            <div class="rounded-circle bg-warning bg-opacity-10 p-3 me-3">
                                <i class="bi bi-folder2-open text-warning fs-4"></i>
                            </div>
                            <h5 class="card-title mb-0">Data Title 3</h5>
                        </div>
                        <p class="text-muted small mb-4">This dataset is currently under review and will be updated soon.</p>
                        <button class="btn btn-outline-primary w-100 mt-auto" data-bs-toggle="modal" data-bs-target="#requestModal" data-dataset="Data Title 3">
                            Request Data
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Request Data Modal -->
    <div class="modal fade" id="requestModal" tabindex="-1" aria-labelledby="requestModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 shadow" style="z-index:1055;">
                <div class="modal-header bg-primary text-white rounded-top-4">
                    <h5 class="modal-title" id="requestModalLabel">Request Data Access</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('data.request') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="datasetName" name="dataset">

                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="affiliation" class="form-label">Affiliation</label>
                            <input type="text" class="form-control" id="affiliation" name="affiliation" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message (purpose)</label>
                            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Send Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
@endsection