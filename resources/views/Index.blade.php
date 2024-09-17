<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="container-fluid p-0 mb-5">
        <div id="imageSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Elderly_Men.JPG" class="d-block w-100" alt="Mountain landscape">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <h5>Image 1</h5>
                        <p>Image description.......</p>
                    </div> --}}
                </div>
                <div class="carousel-item">
                    <img src="images/background.JPG" class="d-block w-100" alt="backgroundpic">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <h5>Image 2</h5>
                        <p>Image description.......</p>
                    </div> --}}
                </div>
                <div class="carousel-item">
                    <img src="images/nepal.jpg" class="d-block w-100" alt="Nepal">
                    {{-- <div class="carousel-caption d-none d-md-block">
                        <h5>Image 3</h5>
                        <p>Image description.......</p>
                    </div> --}}
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#imageSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        </div>
        
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = new bootstrap.Carousel(document.getElementById('imageSlider'), {
                interval: 3000,
                wrap: true,
                keyboard: true
            });

        });
    </script>

    <div class="mb-3">
        <h2>Study on Cognition and Aging in Nepal.</h2>
        <p>Welcome to our research initiative on International Labor Migration, Armed Conflict, and Alzheimer's Disease in
            Nepal. As Nepal's population ages, the country faces a rising number of adults at risk of Alzheimer's Disease
            and Related Dementias (ADRD). This study seeks to address a significant gap in research by investigating the
            potential impact of exposure to armed conflict, labor migration, and genetic-environmental interactions on ADRD
            risk in Nepal. Through rigorous data collection and analysis, we aim to guide the development of strategies to
            prevent and reduce the burden of ADRD in aging populations.</p>
            <p>
                Our project, the Chitwan Valley Family Study on Cognition and Aging in Nepal (CVFS-SCAN), is designed to explore how aging impacts the health and cognition of older adults in Nepal. With a focus on ADRD, we aim to understand the prevalence, risk factors, and long-term effects of international labor migration and armed conflict on dementia and other age-associated conditions. By engaging over 4,000 adults aged 50 and older and their caregivers, our study aims to shed light on critical health issues facing the elderly in Nepal.
            </p>

    </div>
    <div class="mb-5">
        <h2>Why This Matters</h2>
        <p>
            With an aging population, Nepal needs to be prepared for the growing health challenges that accompany it. Understanding the factors that contribute to ADRD will allow us to develop prevention strategies and policies that reduce the burden of dementia on individuals, families, and communities. Our research will not only help Nepal but also provide valuable insights for other low-resource countries facing similar issues.

        </p>

    </div>
    <section class="collaborators-section">
        <div class="container">
            <h2 class="text-center mb-5">Our Collaborators</h2>
            <div class="position-relative">
                <div class="collaborators-slider">
                    <div class="row">
                        <div class="col-md-3 col-sm-7 mb-4 mb-md-0">
                            <div class="collaborator-card">
                                <img src="images/Michigan University.JPG" alt="Michigan University" class="img-fluid mb-4 collaborator-card--img">
                                {{-- <h5 class="text-center">University of Michigan</h5> --}}
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                            <div class="collaborator-card">
                                <img src="images/Tu.PNG" alt="TU" class="img-fluid mb-4 collaborator-card--img">
                                {{-- <h5 class="text-center">Tribhuvan University</h5> --}}
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                            <div class="collaborator-card">
                                <img src="images/NIH.JPG" alt="NIH" class="img-fluid mb-4 collaborator-card--img">
                                {{-- <h5 class="text-center">Norvic International Hospital </h5> --}}
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                            <div class="collaborator-card">
                                <img src="images/Iser.PNG" alt="David Thompson" class="img-fluid mb-3">
                                {{-- <h5 class="text-center">ISER-N</h5> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
