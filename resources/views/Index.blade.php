<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')

@section('title', 'CVFS on Cognition and Aging in Nepal')
@section('content')


<section>
    <!-- Hero Carousel -->
    <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="position-relative h-100">
                    <img src="images/iserfamily1.jpg" class="img-fluid hero-img" alt="CVFS-SCAN Team">
                    <!-- <div class="hero-overlay">
          <div class="hero-text">
            <h1>Study on Cognition and Aging in Nepal</h1>
            <p>Part of the Chitwan Valley Family Study (CVFS-SCAN)</p>
          </div>
        </div> -->
                </div>
            </div>

            <!-- Slide 2 (Example) -->
            <div class="carousel-item">
                <div class="position-relative h-100">
                    <img src="images/himalayan1.jpg" class="img-fluid hero-img" alt="Slide 2">
                    <!-- <div class="hero-overlay">
          <div class="hero-text">
            <h1>Understanding Nepal's Aging Population</h1>
            <p>Empowering Research Through Data</p>
          </div>
        </div> -->
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="position-relative h-100">
                    <img src="images/biomarkerpic.jpeg" class="img-fluid hero-img" alt="Slide 3">
                    <!-- <div class="hero-overlay">
          <div class="hero-text">
            <h1>Data-Driven Insights</h1>
            <p>Explore biomarkers, cognition, and more</p>
          </div>
      </div> -->
                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
</section>



