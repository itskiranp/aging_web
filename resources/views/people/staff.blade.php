<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'researcher')

@section('content')

<div class="container text-center my-5">
    <h2>Staff </h2>

   
    <!-- Principal Investigators Section -->
    <div class="my-5">
        <div class="row justify-content-center">
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Dr_ Dhirgha_jibi_ghimire.jpg" alt="Prof. Dr. Dirgha J. Ghimire"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Prof. Dr. Dirgha J. Ghimire</h3>
                    {{-- <p class="qualification">Ph.D., Social Demographer, Professor University of Michigan and
                        Director, ISER-N </p> --}}
                    <p class="position">EXECUTIVE DIRECTOR</p> 
                    <a href="">Website</a>
                    <p><a href="">Email</a></p>
                </div>

            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Indra_k_chy.JPG" alt="Indra_k_chy"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Mrs. Indra Kumari Chaudhary</h3>
                    {{-- <p class="qualification">Master in Sociology</p> --}}
                    <p class="position">PROGRAM COORDINATOR</p>
                    <a href="">Email</a>
                    <p><a href="">Cirriculum Viate</a></p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/prem-p-pandit.jpg" alt="prem-p-pandit"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Mr. Prem Prakash Pandit</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">STUDY MANAGER</p>
                    <p><a href="">Email</a></p>
                    <p><a href="">Cirriculum Viate</a></p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/mrs_adina_gurung.jpg" alt="mrs_adina_gurung"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Mrs. Adina Gurung</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">DATA MANAGER</p>
                    <p><a href="">Email</a></p>
                    <p><a href="">Cirriculum Viate</a></p>
                </div>
            </div>
        </div>
    </div>
</div>






    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection
