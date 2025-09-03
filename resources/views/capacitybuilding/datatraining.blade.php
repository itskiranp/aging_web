<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'CVFS on Cognition and Aging in Nepal')
@section('content')
<div class="container mt-4 mb-5">
    <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('#') }}">Capacity Building</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Analysis</li>
        </ol>
    </nav>

    <div>
        <h2 class="gallery-title">Data Analysis</h2>
    </div>

    <div class="accordion mt-3" id="dataAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="True" aria-controls="collapseOne">
                    <strong>Workshop: Building Your Biostatistics Toolbox at ISER-N</strong>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#dataAccordion">
                <div class="accordion-body">
                    <div style="width: auto; margin: 0 auto; padding: 20px; font-family: 'Segoe UI', Arial, sans-serif; color: #333; line-height: 1.6;">
                        <!-- Header Section -->

                        <!-- Introduction Paragraph -->
                        <div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 30px;">
                            <p style="font-size: 16px; line-height: 1.7; margin: 0;">The Institute for Social and Environmental Research Nepal (ISER-N), in partnership with the University of Michigan School of Public Health, hosted a dynamic two-day workshop titled <strong style="color: #2980b9;">"Building Your Biostatistics Toolbox"</strong> on <strong>May 22&ndash;23, 2025</strong> at Fulbari, Chitwan. Participants included doctors from Bharatpur Hospital, Chitwan Medical College, and Bakulahar Hospital, along with researchers from academic institutions across Chitwan and ISER-N's in-house research team. The event aimed to enhance their capacity in biostatistical analysis.</p>
                        </div>
                        <!-- Image Gallery - Row 1 -->
                        <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 20px;"><!-- Image 1 -->
                            <!-- Image 2 -->
                            <div style="flex: 1 1 calc(50% - 20px); min-width: 300px; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"><img style="width: 100%; height: 250px; object-fit: cover;" src="/images/biostaticspic2.jpg" alt="Session by Dr. Mousumi Banerjee" />
                                <div style="padding: 15px;">
                                    <p style="font-style: italic; font-size: 14px; color: #555; margin: 0; border-left: 3px solid #3498db; padding-left: 10px;">Dr. Mousumi Banerjee, a Collegiate Research Professor from the University of Michigan, delivers an engaging session on regression modeling and statistical reasoning, joined by active participant&rsquo;s eager to apply these methods.</p>
                                </div>
                            </div>

                            <div style="flex: 1 1 calc(50% - 20px); min-width: 300px; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"><img style="width: 100%; height: 250px; object-fit: cover;" src="/images/biostaticspic4.jpg" alt="Hands-on SPSS session" />
                                <div style="padding: 15px;">
                                    <p style="font-style: italic; font-size: 14px; color: #555; margin: 0; border-left: 3px solid #3498db; padding-left: 10px;">Participants applied their learning through hands-on SPSS exercises, supported by ISER-N's technical team led by Mrs. Adina Gurung, Data Manager. The practical sessions focused on linear and logistic regression, facilitating the real-world application of statistical concepts.</p>
                                </div>
                            </div>



                        </div>
                        <!-- Image Gallery - Row 2 -->
                        <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;"><!-- Image 3 -->

                            <!-- Image 4 -->
                            <div style="flex: 1 1 calc(50% - 20px); min-width: 300px; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"><img style="width: 100%; height: 250px; object-fit: cover;" src="/images/biostaticspic3.jpg" alt="Certificate distribution" />
                                <div style="padding: 15px;">
                                    <p style="font-style: italic; font-size: 14px; color: #555; margin: 0; border-left: 3px solid #3498db; padding-left: 10px;">Dr. Mousumi Banerjee and ISER-N leadership congratulate participants during the certificate distribution ceremony, celebrating the successful completion of the biostatistics training.</p>
                                </div>
                            </div>

                            <div style="flex: 1 1 calc(50% - 20px); min-width: 300px; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"><img style="width: 100%; height: 250px; object-fit: cover;" src="/images/biostaticspic1.jpg" alt="Group photo of participants" />
                                <div style="padding: 15px;">
                                    <p style="font-style: italic; font-size: 14px; color: #555; margin: 0; border-left: 3px solid #3498db; padding-left: 10px;">Participants of the "Building Your Biostatistics Toolbox" workshop pose for a group photo at ISER-N. The event brought together doctors, statisticians, and public health professionals from across the region.</p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <!-- <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong> International Labor Migration, Armed Conflict, and Alzheimer Disease and Related Dementia Risk in Nepal</strong>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#dataAccordion">
                <div class="accordion-body">

                    Overview
                    <section class="container my-5">
                        <h2 class="section-title">Program Overview</h2>
                        <p>
                            The training program was conducted by the Institute for Social and Environmental Research Nepal (ISER-N) in partnership with Survey Research Operations at the University of Michigan (SRO-UM). It aimed to enhance enumerators’ research skills, uphold ethical standards, and utilize digital tools like SurveyTrak and Blaise for high-quality data collection.
                        </p>
                    </section>

                    Training Objectives
                    <section class="container my-5">
                        <h2 class="section-title">Objectives</h2>
                        <ul>
                            <li>Strengthen enumerators' understanding of research methodology</li>
                            <li>Improve general and cognitive interviewing techniques</li>
                            <li>Promote ethical data collection and informed consent</li>
                            <li>Enhance use of SurveyTrak and Blaise software</li>
                            <li>Facilitate practical, hands-on training and certification</li>
                        </ul>
                    </section>

                    Training Phases
                    <section class="container my-5">
                        <h2 class="section-title">Training Components</h2>

                        <div class="mb-4">
                            <h4>1. General Interviewing Techniques (GIT)</h4>
                            <p>
                                Focused on effective probing, active listening, managing sensitive topics, and minimizing interviewer bias. Emphasis was placed on confidentiality, ethical practices, and accurate data recording.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h4>2. Nepali Harmonized Cognitive Assessment Protocol (N-HCAP)</h4>
                            <p>
                                Developed enumerator skills in conducting cognitive assessments covering memory, attention, language, executive function, visuospatial skills, and processing speed. These were crucial in identifying cognitive impairments and tracking changes over time.
                            </p>
                        </div>

                        <div>
                            <p>
                                Participants took part in hands-on sessions, demonstrations, and simulations focused on real-world field scenarios, culminating in certification.
                            </p>
                        </div>
                    </section>

                    Facilitators
                    <section class="container my-5">
                        <h2 class="section-title">Facilitators</h2>
                        <p>
                            The training was led by a multidisciplinary team:
                        </p>
                        <ul>
                            <li><strong>Prof. Dr. Dirgha Jibi Ghimire</strong> – Principal Investigator</li>
                            <li><strong>Ms. Indra Chaudhary</strong> – Project Coordinator</li>
                            <li><strong>Mr. Prem Pandit</strong> & <strong>Mr. Hardik Sapkota</strong> – Project Managers</li>
                            <li><strong>Ms. Adina Gurung</strong> – Data Manager</li>
                            <li><strong>Mr. Krishna Shrestha</strong> & <strong>Mr. Rajendra Ghimire</strong> – Research Officers</li>
                            <li><strong>Ms. Mamata Thapa, Mr. Bibek Sapkota, Ms. Nira Gurung, Ms. Sita Chaudhary, Mr. Dil Bahadur C.K., Mr. Gobhinda Lamichhane</strong> – Assistant Research Officers</li>
                            <li><strong>Ms. Maureen O’Brien</strong> – Senior Survey Specialist, SRO-UM</li>
                            <li><strong>Ms. Jennie Williams</strong> – Senior Data Manager, SRO-UM</li>
                        </ul>
                    </section>

                    Participants Demographics
                    <section class="container my-3">
                        <h2 class="section-title">Participants Demographics</h2>
                        <div class="row align-items-center">

                            Gender Distribution
                            <div class="col-md-4 mb-4 mb-md-0">
                                <img src="/images/pie1.png" alt="Demographics Pie Chart" class="img-fluid rounded shadow-sm">
                            </div>

                            Pie Chart Image
                            <div class="col-md-4 mb-4 mb-md-0">
                                
                                <img src="/images/pie2.png" alt="Demographics Pie Chart" class="img-fluid rounded shadow-sm">
                                
                            </div>

                            Placeholder Text (or can be removed if not needed)
                           <div class="col-md-4 mb-4 mb-md-0">
                                
                                <img src="/images/pie3.png" alt="Demographics Pie Chart" class="img-fluid rounded shadow-sm">
                                
                            </div>
                        </div>

                        Closing Paragraph
                        <div class="row mt-4">
                            <div class="col-12">
                                <p>This diverse demographic composition reflects a wide range of perspectives brought to the training program.</p>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div> -->

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong> Data Analysis Training - 2025</strong>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#dataAccordion">
                <div class="accordion-body">

                    <!-- Header / Introduction -->
                    <div class="container my-3">
                        <h4 style="color:#444; font-weight:600; margin-top:15px;">

                            Data Analysis Training using Stata Software

                        </h4>
                        <div style="border-left:4px solid #2b6cb0; padding-left:15px; margin:15px 0;">
                            <p style="margin:0; font-style:italic; font-size:0.95rem;">May 05 – 09, 2025 |10:00 AM - 4:00 PM | ISER-N, Fulbari Campus</p>
                            <p style="font-size:1rem; margin-top:5px; text-align:justify;">
                                <strong>Trainers:</strong> Dr. Uttam Sharma

                            </p>

                        </div>
                    </div>

                    <!-- Overview -->
                    <section class="container my-5">
                        <h5 class="mb-3"><strong>Workshop Overview</strong></h5>
                        <p>The training aimed to enhance the analytical capabilities of participants, equipping them with essential statistical tools and techniques for robust data analysis. Each day focusing on critical aspects of data analysis. </p>
                    </section>

                    <!-- Day-by-Day Breakdown with Images -->
                    <section class="container my-3">
                        <h5 class="mb-4"><strong>Workshop Highlights</strong></h5>
                        <div class="row g-4">
                            <section class="container my-3">
                                <div class="row g-4">
                                    <!-- Day 1 Card -->
                                    <div class="col-md-6">
                                        <div class="card h-100 shadow-sm">
                                            <img src="/images/uttamsir2.jpg" class="card-img-top" alt="Day 1 Image">
                                            <div class="card-body">
                                                <h5 class="card-title">Day 1: Data & Visualization</h5>
                                                <p class="card-text">
                                                    
                                                    Topics included variable types (categorical, ordinal, continuous) and graphical tools like histograms, bar charts, and box plots. A hands-on session involved exploring real-world datasets to identify variables, outliers, and data entry issues.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Day 2 Card -->
                                    <div class="col-md-6">
                                        <div class="card h-100 shadow-sm">
                                            <img src="/images/uttamsir1.jpg" class="card-img-top" alt="Day 2 Image">
                                            <div class="card-body">
                                                <h5 class="card-title">Day 2: Descriptive Statistics</h5>
                                                <p class="card-text">
                                                    Participants learned to compute measures of central tendency (mean, median, mode) and dispersion (variance, standard deviation). The session highlighted the difference between normal and skewed distributions, with practical exercises using village-level income data to calculate range and IQR.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Day 3 Card -->
                                    <div class="col-md-6">
                                        <div class="card h-100 shadow-sm">
                                            <img src="/images/uttamsir3.jpg" class="card-img-top" alt="Day 3 Image">
                                            <div class="card-body">
                                                <h5 class="card-title">Day 3: Relationships & Sampling</h5>
                                                <p class="card-text">
                                                    The focus was on exploring trends, patterns, and the differences between correlation and causation. The Central Limit Theorem and random sampling were introduced, and participants engaged in simulations to understand sampling errors and variability.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Day 4 & 5 Merged Card -->
                                    <div class="col-md-6">
                                        <div class="card h-100 shadow-sm">
                                            <img src="/images/uttamsir4.jpg" class="card-img-top" alt="Day 4 and 5 Image">
                                            <div class="card-body">
                                                <h5 class="card-title">Days 4 & 5: Regression & Hypothesis Testing</h5>
                                                <p class="card-text">
                                                    On the final day, participants learned advanced multivariate regression techniques, including OLS and Logit models, which enabled them to explore relationships among multiple variables. The workshop concluded with participant presentations, where they applied these techniques to real-world data
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </section>

                        </div>
                    </section>

                    <!-- Participants List -->

                    <section class="container my-3">
                        <h5><strong>Participants</strong></h5>
                        <p>
                            The following participants attended the workshop and actively engaged in discussions and exercises throughout the program:
                        </p>
                        <p>
                            <strong>Mrs. Adina Gurung </strong> – ISERN Data Manager<br>
                            <strong>Kamana Ghimire</strong> – ISERN staff<br>
                            <strong>Bibek Sapkota</strong> – ISERN Staff<br>
                            <strong>Deepika Bagale</strong> – ISERN staff<br>
                            <strong>Kiran Poudel</strong> – ISERN Staff<br>
                            <strong>Prashiddha Sharma</strong> – Intern<br>
                            <strong>Adarsha Pokhrel</strong> – Intern
                        </p>
                    </section>

                </div>
            </div>
        </div>


        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <strong> Data Analysis Training - 2024</strong>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#dataAccordion">
                <div class="accordion-body">

                    <!-- Header / Introduction -->
                    <div class="container my-3">
                        <h4 style="color:#444; font-weight:600; margin-top:15px;">

                            Data Analysis Training using Stata Software

                        </h4>
                        <div style="border-left:4px solid #2b6cb0; padding-left:15px; margin:15px 0;">
                            <p style="margin:0; font-style:italic; font-size:0.95rem;">December 02 – 05, 2024 |10:00 AM - 4:00 PM | ISER-N, Fulbari Campus</p>
                            <p style="font-size:1rem; margin-top:5px; text-align:justify;">
                                <strong>Trainers:</strong> Prof. Sarah Brauner-Otto, Khandys Agnant, Adina Gurung

                            </p>

                        </div>
                    </div>

                    <!-- Overview -->
                    <section class="container my-5">
                        <h5 class="mb-3"><strong>Workshop Overview</strong></h5>
                        <p>The workshop was designed to enhance the statistical data analysis skills of ISER-Nepal staff and students, targeting participants who wished to strengthen their analytical abilities and gain practical knowledge for academic and professional work. The Data Analysis Training using Stata software provided participants with an in-depth understanding of statistical techniques and tools essential for effective data handling. The workshop further aimed to equip individuals with the practical skills necessary to carry out advanced data analysis tasks using Stata.</p>
                    </section>

                    <!-- Day-by-Day Breakdown with Images -->
                    <section class="container my-5">
                        <h5 class="mb-4"><strong>Workshop Highlights</strong></h5>
                        <div class="row g-4">

                            <!-- Day 1 -->
                            <div class="col-md-6">
                                <div class="card shadow-sm h-100">
                                    <img src="/images/sarahkhandy1.jpg" class="card-img-top" alt="Day 1 Image">
                                    <div class="card-body">
                                        <h5 class="card-title">Day 1: Introduction to Stata</h5>
                                        <p class="card-text">On the first day, Adina Gurung opened with an introduction to ISERN and its goals. Professor Sarah then provided an overview of Stata Software, followed by talks on data types and their importance in statistical analysis. The session raised awareness of Stata’s role in various data analysis tasks. Instructor Khandys covered tabulation, code generation, recoding, data labeling, and practical exercises.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Day 2 -->
                            <div class="col-md-6">
                                <div class="card shadow-sm h-100">
                                    <img src="/images/sarahkhandy3.jpg" class="card-img-top" alt="Day 2 Image">
                                    <div class="card-body">
                                        <h5 class="card-title">Day 2: Statistical Concepts</h5>
                                        <p class="card-text">Day Two focused on basic statistical concepts such as notation, normal distribution, measures of dispersion, confidence intervals, and hypothesis testing—essential for understanding data behavior and conducting hypothesis-driven analysis. The sessions enabled participants to interpret statistical results accurately and apply insights to real-world problems.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Day 3 -->
                            <div class="col-md-6">
                                <div class="card shadow-sm h-100">
                                    <img src="/images/sarahkhandy4.jpg" class="card-img-top" alt="Day 3 Image">
                                    <div class="card-body">
                                        <h5 class="card-title">Day 3: Univariate & Bivariate Stats</h5>
                                        <p class="card-text">Third day was focused on the estimation and interpretation of univariate and bivariate statistics. The participants learned how to analyze data for one variable (univariate) and two variables (bivariate), gaining practical skills in the interpretation of data and analysis of correlation.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Day 4 -->
                            <div class="col-md-6">
                                <div class="card shadow-sm h-100">
                                    <img src="/images/sarahkhandy2.jpg" class="card-img-top" alt="Day 4 Image">
                                    <div class="card-body">
                                        <h5 class="card-title">Day 4: Multivariate Regression</h5>
                                        <p class="card-text">On the final day, participants learned advanced multivariate regression techniques, including OLS and Logit models, enabling them to explore relationships among multiple variables. The workshop concluded with participant presentations, where they applied these techniques to real-world data.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <!-- Participants List -->

                    <section class="container my-5">
                        <h5 class="mb-4"><strong>Participants</strong></h5>
                        <p>
                            The following participants attended the workshop and actively engaged in discussions and exercises throughout the program:
                        </p>
                        <p>
                            <strong>Dr. Ananta Dahal</strong> – Student<br>
                            <strong>Asmi Paudel</strong> – Student<br>
                            <strong>Bibek Sapkota</strong> – ISERN Staff<br>
                            <strong>Goma Rai</strong> – Student<br>
                            <strong>Kamana Ghimire</strong> – ISERN Staff<br>
                            <strong>Manila Chaudhary</strong> – Student<br>
                            <strong>Sabina Shrestha</strong> – Student<br>
                            <strong>Shurendra Ghimire</strong> – Student
                        </p>
                    </section>

                </div>



            </div>
        </div>

    </div>
</div>




















</div>
@endsection