<section>


    <div
        style="font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif; width: 100%; margin: 0 auto; padding:0 150px; color: #2d3748;">
        <!-- Header Section -->
        <div style="margin-bottom: 30px; border-bottom: 1px solid #e2e8f0; padding-bottom: 20px; margin-top:50px;">
            <h1
                style="color: #1a365d; font-size: 2.2rem; font-weight: 700; margin-bottom: 8px; letter-spacing: -0.5px;">
                Welcome to CVFS-SCAN
            </h1>
            <h2 style="color: #3182ce; font-size: 1.4rem; font-weight: 500; margin-bottom: 15px;">
                Chitwan Valley Family Study – Study on Cognition and Aging in Nepal
            </h2>
            <div
                style="width: 80px; height: 4px; background: linear-gradient(90deg, #3182ce, #63b3ed); border-radius: 2px;">
            </div>
        </div>

        <!-- Main Content - Now in Columns -->
        <div style="display: flex; flex-wrap: wrap; gap: 50px; margin-bottom: 20px;">
            <!-- Left Column - Text Content -->
            <div style=" text-align: justify; flex: 1; min-width: 500px;">
                <div id="main-content" style="line-height: 1.8;">
                    <p style="margin-bottom: 18px; font-size: 1.1rem; ">
                        The CVFS-SCAN study aims to lay the foundation for a sustainable, population-based research
                        program
                        focused
                        on Alzheimer's disease and related dementias (ADRD) and broader age-related health challenges in
                        Nepal.
                    </p>

                    <p style="margin-bottom: 18px; font-size: 1.1rem; ">
                        As Nepal's population ages, more adults are living longer, but with increased risk of cognitive
                        decline,
                        chronic conditions, and disability. Despite the rising burden of ADRD, there is currently
                        limited
                        national
                        capacity to monitor, prevent, or manage these conditions, due to the absence of systematic data
                        and
                        specialized research infrastructure.
                    </p>
                    <p style="margin-bottom: 18px; font-size: 1.1rem; ">
                        To address this urgent gap, CVFS-SCAN leverages the longstanding Chitwan Valley Family Study
                        (CVFS);
                        a respected and nationally recognized longitudinal study that began in 1995.
                        With decades of detailed family, community , and life history data, CVFS provides a unique
                        foundation for launching a new wave of dementia-focused research tailored to Nepal's specific
                        historical,
                        social, and demographic context.
                    </p>
                </div>


            </div>

            <!-- Right Column - Image -->
            <div style="flex: 1;  display: flex; justify-content: center; align-items: flex-start;">
                <div
                    style=" background: #f8fafc; border-radius: 3px; overflow: hidden;  ">
                    <!-- Placeholder for your image - replace with actual img tag -->
                    <img src="/images/study area.png" class="img-fluid" alt="" width="600px" height="400px" ;>

                </div>
            </div>
        </div>
        <div>
            <h4 style=" color: #1a365d; font-size: 1.1rem; font-weight: 600; margin-bottom: 5px;">
                Overall Goal
            </h4>
            <p style="margin-bottom: 18px; font-size: 1.1rem; ">
                To develop a foundation for sustained, high-quality, population-based research into ADRD and age-related chronic conditions in Nepal.
            </p>
            <h4 style="  color: #1a365d; font-size: 1.1rem; font-weight: 600; margin-bottom: 7px;">
                Objectives
            </h4>
            <ul style=" font-size: 1.1rem; padding-left: 20px; margin: 0; margin-bottom: 10px;">
                <li style="margin-bottom: 4px;">Build capacity in Nepal for the conduct of systematic, population-based research on Alzheimer’s disease and related dementias.
                </li>
                <li>Develop and implement a new, longitudinal cohort study of ADRD and related aging-associated health conditions among older adults in Nepal.</li>
            </ul>
            <div style=" margin-bottom: 18px; font-size: 1.1rem; ">
                <h4 style=" color: #1a365d; font-size: 1.1rem; font-weight: 600; margin-bottom: 10px;">
                    Specific Aims
                </h4>
                <ol style="  font-size: 1.1rem; padding-left: 20px; margin: 0;">
                    <li style="margin-bottom: 12px;">
                        Build research capacity for the conduct of studies of ADRD and other aging-related changes in health. Specific capacity-building activities focus on:
                        <ul style="list-style-type: disc; margin-top: 8px; padding-left: 20px;">
                            <li>The design and administration of culturally appropriate cognitive assessments to identify ADRD in the general population.</li>
                            <li>Building expertise in statistical methods for the analysis of longitudinal data from complex surveys.</li>
                        </ul>
                    </li>
                    <li style="margin-bottom: 12px;">
                        Design and conduct a population-based study of ADRD and other age-associated conditions among 4,000 adults aged 50+ and their informants, including a baseline interview and a follow-up interview two years later.
                    </li>
                    <li>
                        Estimate the prevalence and incidence of ADRD and its primary clinical feature, cognitive impairment, and test associations between primary risk factors and ADRD/cognitive impairment and other relevant outcomes (e.g., disability, caregiving needs).
                        <ul style="list-style-type: disc; margin-top: 8px; padding-left: 20px;">
                            <li>In these analyses, we will test the specific hypotheses that longer duration of international labor migration and exposure to armed conflict are associated with an increased risk of ADRD and cognitive impairment.</li>
                        </ul>
                    </li>
                </ol>
            </div>

        </div>

        <!-- Hidden Content (unchanged) -->
        <div id="hidden-content"
            style="display: none; line-height: 1.7; margin-top: 30px; padding-top: 30px; border-top: 1px solid #e2e8f0;">

            <div style="margin-bottom: 35px;">


                <section class="methodology-section">

                    <h3
                        style=" color: #1a365d; font-size: 1.5rem; font-weight: 600; margin-bottom: 10px; position: relative; padding-left: 20px;">
                        Methodology
                    </h3>
                    {{-- <h2 class="text-center text-primary mb-5 section-title"></h2> --}}

                    <div class="row g-4">

                        <!-- Study Design -->
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0 methodology-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 methodology-icon"><i class="bi bi-diagram-3"></i></div>
                                        <h5 class="mb-0 text-primary">Study Design</h5>
                                    </div>
                                    <p class=" small mb-0 ">
                                        This is a longitudinal cohort study of a representative sample of <strong>4,000
                                            older adults</strong> aged 50+ and their <strong>4,000 key
                                            informants</strong>
                                        from the Chitwan Valley Family Study (CVFS) panel, using a stratified two-stage
                                        cluster area probability sampling design.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Survey Data Collection -->
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0 methodology-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 methodology-icon"><i class="bi bi-laptop"></i></div>
                                        <h5 class="mb-0 text-primary">Data Collection</h5>
                                    </div>
                                    <p class=" small mb-0">
                                        Using <strong>Nepal Harmonized Cognitive Assessment Protocol (NHCAP)</strong>
                                        instruments, <strong>face-to-face Computer-Assisted Personal Interviewing
                                            (CAPI)</strong> is administered on laptops. Interviews include cognitive and
                                        physical function tests, standardized measures, informant interviews, and health
                                        assessments.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Biomarker Collection -->
                        <div class="col-md-4">
                            <div class="card h-100 shadow-sm border-0 methodology-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="me-3 methodology-icon"><i class="bi bi-droplet-half"></i></div>
                                        <h5 class="mb-0 text-primary">Biomarker Collection</h5>
                                    </div>
                                    <p class=" small mb-0">
                                        A team of licensed and trained phlebotomists collect <strong>30 ml of
                                            blood</strong>
                                        during a single draw using a <strong>vacuum extraction system</strong> following
                                        best practices in biomarker collection.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
                <!-- Unique Features Section -->
                <h3
                    style=" color: #1a365d; font-size: 1.5rem; font-weight: 600; margin-bottom: 10px; position: relative; padding-left: 20px;">
                    What Makes CVFS-SCAN Unique
                </h3>

                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
                    <div
                        style="background: #f8fafc; border-radius: 8px; padding: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                        <h4
                            style="color: #2c5282; font-size: 1.1rem; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center;">
                            <svg style="margin-right: 8px; width: 20px; height: 20px; fill: #3182ce;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                            </svg>
                            Integration with a Multigenerational Study
                        </h4>
                        <p style=" font-size: 1rem;">
                            Unlike new studies built from scratch, CVFS-SCAN draws on over two decades of data about
                            participants' families, education, migration history, economic background, and health. This
                            allows researchers to investigate life-course influences on cognitive aging in a way few
                            other LMIC studies can.
                        </p>
                    </div>

                    <div
                        style="background: #f8fafc; border-radius: 8px; padding: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                        <h4
                            style="color: #2c5282; font-size: 1.1rem; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center;">
                            <svg style="margin-right: 8px; width: 20px; height: 20px; fill: #3182ce;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm0 16c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zm1-11h-2v3H8v2h3v3h2v-3h3v-2h-3V8z" />
                            </svg>
                            Focus on Nepali-Specific Risk Factors
                        </h4>
                        <p style=" font-size: 1rem;">
                            CVFS-SCAN is one of the first studies globally to test the role of labor migration and exposure to armed
                            conflict as risk factors for ADRD, experiences that are common and often overlapping in
                            Nepal.
                        </p>
                    </div>

                    <div
                        style="background: #f8fafc; border-radius: 8px; padding: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                        <h4
                            style="color: #2c5282; font-size: 1.1rem; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center;">
                            <svg style="margin-right: 8px; width: 20px; height: 20px; fill: #3182ce;"
                                viewBox="0 0 24 24">
                                <path
                                    d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                            </svg>
                            Inclusive Design
                        </h4>
                        <p style=" font-size: 1rem;">
                            CVFS-SCAN collects data not only from older adults aged 50+, but also from their close
                            family members or informants, an approach that enables the study of caregiving dynamics,
                            intergenerational relationships, and shared decision-making in aging households.
                        </p>
                    </div>

                    <div
                        style="background: #f8fafc; border-radius: 8px; padding: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                        <h4
                            style="color: #2c5282; font-size: 1.1rem; font-weight: 600; margin-bottom: 10px; display: flex; align-items: center;">
                            <svg style="margin-right: 8px; width: 20px; height: 20px; fill: #3182ce;"
                                viewBox="0 0 24 24">
                                <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
                                <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6z" opacity=".7" />
                            </svg>
                            Foundational Capacity-Building
                        </h4>
                        <p style=" font-size: 1rem;">
                            <!-- color: #4a5568; -->
                            In addition to producing data, CVFS-SCAN is a platform to train the next generation of Nepali researchers in dementia science. Training includes cognitive assessment, biospecimen collection, survey management, and data analysis using longitudinal and multilevel techniques.
                        </p>
                    </div>
                </div>

                <!-- Highlight Quote -->
                <div
                    style="background: linear-gradient(135deg, #ebf4ff, #bee3f8); border-left: 4px solid #3182ce; padding: 25px; border-radius: 0 8px 8px 0; margin: 30px 0;">
                    <p style="font-size: 1.1rem; color: #2b6cb0; font-weight: 500; margin: 0; line-height: 1.6;"><em>
                            "Through CVFS-SCAN, Nepal joins the global effort to understand, track, and address dementia,
                            ensuring
                            that older adults can live with dignity, support, and opportunity in the years to come."</em>
                    </p>
                </div>

            </div>

        </div>

        <!-- Read More Button -->
        <div style="text-align: center; margin-top: 30px; margin-bottom: 20px;">
            <button id="read-more-btn"
                style="background: linear-gradient(135deg, #4299e1, #3182ce); 
                   color: white; 
                   border: none; 
                   padding: 12px 28px; 
                   border-radius: 30px; 
                   cursor: pointer; 
                   font-size: 1rem;
                   font-weight: 500;
                   display: inline-flex;
                   align-items: center;
                   gap: 10px;
                   transition: all 0.3s ease;
                   box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11);">
                <span>Read More</span>
                <svg id="chevron-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                    fill="currentColor" viewBox="0 0 16 16" style="transition: transform 0.3s ease;">
                    <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
        </div>
    </div>


