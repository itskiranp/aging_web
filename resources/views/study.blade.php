<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<link rel="stylesheet" href="{{ asset('css/about.css') }}">

@extends('layout')

@section('Study', 'CVFS')

@section('content')
<!-- Modern Hero Header -->
<!-- <header class="hero-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">Chitwan Valley Family Study <br> Study on Cognition and Aging in Nepal</h1>
                    <p class="lead mb-0">Understanding Alzheimer's Disease and Related Dementias in the Nepalese Context</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <span class="badge bg-light text-primary fs-6 p-3">Longitudinal Study • 2022-2027</span>
                </div>
            </div>
        </div>
    </header> -->
<section class="bio-hero">
    <div class="container">
        <h1 class="display-5 fw-bold">Biospecimen Laboratory of ISER-N</h1>
        <p class="lead"><em>A hub for biomarker research and scientific capacity in Nepal.</em></p>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-5">
    <div class="container">
        <h2 class="mb-4 text-primary">Background</h2>
        <p class="text-muted" style="font-size:1.1rem;">
            Nepal’s population is rapidly aging, bringing with it an urgent need for advanced research into Alzheimer’s Disease and Related Dementias (ADRD) as well as other chronic health conditions. Yet, until recently, Nepal had very limited population-based data on dementia, making it difficult to design effective prevention strategies or respond to the growing burden of these diseases. To address this critical gap, the Institute for Social and Environmental Research Nepal (ISER-N) established a dedicated biospecimen within its premises in Bharatpur-15, Chitwan. The facility is equipped for blood sample processing and long-term storage of blood derivatives, including serum, plasma, and buffy coat, preserved at –86°C for biomarker and genetic research. All procedures follow internationally standardized protocols and World Health Organization (WHO) guidelines. Today, ISER-N’s biospecimen serves as a national hub for biomarker research, housing state-of-the-art instruments and essential tools required for ADRD investigations in line with international standards. Equally important, the laboratory is strengthening Nepal’s research capacity by training Nepali scientists and health professionals in advanced laboratory techniques ensuring the sustainability of a strong research culture in the country.
        </p>
    </div>
</section>
<!-- <section class="py-5 team-tree">
    <div class="container text-center">
        <img src="images/blood_collection_and_processing_pic.png" alt="Blood Collection and Processing" class="img-fluid" height="500px" width="500px">
    </div>
</section> -->

<!-- Lab Team Tree Section -->
<section class="py-5 team-tree">
    <div class="container text-center">

       
        <!-- Subordinates -->
        <div class="row justify-content-center mt-4">
            <!-- Staff 1 -->
            <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center mb-4">
                <div class="team-member text-center">
                    <img src="{{ asset('images/lab_in_charge3.jpeg') }}" alt="Staff 1" class="img-fluid rounded-circle shadow profile-img-sm">
                    <h6 class="mt-3 mb-1 fw-semibold">Ghaman Sing Susling</h6>
                    <p class="text-muted">BMLT, Lab In-Charge</p>
                </div>
            </div>

            <!-- Staff 2 -->
            <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center mb-4">
                <div class="team-member text-center">
                    <img src="{{ asset('images/Chiran_Garanja_Magar.jpg') }}" alt="Chiran Garanja Magar" class="img-fluid rounded-circle shadow profile-img-sm">
                    <h6 class="mt-3 mb-1 fw-semibold">Chiran Garanja Magar</h6>
                    <p class="text-muted">Lab Technician</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Image + Comments Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-4 text-primary">Biomarker Gallery</h2>
        <div class="row g-4">

            <!-- Item 1 -->
            <div class="col-md-6">
                <img src="biomarker1.jpg" alt="Biomarker 1" class="img-fluid bio-img shadow">
                <div class="comment-box mt-3">
                    <strong>Sample Comment of Pic1:</strong> <em>This marker indicates inflammation levels in blood samples.</em>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-md-6">
                <img src="biomarker2.jpg" alt="Biomarker 2" class="img-fluid bio-img shadow">
                <div class="comment-box mt-3">
                    <strong>Sample Comment of Pic2:</strong><em> Used for early detection of cardiovascular risks.</em>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-md-6">
                <img src="biomarker3.jpg" alt="Biomarker 3" class="img-fluid bio-img shadow">
                <div class="comment-box mt-3">
                    <strong>Sample Comment of Pic3:</strong> <em>Helps in monitoring cancer progression.</em>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-md-6">
                <img src="biomarker4.jpg" alt="Biomarker 4" class="img-fluid bio-img shadow">
                <div class="comment-box mt-3">
                    <strong>Sample Comment of Pic4:</strong><em>Related to neurodegenerative disease research.</em>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection