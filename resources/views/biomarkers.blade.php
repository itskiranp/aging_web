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
    <div class="container mt-5">
        <div class="bio-banner mt-5 ">
            <h1 class="display-5 fw-bold">Biospecimen Laboratory of ISER-N</h1>
        </div><br>
        <div class="bio-banner">
            <p class="lead text-center "><em>A hub for biomarker research and scientific capacity in Nepal</em></p>
        </div>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-4 bg-light">
    <div class="container">
        <h2 class="mb-2 text-primary">Background</h2>
        <p style="font-size:1.1rem;">
            Nepal’s population is rapidly aging, bringing with it an urgent need for advanced research into Alzheimer’s Disease and Related Dementias (ADRD) as well asand other chronic health conditions that affect people as they age. Yet, until recently, Nepal had very limited population-based data on dementia, making it difficult to design effective prevention strategies or respond to the growing burden of these diseases. There are important blood-based biomarkers of this disease that predict who may be at increased risk but these biomarkers have not been studied in the Nepali population. To address this critical gap, the Institute for Social and Environmental Research Nepal (ISER-N) established a dedicated biospecimen laboratory within its premises in Bharatpur-15, Chitwan. The facility is equipped for blood sample processing and long-term storage of blood derivatives, including serum, plasma, and buffy coat, preserved at –86°C, for biomarker and genetic research. All procedures follow internationally standardized protocols and World Health Organization (WHO) guidelines. Today, ISER-N’s biospecimen laboratory serves as a national hub for biomarker research, housing state-of-the-art instruments and essential tools required for ADRD investigations in line with international standardsthe Nepali population. Equally important, the laboratory is strengthening Nepal’s research capacity by training Nepali scientists and health professionals in advanced laboratory techniques ensuring the sustainability of a strong research culture in the country.
        </p>
    </div>
</section>
<!-- <section class="py-5 team-tree">
    <div class="container text-center">
        <img src="images/blood_collection_and_processing_pic.png" alt="Blood Collection and Processing" class="img-fluid" height="500px" width="500px">
    </div>
</section> -->

<section>
    <!-- Flowchart Wrapper -->
    <div class="d-flex justify-content-center mb-3">
        <div class="flowchart-wrapper">
            <img src="images/blood_collection_and_processing_pic.png" alt="Flowchart" class="img-fluid  rounded">
        </div>
    </div>
</section>


<section class="info-section">
    <div class="container">
        <h3 class="mb-3 text-primary">Blood Sample Collection and Processing</h3>
        <p style="font-size:1.1rem;">
            At ISER-Nepal’s central laboratory, blood samples are processed under strict standardized procedures to ensure integrity and reliability for CVFS-SCAN biomarker research. From field collection to long-term storage, every step is designed to maintain the highest quality standards for serum, plasma, and buffy coat extraction.
        </p>
        <div class="row align-items-stretch ">
            <!-- Left Column: Text Content -->
            <div class="col-lg-6 d-flex flex-column justify-content-start">


                <h5 class="mb-2"><strong>Blood Sample Collection</strong></h5>
                <p style="font-size:1.1rem;">
                    Trained phlebotomists visit respondents’ homes to collect 30 ml of blood in three 10 ml tubes (two SST tubes and one EDTA tube). Prior to collection, informed consent and a brief health assessment are completed. Blood is drawn using a vacuum extraction system in accordance with Standard Operation Procedures (SOP). Each tube is labeled and tracked using the Survey123 mobile application for real-time management.
                </p>

                <h5 class="mb-2"><strong>Mobile Laboratory Processing</strong></h5>
                <p style="font-size:1.1rem;">
                    For CVFS-SCAN, ISER-Nepal has established mobile laboratories within study neighborhoods. Upon receiving samples, lab technicians scan tube barcodes for tracking. SST tubes are centrifuged on-site using portable centrifugation machines. Both SST and EDTA tubes are then transported under controlled conditions to ISER-Nepal’s central laboratory for further processing and secure storage.
                </p>

                <h5 class="mb-2"><strong>Receiving Samples at ISER-N Laboratory</strong></h5>
                <p style="font-size:1.1rem;">
                    Upon arrival, tubes are verified for correct labeling, re-scanned with a barcode reader, and logged into the system.
                </p>
            </div>

            <!-- Right Column: Image Carousel with Overlay Text -->
            <div class="col-lg-6 d-flex">
                <div id="biomarkerCarousel" class="carousel slide w-100 d-flex flex-column" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#biomarkerCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#biomarkerCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#biomarkerCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <!-- Carousel inner (your slides here) -->
                    <div class="carousel-inner flex-grow-1">
                        <!-- Slide1 -->
                        <div class="carousel-item active h-100">
                            <img src="/images/field3.jpg" class="d-block w-100 h-100" alt="Slide 1" style="object-fit: cover;">
                            <div class="custom-overlay">
                                <div class="custom-textbox fade-in">
                                    <h4>Blood Sample Collection</h4>
                                    <p>Phlebotomists collecting blood samples at respondents’ homes.</p>

                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="carousel-item h-100">
                            <img src="/images/field4.jpg" class="d-block w-100 h-100" alt="Slide 2" style="object-fit: cover;">
                            <div class="custom-overlay">
                                <div class="custom-textbox fade-in">
                                    <h4>Mobile Laboratory Processing</h4>
                                    <p>Lab technicians performing centrifugation of SST tubes in the mobile laboratory.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="carousel-item  h-100">
                            <img src="/images/field2.jpg" class="d-block w-100 h-100" alt="Slide 3" style="object-fit: cover;">
                            <div class="custom-overlay">
                                <div class="custom-textbox fade-in">
                                    <h4>Transported to ISER-Nepal Laboratory</h4>
                                    <p>Blood samples transported safely in cold carriers.</p>
                                </div>
                            </div>
                        </div>


                        <!-- Add more slides as needed -->
                    </div>
                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#biomarkerCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#biomarkerCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="container">
                <!-- <h3 class=" text-primary">ISER-N Laboratory Processing and Storage</h3> -->
                <h5 class="mb-2"><strong>Laboratory Processing and Storage</strong></h5>
                <p style="font-size:1.1rem;">
                    The following procedures are performed in the ISER-N laboratory to ensure proper blood sample processing and secure storage.

                </p>
            </div>
        </div>
    </div>
