<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'CVFS')

@section('content')
<main class="container my-4 mb-5">
    <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb" class="d-flex justify-content-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">News and Events</li>
          <li class="breadcrumb-item active" aria-current="page">News</li>
        </ol>
    </nav>

    <!-- Main Header Section -->
    <div class="card-header  mb-4">
        <h2 class="text-start"><strong>Chitwan Valley Family Study - Study on Cognition and Aging in Nepal (CVFS-SCAN)</strong></h2>
    </div>

    <!-- Study Overview Section -->
    <section id="research-details" class="mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title">Project Meeting Concludes Successfully</h3>

                        <p class="card-text">
                            The Chitwan Valley Family Study-Study on Cognition and Aging in Nepal (CVFS-SCAN) is a longitudinal cohort study that has been conducted by ISER-N since 2022 in collaboration with the University of Michigan and Georgetown University. This groundbreaking project examines cognitive assessment, demographic information, and health and life experiences among individuals aged 50 years and above.
                        </p>
                        <p class="card-text">
                            The study engages 4,000 respondents from the CVFS cohort, along with 4,000 key informants who provide additional insights into the lives of the primary respondents. Essential instruments for the study have been meticulously developed, with pre-testing currently underway in Ward-4 of Madi Municipality.
                        </p>
                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="/images/cvfs2024-1.jpeg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="/images/cvfs2024-2.jpeg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="/images/cvfs2024-3.jpeg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="/images/cvfs2024-5.jpeg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                          <p class="card-text mt-3">
                            During the two-day project meeting, the team reviewed data from 77 pre-test respondents and discussed necessary revisions to enhance the study's instruments. The meeting brought together multidisciplinary expertise, including ISER-N’s Executive Director and CVFS-SCAN Principal Investigator, Prof. Dr. Dirgha Jibi Ghimire, along with renowned experts such as Dr. Pankaj Jalan, a neurologist at Norvic Hospital, KTM, Dr. Meeta Sainju Pradhan, a sociologist, Prof. Dr. Janak Rai, a cultural anthropologist and Associate Professor at Tribhuvan University, Dr. Umesh Bogati (MD Geriatric Medicine), and dedicated ISER-N staff.
                          </p>
                        <p class="card-text">
                            Held at ISER-N’s Meeting Hall, the event served as a platform to evaluate pre-test progress and address critical areas for refinement. The participants' collaborative efforts underscore the importance of ensuring high-quality data collection and analysis to achieve the project’s objectives. Additionally, plans for CVFS-SCAN’s further activities were outlined during the meeting. According to these plans, the hiring and training of necessary interviewers and other preparations will be completed by January 2025, with the main survey and data collection scheduled to begin on February 15, 2025.
                        </p>
                        <p class="card-text">
                            This milestone meeting reflects ISER-N’s commitment to advancing research on cognition and aging, contributing significantly to the understanding of demographic and health dynamics in Nepal.
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
