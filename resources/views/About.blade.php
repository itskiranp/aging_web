<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'About')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 mb-4 mb-md-0">
                <h2 class="mb-4">About Our Project</h2>
                <div class="card">
                    {{-- <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="Project workspace"> --}}
                    <div class="card-body">
                        <h2 class="text-center">International Labor Migration, Armed Conflict and Alzheimer Disease and
                            related Dementia Risk in Nepal</h2>
                        <h5 class="card-title">Our Goal</h5>
                        <p class="card-text">The main goal is to build research capacity and gather data to address and
                            prevent Alzheimer’s disease and related dementias (ADRD) in Nepal’s aging population.</p>
                        <h5 class="card-title">Specific Aims</h5>
                        <p class="card-text">This project focuses on understanding and addressing Alzheimer’s disease and
                            related dementias (ADRD) in Nepal, a growing concern due to the country’s aging population. The
                            study has three main objectives:
                        <ol>
                            <li>Build research capacity to study ADRD and other age-related health conditions by training in
                                cognitive assessments and statistical methods.</li>
                            <li>Conduct a population-based study of 4,000 adults over 50 years of age to gather data on
                                ADRD, with follow-up research.</li>
                            <li>Analyze the impact of key risk factors, including international labor migration and exposure
                                to political conflict, on the prevalence of ADRD.</li>
                        </ol>
                        </p>
                        <h5 class="card-title">Objective</h5>
                        <ol>
                            <li>Estimate the prevalence of ADRD and cognitive impairment and assess key risk factors.</li>
                            <li>Conduct a longitudinal study on aging-related health changes in older adults in Nepal.</li>
                            <li>Build expertise in analyzing complex longitudinal data.</li>
                        </ol>


                        <h5 class="card-title mt-4">Thematic area</h5>
                        <p class="card-text">Non communicable disease, Alzheimer disease and related dementias
                            (ADRD) and International out-migration</p>
                        <h5 class="card-title mt-4">Project Status/Duration</h5>
                        <p>Ongoing/5 years (2022-2027)</p>
                        {{-- <p class="card-text">Our team collaborates remotely, with our main research hub located in Chitwan,Nepal.</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="mb-4">Important Links</h2>
                <div class="d-grid gap-3">
                    <a href="#" class="btn btn-primary">Connect With Us</a>
                    <a href="#" class="btn btn-outline-secondary">Website Feedback</a>
                    <a href="#" class="btn btn-info">Documentation</a>
                    <a href="#" class="btn btn-success">Join Our Team</a>
                </div>
                <div class="card mt-4 mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Stay Updated</h5>
                        <p class="card-text">Subscribe to our newsletter for the latest updates and features.</p>
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div>
                    <div class="map-container">
                        <iframe width="100%" height="100%" style="border:0" loading="lazy" allowfullscreen
                            referrerpolicy="no-referrer-when-downgrade"
                            src="https://maps.gomaps.pro/maps/embed/v1/place?key=AlzaSy2ky9iiI63FurfccxQFYqdzr39DyfrW4GM&q=Chitwan+District,Nepal&zoom=10">
                        </iframe>
                        <div class="map-overlay ">
                            <h3>Study Location</h3>
                            {{-- <p>Chitwan District, Nepal</p> --}}
                        </div>
                        <div class="map-error d-none alert alert-danger" role="alert">
                            Unable to load the map. Please check your internet connection and try again.
                        </div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                    <script>
                        
                        window.addEventListener('error', function(e) {
                            if (e.target.tagName === 'IFRAME') {
                                document.querySelector('.map-error').classList.remove('d-none');
                            }
                        }, true);
                    </script>

                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}


    <section class="research-team py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Research Team</h2>
            <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="team-member">
                            <img src="images/Dr. Dhirgha jibi ghimire.jpg " alt="Dr. Dirgha Jibi Ghimire"
                                class="img-fluid rounded-circle mb-3">
                            <h3>Dr. Dirgha Jibi Ghimire</h3>
                            <p class="qualification">Ph.D., Social Demographer, Professor University of Michigan and
                                Director, ISER-N </p>
                            <p class="position">MPI</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="team-member">
                            <img src="images/Dr. Carlos Mendes de Leon.jpg" alt="Dr. Carlos Mendes de Leon"
                                class="img-fluid rounded-circle mb-3">
                            <h3>Dr. Carlos Mendes de Leon</h3>
                            <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p>
                            <p class="position">MPI</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="team-member">
                            <img src="images/Emily-MarieBriceno-Abreut.jpg" alt="Dr. Emily Briceno-Abreu"
                                class="img-fluid rounded-circle mb-3">
                            <h3>Dr. Emily Briceno-Abreu</h3>
                            <p class="qualification">Ph.D., a neuropsychologist and Clinical Associate Professor University
                                of Michigan</p>
                            <p class="position">Co-I</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="team-member">
                            <img src="images/colter-mitchell.jpg" alt="Dr. Colter Mitchell"
                                class="img-fluid rounded-circle mb-3">
                            <h3>Dr. Colter Mitchell</h3>
                            <p class="qualification">PhD., Associate Professor in the Survey Research Center, University of
                                Michigan</p>
                            <p class="position">Co-I</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="team-member">
                            <img src="images/Janak-Rai.png" alt="Dr. Janak Rai" class="img-fluid rounded-circle mb-3">
                            <h3>Dr. Janak Rai</h3>
                            <p class="qualification"> Ph.D., Anthropologist, Associate Professor Tribhuvan University Nepal
                            </p>
                            <p class="position">Co-I</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="team-member">
                            <img src="images/Dr. Kenneth M. Langa.JPG" alt="Dr. Kenneth M. Langa"
                                class="img-fluid rounded-circle mb-3">
                            <h3>Dr. Kenneth M. Langa</h3>
                            <p class="qualification">M.D., Cyrus Sturgis Professor of Medicine, University of Michigan</p>
                            <p class="position">Co-I</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="team-member">
                            <img src="images/dr-meeta-sainju-pradhan.jpg" alt="Dr. Meeta Sainju Pradhan"
                                class="img-fluid rounded-circle mb-3">
                            <h3>Dr. Meeta Sainju Pradhan</h3>
                            <p class="qualification"> Ph.D., Social Demographer Research Scientist, ISER-N</p>
                            <p class="position">Co-I</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="team-member">
                            <img src="images/Dr. Pankaj Jalan.JPG" alt="Olivia Wilson"
                                class="img-fluid rounded-circle mb-3">
                            <h3>Dr. Pankaj Jalan</h3>
                            <p class="qualification">M.D., Neurologist, Norvic International Hospital</p>
                            <p class="position">Co-I</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="team-member">
                            <img src="images/Uttam-Sharma.jpg" alt="Daniel Park" class="img-fluid rounded-circle mb-3">
                            <h3>Dr. Uttam Sharma</h3>
                            <p class="qualification">Economist, Research Scientist, ISER-N</p>
                            <p class="position">Lead, Co-I</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('keydown', function(event) {
            if (event.key === 'ArrowLeft') {
                document.querySelector('.carousel-control-prev').click();
            } else if (event.key === 'ArrowRight') {
                document.querySelector('.carousel-control-next').click();
            }
        });

        var carousel = new bootstrap.Carousel(document.getElementById('teamCarousel'), {
            interval: 5000,
            wrap: true,
            keyboard: true
        });
    </script>
@endsection
