<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'researcher')

@section('content')

<div class="container text-center my-5">
    <h2>Staff Members</h2>

   
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
                    <p class="position">MPI</p>
                </div>

            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Dr.%20Carlos%20Mendes%20de%20Leon.jpg" alt="Dr. Carlos Mendes de Leon"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Dr. Carlos Mendes de Leon</h3>
                    <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p>
                    <p class="position">MPI</p>
                </div>
            </div>
        </div>
    </div>
</div>






    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection
