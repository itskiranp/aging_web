<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'researcher')

@section('content')

<div class="container text-center my-5">
    <h2>Administrative Information</h2>

   
    <!-- Principal Investigators Section -->
    <div class="my-5">
        <div class="row justify-content-center">
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Dr.%20Dhirgha%20jibi%20ghimire.jpg" alt="Dr. Dirgha Jibi Ghimire"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Dr. Dirgha Jibi Ghimire</h3>
                    <p class="qualification">Ph.D., Social Demographer, Professor University of Michigan and
                        Director, ISER-N </p>
                    <p class="position">Principal Investigator</p>
                </div>

            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Indra_k_chy.JPG" alt="Dr. Carlos Mendes de Leon"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Indra Kumari Chaudhary</h3>
                    <p class="qualification"> Master in Sociology</p>
                    <p class="position">Co-Investigator</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Pratik_Adhikari.JPG" alt="Pratik_Adhikari"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Pratik_Adhikari</h3>
                    <p class="qualification"> Ph.D.</p>
                    <p class="position">Co-Investigator</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/William_G_ Axinn.JPG" alt="William G. Axinn"
                        class="img-fluid rounded-circle mb-3">
                    <h3>William G. Axinn</h3>
                    <p class="qualification"> Ph.D.</p>
                    <p class="position">Principal Investigator</p>
                </div>
            </div>
        </div>
    </div>
</div>






    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection
