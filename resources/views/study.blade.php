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
        <p class="lead text-center"><em>A hub for biomarker research and scientific capacity in Nepal.</em></p>
    </div>
</section>

<!-- Introduction Section -->
<section class="py-5">
    <div class="container">
        <h2 class="mb-2 text-primary">Background</h2>
        <p style="font-size:1.1rem;">
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
<section class="py-2 team-tree">
    <div class="container text-center">


        <!-- Subordinates -->
        <div class="row justify-content-center ">
            <!-- Staff 1 -->
            <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center mb-4">
                <div class="team-member text-center">
                    <img src="{{ asset('images/lab_in_charge3.jpeg') }}" alt="Staff 1" class="img-fluid rounded-circle shadow profile-img-sm">
                    <h6 class="mt-3 mb-1 fw-semibold">Ghaman Sing Susling</h6>
                    <p class="text-muted text-center">BMLT, Lab In-Charge</p>
                </div>
            </div>

            <!-- Staff 2 -->
            <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center mb-4">
                <div class="team-member text-center">
                    <img src="{{ asset('images/Chiran_Garanja_Magar.JPG') }}" alt="Chiran Garanja Magar" class="img-fluid rounded-circle shadow profile-img-sm">
                    <h6 class="mt-3 mb-1 fw-semibold">Chiran Garanja Magar</h6>
                    <p class="text-muted text-center">Lab Technician</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <h3 class="mb-3 text-primary">Blood Sample Processing and Storage</h3>
    <p  style="font-size:1.1rem;">
        At ISER-Nepal’s central laboratory, blood samples are processed under strict standardized procedures to ensure integrity and reliability for CVFS-SCAN biomarker research. From field collection to long-term storage, every step is designed to maintain the highest quality standards for serum, plasma, and buffy coat extraction.
    </p>
</div>
<div class="container">
    <h4 class="mb-3 text-primary">Blood Sample Collection</h4>
    <p  style="font-size:1.1rem;">
        Trained phlebotomists visit respondents’ homes to collect 30 ml of blood in three 10 ml tubes (two SST tubes and one EDTA tube). Prior to collection, informed consent and a brief health assessment are completed. Blood is drawn using a vacuum extraction system in accordance with SOPs. Each tube is labeled and tracked using the Survey123 mobile application for real-time management.
    </p>
</div>
<div class="container">
    <h4 class="mb-3 text-primary">Mobile Laboratory Processing</h4>
    <p  style="font-size:1.1rem;">
        For CVFS-SCAN, ISER-Nepal has established mobile laboratories within study neighborhoods. Upon receiving samples, lab technicians scan tube barcodes for tracking. SST tubes are centrifuged on-site using portable centrifugation machines. Both SST and EDTA tubes are then transported under controlled conditions to ISER-Nepal’s central laboratory for further processing and secure storage.
    </p>
</div>
<div class="container">
    <h4 class="mb-3 text-primary">Receiving Samples at ISER-Nepal Laboratory</h4>
    <p  style="font-size:1.1rem;">
        Upon arrival, all tubes are verified for correct labeling, re-scanned with a barcode reader, and logged into the system. The samples are then prepared for centrifugation.
    </p>
</div>

<!-- Image + Comments Section -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="row g-4">

            <!-- Item 1 -->
            <div class="col-md-6">
                <img src="images/centrifugation.jpg" alt="Biomarker 1" class="img-fluid bio-img shadow">
                <div class="comment-box mt-3">
                    <strong>Centrifugation:</strong>
                    <ul  style="font-size:1rem;">
                        <li><strong>SST tubes:</strong> centrifuged at 1800 RCF for 10-15 minutes to separate serum.</li>
                        <li> <strong>EDTA tubes:</strong>centrifuged at 1500 RCF for up to 15 minutes to separate plasma, buffy coat, and red blood cells.</li>
                    </ul>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-md-6">
                <img src="images/extraction_aliquoting.jpg" alt="Biomarker 2" class="img-fluid bio-img shadow">
                <div class="comment-box mt-3">
                    <strong>Extraction and Aliquoting:</strong>
                    <p  style="font-size:1rem;">
                        Following centrifugation, serum, plasma, and buffy coat are carefully extracted using sterile pipettes. Each component is divided into smaller portions (aliquots) to support efficient analysis and long-term storage:</p>
                    <ul  style="font-size:1rem;">
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
                    <strong>Blood test report to the respondent</strong>
                    <p style="font-size:1rem;">
                        From the blood sample collected from each respondent, a small portion will be drawn from the SST tube, and selected laboratory tests will be performed at the ISER-N laboratory by trained laboratory technicians. The test results will be provided to the respondent in a written report.</p>
                    <div class="biomarker-list">
                        <p>The following laboratory tests will be conducted:</p>
                        <ul>
                            <li>
                                <h6>Serum Uric Acid</h6>
                                <ul>
                                    <li><em>Normal Range:</em>
                                        <ul>
                                            <li>Men: 3.4 to 7.0 mg/dL</li>
                                            <li>Women: 2.4 to 6.0 mg/dL</li>
                                        </ul>
                                    </li>
                                    <li><em>Interpretation:</em> Indicates kidney function; elevated levels may be associated with kidney dysfunction or gout.</li>
                                </ul>
                            </li>
                            <li>
                                <h6>Total Cholesterol</h6>
                                <ul>
                                    <li><em>Normal Range:</em> Less than 200 mg/dL</li>
                                    <li><em>Interpretation:</em> Related to heart health; elevated levels are a risk factor for cardiovascular diseases.</li>
                                </ul>
                            </li>
                            <li>
                                <h6>Serum Total Protein</h6>
                                <ul>
                                    <li><em>Normal Range:</em> 6.0 to 8.3 g/dL</li>
                                    <li><em>Interpretation:</em> Reflects liver and kidney function; abnormal levels can indicate nutritional problems, liver or kidney disease, or chronic inflammation.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-md-6">
                <img src="images/storage.jpg" alt="Biomarker 4" class="img-fluid bio-img shadow">
                <div class="comment-box mt-3">
                    <strong>Secure Storage and Transport:</strong>
                    <p  style="font-size:1rem;">
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