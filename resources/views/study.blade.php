<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<link rel="stylesheet" href="{{ asset('css/about.css') }}">

@extends('layout')

@section('title', 'CVFS')

@section('content')
    <!-- Modern Hero Header -->
    <header class="hero-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">Chitwan Valley Family Study on Cognition and Aging in Nepal</h1>
                    <p class="lead mb-0">Understanding Alzheimer's Disease and Related Dementias in the Nepalese Context</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <span class="badge bg-light text-primary fs-6 p-3">Longitudinal Study • 2022-2027</span>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        <!-- Study Overview Section -->
        <section id="study-overview" class="mb-5">
            <h2 class="section-title">Study Overview</h2>
            <div class="content-block">
                <p>The Longitudinal Aging Study in Nepal is a comprehensive research initiative aimed at understanding the
                    impact of aging on cognitive health, specifically focusing on Alzheimer's Disease and Related Dementias
                    (ADRD), in Nepal.</p>

                <p>The study seeks to explore how factors such as international labor migration and exposure to armed
                    conflict contribute to the risk of dementia and cognitive impairments in older adults.</p>

                <div class="highlight-box">
                    <p class="mb-0">In addition, we are exploring how chronic psychological stress impacts the transition
                        to adulthood. Using hair cortisol concentration (HCC), a reliable and non-invasive biomarker, we
                        measure long-term stress in young adults. This study is part of the Chitwan Valley Family Study
                        (CVFS), a 25-year longitudinal study of community, household, and individual factors.</p>
                </div>
            </div>
        </section>

        <!-- Study Area Section -->
        <section id="study-area" class="mb-5">
            <h2 class="section-title">Study Area</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="study-image">
                        <img src="images/CVFS study area.png" alt="CVFS Study Area" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-block" style="height: 100%;">
                        <p>The Chitwan Valley, where the CVFS study is conducted, is located in Nepal. The region provides a
                            diverse and representative sample for studying both the cognitive aging process and life
                            transitions impacted by stress.</p>

                        <div class="mt-4">
                            <h5 class="fw-bold">Key Features:</h5>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle text-primary me-2"></i> Representative population sample
                                </li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i> Diverse socioeconomic backgrounds
                                </li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i> Longitudinal data available</li>
                                <li><i class="fas fa-check-circle text-primary me-2"></i> Established research
                                    infrastructure</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Summary Section -->
        <section id="summary" class="mb-5">
            <h2 class="section-title">Research Context</h2>
            <div class="content-block">
                <p>Population aging is becoming increasingly more common in many low- and middle-income countries (LMIC). As
                    a result, these countries face the growing burden of common age-associated chronic illnesses, including
                    ADRD.</p>

                <p>Nepal is a low middle-income country where the population is now aging, putting a rising number of adults
                    at risk of developing ADRD. There is little or no research in Nepal to investigate the scope and primary
                    determinants of ADRD, and even the most basic information on ADRD is currently lacking.</p>

                <div class="alert alert-primary mt-4">
                    <p class="mb-0"><strong>Urgent Need:</strong> There is an urgent need to build expertise in the design
                        and conduct of systematic population-level investigations of ADRD in Nepal. There is an equally
                        urgent need to start collecting rigorous new data on the scope and determinants of ADRD and other
                        aging-related changes in health to guide the development of prevention strategies and reduce the
                        burden of ADRD in Nepal.</p>
                </div>
            </div>
        </section>

        <!-- Objectives Section -->
        <section id="objectives" class="mb-5">
            <h2 class="section-title">Study Objectives</h2>
            <div class="content-block">
                <ul class="objective-list">
                    <li>Build research capacity for the conduct of studies of ADRD and other aging-related changes in
                        health. Specific capacity-building activities focus on the design and administration of culturally
                        appropriate cognitive assessments to identify ADRD in the general population, and building expertise
                        in statistical methods for the analysis of longitudinal data from complex surveys.</li>
                    <li>Design and conduct a population-based study of ADRD and other age-associated conditions of adults
                        aged > 50 years and complete a baseline interview and one follow-up interview two years later with
                        these adults and informants/caregivers.</li>
                    <li>Estimate the prevalence and incidence of ADRD and its primary clinical feature: cognitive
                        impairment; test associations between primary risk factors and ADRD/cognitive impairment and other
                        relevant outcomes (e.g., disability, caregiving needs) at baseline and follow-up.</li>
                </ul>
            </div>
        </section>

        <!-- Methodology Section -->
        <section id="methodology" class="mb-5">
            <h2 class="section-title">Methodology</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="content-block h-100">
                        <div class="methodology-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <h4>Study Design</h4>
                        <p>This is a longitudinal cohort study of a representative sample of 4,000 older adults aged >50 and
                            their 4,000 key informants/caregivers from the Chitwan Valley Family Study (CVFS) panel, based
                            on a stratified two-stage cluster area probability sampling.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="content-block h-100">
                        <div class="methodology-icon">
                            <i class="fas fa-tablet-alt"></i>
                        </div>
                        <h4>Survey Data Collection</h4>
                        <p>Using Harmonized Cognitive Assessment Protocol (HCAP) instruments, face-to-face Computer-Assisted
                            Personal Interviewing (CAPI) is administered on tablets. The interview includes cognitive and
                            physical function tests, standardized measures, informant interview, and health assessments.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="content-block h-100">
                        <div class="methodology-icon">
                            <i class="fas fa-vial"></i>
                        </div>
                        <h4>Biomarker Collection</h4>
                        <p>A team of licensed and trained phlebotomists draw 32.5 ml of blood during the single blood draw
                            using a vacuum extraction system. Additional biomarker data including hair cortisol samples are
                            collected for stress analysis.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timeline Section -->
        <section id="timeline" class="mb-5">
            <h2 class="section-title">Timeline and Current Status</h2>
            <div class="content-block">
                <div class="timeline-item">
                    <div class="timeline-badge">2022</div>
                    <h4>Study Commencement</h4>
                    <p>The study commenced in 2022 and is projected to conclude by 2027. Initial data collection is
                        completed and follow-up assessments are planned, including hair cortisol sampling and biomarker
                        collection for stress analysis.</p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-badge">2023</div>
                    <h4>Baseline Data Collection</h4>
                    <p>Completed baseline interviews with 4,000 participants and their caregivers. Established local
                        research capacity and trained field teams in cognitive assessment protocols.</p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-badge">2024</div>
                    <h4>Preliminary Analysis</h4>
                    <p>Initial analysis of baseline data to establish prevalence estimates and identify key risk factors for
                        further investigation in follow-up waves.</p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-badge">2025-27</div>
                    <h4>Follow-up Waves</h4>
                    <p>Conducting follow-up assessments to measure cognitive change over time and analyze longitudinal
                        patterns of ADRD development and progression.</p>
                </div>
            </div>
        </section>
    </main>
@endsection
