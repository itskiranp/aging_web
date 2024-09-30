<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header class="header">
        <div class="sf-top-header">
            <div class="row">
                <!-- Left Section: Geo Navigation -->
                <div class="col-md-4">
                    <div class="geo-navigation ">
                        <!-- You can replace this with actual navigation items -->
                        <div class="social-icons mt-2 ms-4">
                            <a href="https://www.facebook.com/isernepalofficial/" target="_blank">
                                <i class="fa fa-brands fa-facebook "></i></a>
                            <a href="https://www.linkedin.com/in/iser-nepal-68b407160/" target="_blank">
                                <i class="fa fa-brands fa-linkedin "></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Section: Language Selector & Search -->
                <div class="col-md-8 d-flex justify-content-end align-items-center">
                    <!-- Search Form with Hidden Fields -->
                    <div class="sbox me-3">
                        <input type="text" placeholder="Search...">
                        <a href="">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>

                    <div class="language-select d-flex align-items-center me-3">
                        <label for="language" class="me-2"><i class="fa-solid fa-language"></i> Language:</label>
                        <select id="language" onchange="translateLanguage()" class="dropdown">
                            <option value="en">English</option>
                            <option value="ne">नेपाली</option>
                            <option value="es">Español</option>
                        </select>
                    </div>
                    <div id="google_translate_element" style="display:none;"></div>
                </div>
            </div>
        </div>
        <div id="sf-main-header" class="main-header">
            <div class="row ">
                <!-- Logo Section -->
                <div class="col-md-2 col-4">
                    <div class="header-logo logos-container">
                        <a href="/" title="Home" class="primary-logo">
                            <img src="/images/aging_logo.png" class="logo"></img>
                        </a>
                    </div>
                </div>
                <div class="col-md-9 col-8">
                    <div class="header-text align-item-start">
                        <p class="h1 mt-3 mb-0" style="color:rgb(54, 54, 252)"><strong>Chitwan Valley Family Study
                                (CVFS)</strong></p>
                        <p class="h2" style="color: rgb(54, 54, 252)">Study on Cognition and Aging in Nepal</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg ">
            <div class="container ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="background-color: white;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                                href="/"><i class="fa-solid fa-house-chimney fa-lg me-2 "></i>HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('study') ? 'active' : '' }}" href="/study">STUDY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('data') ? 'active' : '' }}" href="/data">DATA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('publications') ? 'active' : '' }}"
                                href="/publications">PUBLICATION</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Request::is('people') ? 'active' : '' }}"
                                href="/people" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PEOPLE
                            </a>
                            <ul class="dropdown-menu mt-0">
                                <li><a class="dropdown-item "
                                        href="{{ route('investigators') }}">Investigators</a></li>

                                <li><a class="dropdown-item {{ Request::is('people') ? 'active' : '' }}"
                                        href="/people/staff">Staff</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle {{ Request::is('people') ? 'active' : '' }}"
                                href="/people" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                CAPACITY BUILDING
                            </a>
                            <ul class="dropdown-menu mt-0">
                                <li><a class="dropdown-item {{ Request::is('people') ? 'active' : '' }}"
                                        href="/capacitybuilding/interviewing">Research Capacity Building Activities</a></li>
                                <li><a class="dropdown-item {{ Request::is('people') ? 'active' : '' }}"
                                        href="/capacitybuilding/specifictraining">Survey Data Collection Methods    </a></li>
                                <li><a class="dropdown-item {{ Request::is('people') ? 'active' : '' }}"
                                        href="/capacitybuilding/supervisiortraining">Statistical Analysis Methods for Complex Data</a></li>
                                <li><a class="dropdown-item {{ Request::is('people') ? 'active' : '' }}"
                                        href="/capacitybuilding/analysictraining">Power Considerations in Data Analysis</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('events') ? 'active' : '' }}" href="/events">NEWS &
                                EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}"
                                href="/gallery">GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('About') ? 'active' : '' }}" href="/About">ABOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main>
        <div class="main-container">
            @yield('content')
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="site-footer mt-4">
        <div class="footer-content">
            <!-- Contact Details Section -->
            <div class="footer-left">
                <h4>Contact Details</h4>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bharatpur-15, Fulbari, Chitwan, Nepal</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> +977-56-591054, +977-56-592406</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> iser.nepal@outlook.com</p>
                <p><i class="fa fa-clock" aria-hidden="true"></i> 10 A.M. - 5 P.M.</p>

            </div>
            <!-- Logo and Research Project Section -->
            <div class="footer-right">
                <div class="logos">
                    <img src="{{ asset('images/aging_logo.png') }}" alt="Aging Logo" class="footer-logo">
                    <img src="{{ asset('images/michigan-M.png') }}" alt="Michigan Logo" class="footer-logo">
                </div>
                <p class="research-description">
                    <strong>Study on Cognition and Aging in Nepal | CVFS-SCAN</strong><br>
                    This project is funded by the National Institute of Health (NIH).
                </p>
                <div class="footer-links">
                    <a href="UCB Privacy Statement" class="external-link">UCB Privacy Statement <i
                            class="fa-solid fa-arrow-up-right-from-square"></i> </a> |
                    <a href="Web Accessibility Policy" class="external-link">Web Accessibility Policy<i
                            class="fa-solid fa-arrow-up-right-from-square"></i> </a> |
                    <span>Disclaimer</span>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="footer-bottom">
            <p>&copy; Institute for Social and Environmental Research – Nepal | website: <a
                    href="https://isernepal.org.np/" target="_blank">ISER-N</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en', // Default language
                includedLanguages: 'en,ne,es', // Languages included in the dropdown
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }

        function translateLanguage() {
            var language = document.getElementById("language").value;

            // Set the Google Translate cookie with the selected language
            var translateCookie = 'googtrans=/en/' + language;
            document.cookie = translateCookie;

            // Reload the page to apply translation
            window.location.reload();
        }

        // Load the Google Translate script dynamically
        function loadGoogleTranslateScript() {
            var script = document.createElement('script');
            script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
            document.head.appendChild(script);
        }

        // Initialize Google Translate on page load
        window.onload = function() {
            loadGoogleTranslateScript();
        };
        
    </script>

</body>

</html>
