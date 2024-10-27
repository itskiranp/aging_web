<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'CVFS')

@section('content')
<main class="container my-4 mb-5">
    <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb" class="d-flex justify-content-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Study</li>
        </ol>
    </nav>

    <!-- Main Header Section -->
    <div class="card-header text-white bg-primary mb-4">
        <h2 class="text-center"><strong>Chitwan Valley Family Study on Cognition and Aging in Nepal (CVFS-SCAN)</strong></h2>
    </div>

    <!-- Study Overview Section -->
    <section id="research-details" class="mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">Study Overview</h3>
                        <p class="card-text">The Longitudinal Aging Study in Nepal is a comprehensive research initiative aimed at understanding
                        the impact of aging on cognitive health, specifically focusing on Alzheimer’s Disease and Related Dementias (ADRD), in Nepal. The study seeks to explore how factors such as international labor migration and exposure to armed conflict contribute to the risk of dementia and cognitive impairments in older adults.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Gallery Section -->
    <section id="image-gallery" class="mb-5">
        <h3 class="mb-3">Study Area</h3>
        <div class="card">
            <img src="images/CVFS study area.png" class="card-img-top" alt="CVFS Study Area">
            <div class="card-body">
                <p class="card-text">The Chitwan Valley, where the CVFS study is conducted, is located in Nepal. The region provides a diverse and representative sample for studying the cognitive aging process.</p>
            </div>
        </div>
    </section>

    <!-- Study Objectives Section using Cards -->
    <section>
        <h2 class="mb-4">Study Objectives</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card border-info h-100">
                    <div class="card-body">
                        <h4 class="card-title"><i class="bi bi-mortarboard"></i> Build Research Capacity</h4>
                        <p class="card-text">Train local researchers to conduct systematic research on ADRD, including culturally appropriate cognitive assessments and advanced statistical analysis of longitudinal data.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-success h-100">
                    <div class="card-body">
                        <h4 class="card-title"><i class="bi bi-people"></i> Conduct a Population-Based Study</h4>
                        <p class="card-text">Survey 4,000 adults aged 50 and above, along with their 4,000 caregivers, and carry out follow-up assessments to estimate the prevalence and incidence of ADRD.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-warning h-100">
                    <div class="card-body">
                        <h4 class="card-title"><i class="bi bi-graph-up"></i> Investigate Risk Factors</h4>
                        <p class="card-text">Analyze how long-term labor migration and exposure to armed conflict impact the risk of developing ADRD and other cognitive impairments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Study Methods Section with Accordion -->
    <section class="mt-5">
        <h2>Study Methods</h2>
        <div class="accordion" id="methodsAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Data Collection Techniques
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#methodsAccordion">
                    <div class="accordion-body">
                        The study employs a stratified two-stage cluster sampling technique to survey a representative sample of 4,000 older adults and their caregivers from the Chitwan Valley. Data collection includes:
                        <ul>
                            <li>Harmonized Cognitive Assessment Protocol (HCAP) instruments for cognitive and physical function assessments.</li>
                            <li>Interviews with participants and caregivers, including assessments of height, weight, and blood pressure.</li>
                            <li>Biomarker collection involving plasma, serum, and red blood cells.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section using Badges and Cards -->
    <section class="mt-5">
        <h2>Timeline and Current Status</h2>
        <div class="card border-secondary mb-3">
            <div class="card-body">
                <h5 class="card-title"><span class="badge bg-info">2022</span> Study Commencement</h5>
                <p class="card-text">The study commenced in 2022 and is projected to conclude by 2027. Initial data collection is completed and follow-up assessments are planned.</p>
            </div>
        </div>
    </section>

    <!-- Potential Problems and Alternative Strategies -->
    <section class="mt-5">
        <h2>Potential Problems and Alternative Strategies</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card border-danger">
                    <div class="card-header">Participant Burden</div>
                    <div class="card-body">
                        <p>We anticipate that the survey interview, including cognitive tests, will take 1.5 – 2 hours to complete. This may cause fatigue for middle-aged to older adults. Our strategy is to offer multiple settings for the interview to reduce burden while maintaining high participation rates.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-primary">
                    <div class="card-header">Privacy of Interview</div>
                    <div class="card-body">
                        <p>In rural areas, it is often difficult to conduct interviews in private. Our staff will move interviews to outdoor locations and send two-person teams to ensure privacy. We will also collect data on the presence of others during interviews.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card border-warning">
                    <div class="card-header">Limited Statistical Power</div>
                    <div class="card-body">
                        <p>While recognizing potential limitations in statistical power, this study lays the groundwork for future ADRD research in Nepal. We plan to continue enrollment as participants become age-eligible.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-info">
                    <div class="card-header">Biomarker Data</div>
                    <div class="card-body">
                        <p>We plan to collect biomarker data, though we have not yet committed to specific assays. Frozen samples will be stored for future analysis as scientific advances clarify the relevance of biomarkers for ADRD.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Broader Implications Section -->
    <section class="mt-5">
        <h2>Broader Implications for ADRD Research in Nepal</h2>
        <div class="card border-success">
            <div class="card-body">
                <p>Population aging is a growing concern in lower-income countries like Nepal. With the rising number of older adults at risk of Alzheimer's Disease and Related Dementias (ADRD), the burden on families and the healthcare system is increasing. This study will provide critical insights into the social and economic factors impacting aging in Nepal, and will have broad applications to other low- and middle-income countries experiencing similar transitions.</p>
            </div>
        </div>
    </section>

</main>
@endsection
