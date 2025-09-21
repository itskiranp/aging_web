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


    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS Animation CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


</head>

<body>
    <header class="header">
        <div class="sf-top-header">
            <div class="row">
                <!-- Left Section: social media Navigation -->
                <div class="col-md-4">
                    <div class="geo-navigation ">
                        <!-- You can replace this with actual navigation items -->
                        <div class="social-icons mt-2 ms-4">

                            <a href="https://www.facebook.com/isernepalofficial/" class="text-white "><i
                                    class="fab fa-facebook-f"></i></a>

                            <a href="https://www.linkedin.com/feed/" class="text-white "><i class="fab fa-linkedin-in"></i></a>


                        </div>
                    </div>
                </div>

                <!-- Right Section: Language Selector & Search -->
                <div class="col-md-8 d-flex justify-content-end align-items-center">
                    <!-- Search Form with Hidden Fields -->
                    <div class="d-flex sbox me-3">
                        <form action="{{ route('search') }}" id="searchForm" method="GET">
                            <input type="text" id="searchInput" name="query" placeholder="Search..." required>
                            <button type="submit" id="searchButton"><i class="fas fa-search"></i></button>

                        </form>
                    </div>

                    <div class="language-select d-flex align-items-center me-3">
                        <label for="language" class="me-2"><i class="fa-solid fa-language"></i> Language:</label>
                        <select id="language" onchange="translateLanguage()" class="dropdown">
                            <option value="en">English</option>
                            {{-- <option value="ne">नेपाली</option>
                            <option value="es">Español</option> --}}
                        </select>
                    </div>
                    <div id="google_translate_element" style="display:none;"></div>
                </div>
            </div>
        </div>
        {{-- Logo section --}}
        <div class="main-header" id="sf-main-header">
            {{-- <div class="container"> --}}
            <div class="col-lg-7 mt-1">
                <a href="{{ url('/') }}" class="logo ">
                    <img src="/images/cvfs_web_logo1.png" class="img-fluid mb-5 ms-5" alt="...">
                </a>
            </div>
            {{-- </div> --}}
        </div>
        <div class="row navWrapper">
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
                                <a class="nav-link {{ Request::is('data') ? 'active' : '' }}" href="/data">DATA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('biomarkers') ? 'active' : '' }}" href="/biomarkers">BIOMARKERS</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Request::is('publications') ? 'active' : '' }}"
                                    href="/publications" role="button" data-bs-toggle="dropdown" aria-expanded="false">PUBLICATIONS</a>
                                <ul class="dropdown-menu mt-0">
                                    <li><a class="dropdown-item " href="/publications">Journal Articles</a>
                                    </li>

                                    <li><a class="dropdown-item {{ Request::is('publication.presentations') ? 'active' : '' }}"
                                            href="{{ route('publication.presentations') }}">Presentations</a></li>
                                    <li><a class="dropdown-item {{ Request::is('publication.working') ? 'active' : '' }}"
                                            href="{{ route('publication.working') }}">Working Papers</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Request::is('people') ? 'active' : '' }}"
                                    href="/people" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    RESEARCHERS
                                </a>
                                <ul class="dropdown-menu mt-0">
                                    <li><a class="dropdown-item " href="{{ route('investigators') }}">Investigators</a>
                                    </li>

                                    <li><a class="dropdown-item {{ Request::is('people') ? 'active' : '' }}"
                                            href="/people/staff">Project Staff</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle {{ Request::is('capacity') ? 'active' : '' }}"
                                    href="/capacity" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    CAPACITY BUILDING
                                </a>
                                <ul class="dropdown-menu mt-0">
                                    <li><a class="dropdown-item {{ Request::is('capacitybuilding/workshop') ? 'active' : '' }}"
                                            href="/capacitybuilding/ci">Cognitive Interviewing Training (CIT)</a>
                                    <li><a class="dropdown-item {{ Request::is('capacitybuilding/interviewing') ? 'active' : '' }}"
                                            href="/capacitybuilding/interviewing">General Interviewing Techniques (GIT)
                                            Training</a></li>
                                    <li><a class="dropdown-item {{ Request::is('capacitybuilding/specifictraining') ? 'active' : '' }}"
                                            href="/capacitybuilding/specifictraining">Study Specific Training (SST)</a></li>
                                    </a>
                            </li>
                            <li><a class="dropdown-item {{ Request::is('capacitybuilding/datatraining') ? 'active' : '' }}"
                                    href="/capacitybuilding/datatraining">Data Analysis</a>
                            </li>

                            <!-- <li><a class="dropdown-item {{ Request::is('people') ? 'active' : '' }}"
                                    href="/capacitybuilding/analysictraining">Power Considerations in Data
                                    Analysis</a>
                            </li> -->
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
                            <a class="nav-link {{ Request::is('About') ? 'active' : '' }}" href="/About">CONTACT</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>

    <!-- Main Content Section -->
    <main>
        <div class="main-container">
            @yield('content')
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="site-footer pt-5 pb-4" style="background: linear-gradient(135deg, #1a2a6c 0%, #0a1128 100%);">
        <div class="container">
            <div class="row g-4">
                <!-- Column 1: Contact Information -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="footer-contact h-100">

                        <h3 class="text-white text-uppercase mb-3 fs-5 fw-bold">Contact Us</h3>
                        <ul class="list-unstyled text-white-50">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-map-marker-alt mt-1 me-2 text-white"></i>
                                <span>Bharatpur-15, Fulbari, Chitwan, Nepal</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-phone-alt mt-1 me-2 text-white"></i>
                                <span>+977-56-591054, +977-56-592407</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fas fa-envelope mt-1 me-2 text-white"></i>
                                <span>iser.nepal@outlook.com</span>
                            </li>
                            <li class="d-flex align-items-start">
                                <i class="fas fa-clock mt-1 me-2 text-white"></i>
                                <span>10 A.M. - 5 P.M.</span>
                            </li>
                        </ul>
                        <div class="social-icons mt-4">
                            <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>

                        </div>
                    </div>
                </div>

                <!-- Column 2: Important Links -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="important-links h-100">
                        <h3 class="text-white text-uppercase mb-3 fs-5 fw-bold">Important Links</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://isernepal.org.np/"
                                    class="text-white-50 text-decoration-none hover-white">ISER-N</a></li>
                            <li class="mb-2"><a href="https://isr.umich.edu/"
                                    class="text-white-50 text-decoration-none hover-white">ISR-University of
                                    Michigan</a>
                            </li>
                            <li class="mb-2"><a href="https://www.georgetown.edu/"
                                    class="text-white-50 text-decoration-none hover-white">Georgetown University</a>
                            </li>
                            <li class="mb-2"><a href="https://hcap.isr.umich.edu/"
                                    class="text-white-50 text-decoration-none hover-white">HCAP Network</a></li>
                            <li class="mb-2"><a href="https://hrs.isr.umich.edu/data-products/hcap"
                                    class="text-white-50 text-decoration-none hover-white">Harmonized Cognitive
                                    Assessment Protocol (HRS-HCAP)</a></li>
                            <li><a href="https://nhrc.gov.np/"
                                    class="text-white-50 text-decoration-none hover-white">NHRC-Nepal Health Research
                                    Council
                                    {{-- <li class="mb-2"><a href="#"
                                    class="text-white-50 text-decoration-none hover-white">LASI-DAD</a></li> --}}
                                </a></li>
                            </a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 3: Feedback Section -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feedback-section h-100">

                        <h3 class="text-white text-uppercase mb-3 fs-5 fw-bold">Join our Email List</h3>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="text-white ">Name:</label>
                                <input type="text" class=" form-control bg-transparent text-white border-secondary"
                                    placeholder="Your Name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="text-white">Email:</label>
                                <input type="email" class=" form-control bg-transparent text-white border-secondary"
                                    placeholder="Your Email" required>
                            </div>
                            <button type="submit" class="btn btn-light btn-sm text-dark">Subscribe</button>
                        </form>
                    </div>
                </div>

                <!-- Column 4: Research Project -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="research-info h-100">
                        <h3 class="text-white text-uppercase mb-3 fs-5 fw-bold">Research Project</h3>
                        <div class="logos d-flex align-items-center mb-3">
                            <img src="{{ asset('images/aging_logo.png') }}" alt="Aging Logo" class="img-fluid me-2"
                                style="max-height: 50px;">
                            <img src="{{ asset('images/michigan-M.png') }}" alt="Michigan Logo"
                                class="img-fluid me-2" style="max-height: 40px;">
                            <img src="{{ asset('images/isernepal-at-iser.png') }}" alt="ISERN Logo"
                                class="img-fluid" style="max-height: 50px;">
                        </div>
                        <p class="text-white-50 small">
                            <strong class="text-white">Study on Cognition and Aging in Nepal | CVFS-SCAN</strong><br>
                            This project is funded by the National Institute of Health (NIH).
                        </p>

                        <div class="footer-links mt-4 pt-2 border-top border-secondary">
                            <a href="#"
                                class="d-block text-white-50 text-decoration-none hover-white small mb-2">UCB Privacy
                                Statement <i class="fas fa-external-link-alt fa-xs ms-1"></i></a>
                            <a href="#"
                                class="d-block text-white-50 text-decoration-none hover-white small mb-2">Web
                                Accessibility Policy <i class="fas fa-external-link-alt fa-xs ms-1"></i></a>
                            <a href="#"
                                class="d-block text-white-50 text-decoration-none hover-white small">Disclaimer</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="row mt-4 pt-3 border-top border-secondary">
                <div class="col-md-12 text-center">
                    <p class="text-white-50 small mb-0">&copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Institute for Social and Environmental Research – Nepal | Website: <a
                            href="https://isernepal.org.np/" target="_blank"
                            class="text-white text-decoration-none">ISER-N</a>
                    </p>
                </div>
            </div>
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
    <script>
        window.onscroll = function() {
            stickyNavbar();
        };

        var navbar = document.querySelector('.navWrapper');
        var stickyPosition = navbar.offsetTop;

        function stickyNavbar() {
            if (window.pageYOffset > stickyPosition) {
                navbar.classList.add("sticky");
                navbar.style.animation = "slideDown 0.5s ease"; /* Slide down effect when sticky */
            } else {
                navbar.classList.remove("sticky");
                navbar.style.animation = ""; /* Remove animation when back to normal */
            }
        }
    </script>
    <script>
        document.getElementById('searchForm').addEventListener('submit', function(event) {
            var searchInput = document.getElementById('searchInput').value.trim();

            // Prevent submission if input is empty
            if (!searchInput) {
                event.preventDefault(); // Stops form submission
                alert("Please enter a search term.");
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const calendarMonth = document.getElementById("calendar-month");
            const calendarGrid = document.getElementById("calendar");

            // Use the events data passed from the backend
            events.forEach(event => {
                event.date = new Date(event.date); // Convert date strings to Date objects
            });

            const now = new Date();
            const today = now.getDate();
            let month = now.getMonth();
            let year = now.getFullYear();

            const monthNames = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];

            function calculateDaysAway(eventDate) {
                const today = new Date();
                const timeDifference = eventDate - today;
                return Math.ceil(timeDifference / (1000 * 60 * 60 * 24));
            }

            function displayEventDetails(event) {
                const eventDetailsContent = document.getElementById("event-details-content");

                if (event) {
                    eventDetailsContent.innerHTML = `
                <h4 class="card-title">${event.title}</h4>
                <p class="card-text">${event.description}</p>
                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item"><strong>Date:</strong> ${event.date.toLocaleDateString()}</li>
                    <li class="list-group-item"><strong>Time:</strong> ${event.time}</li>
                    <li class="list-group-item"><strong>Location:</strong> ${event.location}</li>
                </ul>
            `;
                } else {
                    eventDetailsContent.innerHTML = "<p class='text-muted'>No upcoming events.</p>";
                }
            }

            function getNearestEvent() {
                const today = new Date();
                const upcomingEvents = events.filter(event => event.date >= today);
                upcomingEvents.sort((a, b) => a.date - b.date);
                return upcomingEvents.length > 0 ? upcomingEvents[0] : null;
            }

            function renderEventList() {
                const eventList = document.getElementById("event-list");
                eventList.innerHTML = "";

                // Filter only upcoming events for the event list
                const upcomingEvents = events.filter(event => event.date >= new Date());


                upcomingEvents.forEach(event => {
                    const daysAway = calculateDaysAway(event.date);
                    const listItem = document.createElement("a");
                    listItem.href = "#";
                    listItem.classList.add("list-group-item", "list-group-item-action");
                    listItem.innerHTML = `
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">${event.title}</h5>
                    <small>${daysAway} days away</small>
                </div>
                <p class="mb-1">${event.short_description}</p>
                <small>Date: ${event.date.toLocaleDateString()} | Location: ${event.location}</small>
            `;
                    listItem.addEventListener("click", (e) => {
                        e.preventDefault();
                        displayEventDetails(event);
                    });
                    eventList.appendChild(listItem);
                });
            }

            function renderCalendar() {
                calendarGrid.innerHTML = "";
                calendarMonth.textContent = `${monthNames[month]} ${year}`;
                const firstDayOfMonth = new Date(year, month, 1).getDay();
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                const prevMonthDays = new Date(year, month, 0).getDate();

                for (let i = 0; i < firstDayOfMonth; i++) {
                    const prevDayElement = document.createElement("div");
                    prevDayElement.textContent = prevMonthDays - firstDayOfMonth + i + 1;
                    prevDayElement.classList.add("prev-month-day");
                    calendarGrid.appendChild(prevDayElement);
                }

                for (let day = 1; day <= daysInMonth; day++) {
                    const dayElement = document.createElement("div");
                    dayElement.textContent = day;
                    dayElement.classList.add("calendar-day");

                    if (day === today && month === now.getMonth() && year === now.getFullYear()) {
                        dayElement.classList.add("today");
                    }

                    const event = events.find(e => e.date.getFullYear() === year && e.date.getMonth() === month && e
                        .date.getDate() === day);
                    if (event) {
                        dayElement.classList.add("event-day");
                        dayElement.setAttribute("title", event.title);
                        dayElement.addEventListener("click", () => {
                            displayEventDetails(event);
                        });
                    }

                    const dayOfWeek = (firstDayOfMonth + day - 1) % 7;
                    if (dayOfWeek === 0 || dayOfWeek === 6) {
                        dayElement.classList.add("weekend");
                    }

                    calendarGrid.appendChild(dayElement);
                }

                const totalCells = firstDayOfMonth + daysInMonth;
                const trailingDays = totalCells % 7 === 0 ? 0 : 7 - (totalCells % 7);
                for (let i = 1; i <= trailingDays; i++) {
                    const nextDayElement = document.createElement("div");
                    nextDayElement.textContent = i;
                    nextDayElement.classList.add("next-month-day");
                    calendarGrid.appendChild(nextDayElement);
                }
            }

            renderCalendar();
            renderEventList();
            displayEventDetails(getNearestEvent());

            document.getElementById("prev-month").addEventListener("click", () => {
                month = month === 0 ? 11 : month - 1;
                year = month === 11 ? year - 1 : year;
                renderCalendar();
            });

            document.getElementById("next-month").addEventListener("click", () => {
                month = month === 11 ? 0 : month + 1;
                year = month === 0 ? year + 1 : year;
                renderCalendar();
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filter functionality
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    const filterValue = button.getAttribute('data-filter');

                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') ===
                            filterValue) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Fix for modal closing issue
            document.querySelectorAll('[data-bs-dismiss="modal"]').forEach(closeBtn => {
                closeBtn.addEventListener('click', function() {
                    const modal = this.closest('.modal');
                    if (modal) {
                        // Properly hide the modal using Bootstrap's method
                        const bsModal = bootstrap.Modal.getInstance(modal);
                        if (bsModal) {
                            bsModal.hide();
                        } else {
                            // Fallback if Bootstrap instance not found
                            modal.classList.remove('show');
                            modal.style.display = 'none';
                            document.body.classList.remove('modal-open');
                            const backdrops = document.querySelectorAll('.modal-backdrop');
                            backdrops.forEach(backdrop => backdrop.remove());
                        }
                    }
                });
            });

            // Cleanup when modal is closed
            document.querySelectorAll('.modal').forEach(modal => {
                modal.addEventListener('hidden.bs.modal', function() {
                    document.body.classList.remove('modal-open');
                    const backdrops = document.querySelectorAll('.modal-backdrop');
                    backdrops.forEach(backdrop => backdrop.remove());
                });
            });
        });
    </script>
    <script>
        document.getElementById('read-more-btn').addEventListener('click', function() {
            const hiddenContent = document.getElementById('hidden-content');
            const button = this;
            const chevron = document.getElementById('chevron-icon');

            if (hiddenContent.style.display === 'none') {
                hiddenContent.style.display = 'block';
                button.innerHTML = '<span>Read Less</span>';
                chevron.style.transform = 'rotate(180deg)';
                button.style.background = 'linear-gradient(135deg, #3182ce, #4299e1)';
            } else {
                hiddenContent.style.display = 'none';
                button.innerHTML = '<span>Read More</span>';
                chevron.style.transform = 'rotate(0deg)';
                button.style.background = 'linear-gradient(135deg, #4299e1, #3182ce)';
            }
        });
    </script>
    <!-- AOS Animation JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
   


</body>

</html>