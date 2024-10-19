<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'researcher')

@section('content')

<div class="container text-center my-5">
    <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb" class="d-flex justify-content-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="#">People</a></li>
          <li class="breadcrumb-item active" aria-current="page">Staff  </li>
        </ol>
      </nav>
      
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
                    <a href="https://dirghaghimire.isernepal.org/" target="_blank">Website</a>
                    <p><a href="mailto:nepdjg@umich.edu">Email</a></p>
                </div>

            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Indra_k_chy.JPG" alt="Indra_k_chy"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Mrs. Indra Kumari Chaudhary</h3>
                    {{-- <p class="qualification">Master in Sociology</p> --}}
                    <p class="position">PROGRAM COORDINATOR</p>
                    <a href="mailto:indraiser@outlook.com">Email</a>
                    <p><a href="/uploads/Indra-Chaudhary.pdf" target="_blank">Cirriculum Viate</a></p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/#" alt="Mr. Hardik Sapkota"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Mr. Hardik Sapkota</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">PROJECT MANAGER</p>
                    <p><a href="">Email</a></p>
                    <p><a href="">Cirriculum Viate</a></p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/prem-p-pandit.jpg" alt="prem-p-pandit"
                        class="img-fluid rounded-circle premiser@outlook.commb-3">
                    <h3>Mr. Prem Prakash Pandit</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">STUDY MANAGER</p>
                    <p><a href="mailto:premiser@outlook.com">Email</a></p>
                    <p><a href="/uploads/Prem-Pandit.pdf" target="_blank">Cirriculum Viate</a></p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/mrs_adina_gurung.jpg" alt="mrs_adina_gurung"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Mrs. Adina Gurung</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">DATA MANAGER</p>
                    <p><a href="mailto:adinaiser@outlook.com">Email</a></p>
                    <p><a href="/uploads/Adina-Gurung-cv.pdf" target="_blank" >Cirriculum Viate</a></p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Rajendra-Ghimire.jpg" alt="Rajendra-Ghimire"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Mr. Rajendra Ghimire</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">RESEARCH OFFICER</p>
                    <p><a href="mailto:rajendraiser@outlook.com">Email</a></p>
                    <p><a href="/uploads/Rajendra-Ghimire.pdf">Cirriculum Viate</a></p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Krishna-Shrestha.jpg" alt="Gita-subedi"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Mr. Krishna Shrestha</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">RESEARCH OFFICER</p>
                    <p><a href="mailto:kshresthatiser@outlook.com">Email</a></p>
                    <p><a href="/uploads/Krishna-Shrestha.pdf" target="_blank">Cirriculum Viate</a></p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Saujanya-Wagle.jpg" alt="Saujanya-Wagle"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Mr. Saujanya Wagle</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">RESEARCH OFFICER - ANALYST</p>
                    <p><a href="mailto:wsaujanya@gmail.com">Email</a></p>
                    <p><a href="/uploads/Saujanya-Wagle-Resume.pdf" target="_blank">Cirriculum Viate</a></p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Gita-subedi.jpeg" alt="Gita-subedi"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Mrs. Gita Subedi</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">FINANCE OFFICER</p>
                    <p><a href="mailto::gitaspandey@gmail.com">Email</a></p>
                    <p><a href="/uploads/Gita-Subedi.pdf" target="_blank">Cirriculum Viate</a></p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Mangal-Raj-Darai.jpg" alt="Gita-subedi"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Mr. Mangal Raj Darai</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">ASST. ACCOUNT OFFICER</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Dil_Bahadur_C K.jpeg" alt="Dil_Bahadur_C K"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Dil Bahadur C.K.</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">ASST. ACCOUNT OFFICER</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/sundari_lama.jpg" alt="sundari_lama"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Sundari Lama</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">ASST. ACCOUNT OFFICER</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Nira-Gurung.jpg" alt="Nira-Gurung"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Nira Gurung</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">ASST. RESEARCH OFFICER</p>
                   
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Sita-Chaudhary.jpg" alt="Sita-Chaudhary"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Sita Chaudhary</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">ASST. RESEARCH OFFICER</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Gobinda-Lamichhane.jpg" alt="Gobinda-Lamichhane"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Govinda Lamichhane</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">ASST. RESEARCH OFFICER</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-member">
                    <img src="/images/Kamana-Ghimiredv.jpg" alt="Kamana-Ghimiredv"
                        class="img-fluid rounded-circle mb-3">
                    <h3>Kamana Ghimire</h3>
                    {{-- <p class="qualification"> Epidemiologist, Georgetown University, Washington DC</p> --}}
                    <p class="position">ASST. RESEARCH OFFICER</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