</section>




<!-- Image + Comments Section -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="row g-4">

            <!-- Item 1 -->
            <div class="col-md-6">
                <img src="images/centrifugation.jpg" alt="Biomarker 1" class="img-fluid bio-img shadow">
                <div class="comment-box mt-3">
                    <strong>STEP 1: Centrifugation</strong>
                    <ul style="font-size:1rem;">
                        <li><strong>SST tubes:</strong> centrifuged at 1800 RCF for 10-15 minutes to separate serum.</li>
                        <li> <strong>EDTA tubes:</strong>centrifuged at 1500 RCF for up to 15 minutes to separate plasma, buffy coat, and red blood cells.</li>
                    </ul>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-md-6">
                <img src="images/extraction_aliquoting.jpg" alt="Biomarker 2" class="img-fluid bio-img shadow">
                <div class="comment-box mt-3">
                    <strong>STEP 2: Extraction and Aliquoting</strong>
                    <p style="font-size:1rem;">
                        Following centrifugation, serum, plasma, and buffy coat are carefully extracted using sterile pipettes. Each component is divided into smaller portions (aliquots) to support efficient analysis and long-term storage:</p>
                    <ul style="font-size:1rem;">
                        <li>Serum: up to 6 aliquots</li>
                        <li>Plasma: up to 6 aliquots</li>
                        <li>Buffy Coat: up to 2 aliquots</li>

                    </ul>

                </div>
            </div>
            <!-- Item 3 -->
            <div class="col-md-6">
                <img src="images/processing.jpg" alt="Biomarker 2" class="img-fluid bio-img shadow">
                <div class="comment-box mt-3">
                    <strong>STEP 3: Blood test report to the respondent</strong>
                    <p style="font-size:1rem;">
                        From the blood sample collected from each respondent, a small portion will be drawn from the SST tube, and selected laboratory tests will be performed at the ISER-N laboratory by trained laboratory technicians. The test results will be provided to the respondent in a written report. The following laboratory tests will be conducted:</p>

                    <ul style="font-size:1rem;">
                        <li>
                            Serum Uric Acid

                        </li>
                        <li>Total Cholesterol
                        </li>
                        <li>
                            Serum Total Protein

                        </li>
                    </ul>


                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-md-6">
                <img src="images/storage.jpg" alt="Biomarker 4" class="img-fluid bio-img shadow">
                <div class="comment-box mt-3">
                    <strong>STEP 4: Secure Storage and Transport</strong>
                    <p style="font-size:1rem;">
                        All aliquots are stored at –86°C in ultra-low temperature freezers at ISER-Nepal. For each respondent, 14 cryovials are prepared:
                    </p>
                    <ul style="font-size:1rem;">
                        <li> <strong>Seven cryovials</strong> remain securely stored at ISER-Nepal.</li>
                        <li><strong>Seven cryovials</strong> are shipped on dry ice to the University of Michigan Biospecimen Lab (USA).</li>

                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>


@endsection