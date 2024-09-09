<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('public/style.css') }}"> <!-- Link your custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script>
        https: //cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
    </script>


</head>

<body>
    <!-- Header Section -->
    <header class="main-header">
        <div class="header-container">
            <img src="{{ asset('images/cadas_logo.svg') }}" alt="CADAS Logo" class="logo"> <!-- CADAS Logo -->
        </div>
    </header>

    <!-- Navigation Bar -->
    <div class="main-nav">
        <nav class="navbar">
            <ul>
                <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="/investigators"
                        class="{{ Request::is('investigators') ? 'active' : '' }}">Investigators</a></li>
                <li><a href="/publications" class="{{ Request::is('publications') ? 'active' : '' }}">Publications</a>
                </li>
                <li><a href="/links" class="{{ Request::is('links') ? 'active' : '' }}">Links</a></li>
                <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
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
                <img src="{{ asset('images/footer_logo.png') }}" alt="Berkeley Logo" class="footer-logo">

                <p>University of California, Berkeley<sup>&reg;</sup> | Population Sciences</p>
                <p>This project is funded by the National Institute of Aging, National Institutes of Health
                    (5R01AG064778).</p>
            </div>
            <div class="footer-right">
                <p>CADAS | University of California, Berkeley CA 94720-2120</p>
                <p>Email: <a href="mailto:cadas@berkeley.edu">cadas@berkeley.edu</a></p>
                <p>
                    <a href="https://www.berkeley.edu/privacy-policy">UCB Privacy Statement</a> |
                    <a href="https://dac.berkeley.edu/web-accessibility/">Web Accessibility Policy</a> | Disclaimer
                </p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Copyright 2024 UC Regents. | website: <a href="#">David Kerr Design</a></p>
        </div>
    </footer>
</body>

</html>
