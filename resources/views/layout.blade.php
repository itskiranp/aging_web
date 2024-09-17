<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Header Section -->
    <header class="main-header">
        <div class="row align-items-center">
            <!-- Aging Logo Section-->
            <div class="col-3 me-3">
                <img src="{{ asset('images/aging_logo.png') }}" alt="aging Logo" class="logo">
            </div>
            <!-- Title and Subtitle Section -->
            <div class="col-8">
                <h1 class="text-start"><strong>Study on Cognition and Aging in Nepal</strong></h1>
                <p class="text-start">Chitwan Valley Family Study(CVFS-SCAN)</p>
            </div>
            <!-- Search Box Section -->

    </header>

    <!-- Navigation Bar -->


    <div class="main-nav">
        <nav
            class="navbar navbar-expand-sm justify-content-center justify-content-sm-center justify-content-md-end  me-md-6">
            <ul class="navbar-nav fs-5 text">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/Research" class="nav-link {{ Request::is('Research') ? 'active' : '' }}">Study</a>
                </li>
                <li class="nav-item">
                    <a href="/publications"
                        class="nav-link {{ Request::is('publications') ? 'active' : '' }}">Publications</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('people') ? 'active' : '' }}"
                        id="peopleDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        People
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="peopleDropdown">
                        <li><a href="{{ route('people.researcher') }}" class="dropdown-item fs-5 text">Researcher</a>
                        </li>
                        <li><a href="/people/staff" class="dropdown-item fs-5 text">Staff</a></li>
                        <li><a href="/people/board" class="dropdown-item fs-5 text">Board Member</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/links" class="nav-link {{ Request::is('links') ? 'active' : '' }}">Links</a>
                </li>
                <li class="nav-item">
                    <a href="/About" class="nav-link {{ Request::is('About') ? 'active' : '' }}">About</a>
                </li>
            </ul>
        </nav>
    </div>


    <!-- Main Content Section -->
    <main>
        <div class="main-container">
            @yield('content') <!-- This will allow different pages to insert content -->
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-left">
                <h4>Contact Details</h4>

                {{-- <hr style="border-top: 2px solid #f4c430; width: 50px;"> --}}
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bharatpur-15, Fulbari, Chitwan, Nepal</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> +977-56-591054, +977-56-592406</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> iser.nepal@outlook.com</a></p>
                <p><i class="fa fa-solid fa-clock" aria-hidden="true"></i> 10 A.M. - 5 P.M.</p>
                
                <div class="social-icon">
                    <a href="https://www.facebook.com/isernepalofficial/" target="_blank">
                        <i class="fa fa-brands fa-facebook fa-2x" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/iser-nepal-68b407160/" target="_blank">
                        <i class="fa fa-brands fa-linkedin fa-2x" aria-hidden="true"></i>
                    </a>
                </div>

            </div>
            <div class="footer-right">
                <div class="container">
                    <img src="{{ asset('images/aging_logo.png') }}" alt="Aging Logo" class="footer-logo">
                    <p>Study on Cognition and Aging in Nepal | CVFS-SCAN</p>
                    <p>This project is funded by the National Institute of Health(NIH)</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Institute for Social and Environmental Research – Nepal | website:<a
                    href="https://isernepal.org.np/" target="_blank">ISER-N</a></p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
