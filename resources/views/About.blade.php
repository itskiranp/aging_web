<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'Contact')

@section('content')
    <div class="container my-5">
        <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>

        <h1 class="gallery-title text-center">Contact</h1>

        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-8 mb-4">
                <div class="card contact-card"
                    style="border: none; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: all 0.3s ease; margin-bottom: 20px; border-radius: 8px; overflow: hidden;">
                    <!-- Image Grid with Labels -->
                    <div
                        style="display: flex; height: 220px; position: relative; gap: 8px; padding: 8px 8px 0 8px; background: #f8f9fa;">
                        <!-- ISER Main Building -->
                        <div style="width: 50%; position: relative; border-radius: 6px 6px 0 0; overflow: hidden;">
                            <img src="/images/iserpic1.jpg" alt="ISER-N Main Building"
                                style="width: 100%; height: 100%; object-fit: cover;">
                            <div
                                style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.6); color: white; padding: 5px 10px; font-size: 0.9rem;">
                                ISER Main Building
                            </div>
                        </div>

                        <!-- ISER Guest House -->
                        <div style="width: 50%; position: relative; border-radius: 6px 6px 0 0; overflow: hidden;">
                            <img src="/images/iserguestpic1.jpg" alt="ISER Guest House"
                                style="width: 100%; height: 100%; object-fit: cover;">
                            <div
                                style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.6); color: white; padding: 5px 10px; font-size: 0.9rem;">
                                ISER Guest House
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body" style="padding: 20px;">
                        <h3 class="card-title"
                            style="margin: 0 0 12px 0; font-size: 1.4rem; color: #222; font-weight: 600;">
                            Institute for Social and Environmental Research-Nepal (ISER-N)
                        </h3>
                        <p class="card-text" style="margin: 0; color: #555; line-height: 1.6; font-size: 1rem;">
                            ISER-N is a premier research and development institute. The institute adopts a three-pronged
                            working approach that interlinks research, capacity building, and policy and program
                            interventions as part of its effort to turn knowledge into practice.
                        </p>
                    </div>
                </div>
                {{-- <div class="card contact-card">
                    <img src="/images/building-iser.jpg" alt="ISER-N Building" class="img-fluid card-img-top rounded mt-3"
                        style="height: 200px; object-fit:contain;">
                    <div class="card-body">
                        <h3 class="card-title">Institute for Social and Environmental Research-Nepal (ISER-N)</h3>
                        <p class="card-text">ISER-N is a premier research and development institute. The institute adopts a
                            three-pronged working approach that interlinks research, capacity building, and policy and
                            program interventions as part of its effort to turn knowledge into practice.</p>
                    </div>
                </div> --}}

                <!-- Contact Details -->
                <div class="contact-section mt-4">
                    <h4 class="mb-4"><i class="fas fa-address-card"></i> Contact Details</h4>
                    <p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> Bharapur Metropolitan City, Ward
                        No. 15, Fulbari, Chitwan, Nepal</p>
                    <p><i class="fas fa-phone"></i> <strong>Tel:</strong> +977-56-591054, 56-592406, 56-592407</p>
                    <p><i class="fas fa-envelope"></i> <strong>Email:</strong> iser.nepal@outlook.com</p>
                    <p><i class="fas fa-globe"></i> <strong>Web:</strong> <a class="text-decoration-none"
                            rel="noopener noreferrer" href="https://isernepal.org.np/" target="_blank">isernepal.org.np</a>
                    </p>
                    </p>
                </div>


            </div>

            <!-- Right Column -->
            <div class="col-lg-4 mb-4">
                <!-- Important Links -->
                <div class="card contact-card right-column-section">
                    <div class="card-body">
                        <h3 class="card-title mb-4"><i class="fas fa-link"></i> Related Studies Links</h3>
                        <ul class="list-unstyled">

                            <li class="link-item"><a href="https://isernepal.org.np/"><i
                                        class="fas fa-external-link-alt"></i> Institute for Social and Environmental
                                    Research-Nepal</a></li>
                            <li class="link-item"><a href="https://umich.edu/"><i class="fas fa-external-link-alt"></i>
                                    University of Michigan</a></li>

                            <li class="link-item"><a href="https://hcap.isr.umich.edu/"><i
                                        class="fas fa-external-link-alt"></i> HCAP Network</a></li>
                            <li class="link-item"><a href="https://hrs.isr.umich.edu/data-products/hcap"><i
                                        class="fas fa-external-link-alt"></i> Harmonized Cognitive Assessment Protocol
                                    (HRS-HCAP)</a></li>
                            <li class="link-item"><a href="https://psc.isr.umich.edu/"><i
                                        class="fas fa-external-link-alt"></i> Population Studies Center</a></li>
                            {{-- <li class="link-item"><a href="https://lasi-dad.org/"><i class="fas fa-external-link-alt"></i>
                                    LASI-DAD</a></li> --}}
                        </ul>
                    </div>
                </div>

                <!-- Downloads -->
                {{-- <div class="card contact-card right-column-section">
                    <div class="card-body">
                        <h3 class="card-title mb-4"><i class="fas fa-download"></i> Downloads</h3>
                        <div class="download-item">
                            <a href="#" class="btn btn-outline-primary w-100 text-start">
                                <i class="fas fa-file-pdf"></i>Survey Questionnaire
                            </a>
                        </div>
                        <div class="download-item">
                            <a href="#" class="btn btn-outline-primary w-100 text-start">
                                <i class="fas fa-file-word"></i> Aging Specific Training
                            </a>
                        </div>
                    </div>
                </div> --}}

                <!-- Recent Activities -->
                <div class="card contact-card right-column-section">
                    <div class="card-body">
                        <h3 class="card-title mb-4"><i class="fas fa-calendar-check"></i> Recent Activities</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-chalkboard-teacher me-3 text-primary"></i>
                                General Interviewing Techniques (GIT) Training
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-microscope me-3 text-primary"></i>
                                Study Specific Training
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-user-tie me-3 text-primary"></i>
                                Interviewers Training
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-brain me-3 text-primary"></i>
                                HCAP-Training
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-chart-bar me-3 text-primary"></i>
                                Survey Data Analysis Training
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map -->
        <div class="mt-4">
            <h4><i class="fas fa-map-marked-alt"></i> Our Location</h4>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9849.228324968473!2d84.37578462921785!3d27.65381230539688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fa3c167e33df%3A0xdc393700902f9460!2sInstitute%20for%20Social%20and%20Environmental%20Research-Nepal!5e1!3m2!1sen!2snp!4v1729080868135!5m2!1sen!2snp"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>

@endsection