</section>



<section class="timeline-section py-2">
    <div class="container ">
        <h1 class="text-center   mb-5"
            style="width: 100%; color: #1a365d; font-size: 2.2rem; font-weight: 700; letter-spacing: -0.5px; margin-top: 30px;">
            Timeline and Current Status
        </h1>

        <div class="timeline">

            <!-- 2022 -->
            <div class="timeline-item" data-aos="fade-up">
                <div class="timeline-icon"><i class="bi bi-flag"></i></div>
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="mb-1 text-primary">2022</h5>
                        <ul class=" mb-0 small">
                            <li>The study commenced in 2022 and is projected to conclude by 2027.</li>
                            <li>Ethical approval from NHRC, Nepal received on December 20, 2022 (NHRC Ref No: 1334).
                            </li>
                            <li>Adaptation and translation of survey instruments and cognitive test battery development
                                process started.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 2023 -->
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                <div class="timeline-icon"><i class="bi bi-chat-left-text"></i></div>
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="mb-1 text-primary">2023</h5>
                        <ul class=" mb-0 small">
                            <li>Iterative translation and expert review of survey instruments.</li>
                            <li>Focus Group Discussion on translation of study materials.</li>
                            <li>Trainers training on cognitive interviewing technique.</li>
                            <li>Piloting of venous blood collection, extraction, storage, and shipping.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 2024 -->
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                <div class="timeline-icon"><i class="bi bi-person-lines-fill"></i></div>
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="mb-1 text-primary">2024</h5>
                        <ul class=" mb-0 small">
                            <li>Cognitive interviews conducted with diverse respondents aged 50+ from various
                                backgrounds to assess understanding of study questions and identify areas of confusion
                                for further refinement.</li>
                            <li>Interviewer hiring and organized trainings (GIT, NHCAP, SST trainings and data analysis
                                training).</li>
                            <li>Pre-testing of the survey instruments.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 2025 (CURRENT YEAR) -->
            <div class="timeline-item timeline-current" data-aos="fade-up" data-aos-delay="300">
                <div class="timeline-icon"><i class="bi bi-stars"></i></div>
                <div class="card shadow-sm border border-primary">
                    <div class="card-body">
                        <h5 class="mb-1 text-primary">2025 <span class="badge bg-primary ms-2">Current Year</span>
                        </h5>
                        <ul class=" mb-0 small">
                            <li>Revision of survey instruments/items as per the pre-test results.</li>
                            <li>Organized training for final production.</li>
                            <li>Final production launched from February 20, 2025.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- 2026–27 -->
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                <div class="timeline-icon"><i class="bi bi-repeat"></i></div>
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="mb-1 text-primary">2026–27</h5>
                        <ul class=" mb-0 small">
                            <li>Follow-up waves.</li>
                            <li>Conducting follow-up assessments to measure cognitive change over time.</li>
                            <li>Analyze longitudinal patterns of ADRD development and progression.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="collaborators-section py-5 bg-light">
    <div class="container">
        <h1 class="text-center mb-5"
            style="color: #1a365d; font-size: 2.2rem; font-weight: 700; letter-spacing: -0.5px;">
            Our Collaborators
        </h1>

        <div class="row justify-content-center text-center">
            <div class="col-md-4 mb-4">
                <div class="collaborator-hover">
                    <img src="{{ asset('images/Michigan University.JPG') }}" alt="Michigan University" class="img-fluid collaborator-img">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="collaborator-hover">
                    <img src="{{ asset('images/Georgetownlogo.jpg') }}" alt="Georgetown University" class="img-fluid collaborator-img">
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="collaborator-hover">
                    <img src="{{ asset('images/ISERN.png') }}" alt="ISER-N" class="img-fluid collaborator-img">
                </div>
            </div>
        </div>
    </div>
</section>



@endsection