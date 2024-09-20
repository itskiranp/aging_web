<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'website feedback form')

@section('content')

    <div class="container mt-3">
        <h1 class="text-start">Website Feedback</h1>
        <p class="text-start">Your feedback is very important to us.</p>
        <div class="row">
            <div class="col-md-8 mb-4 mb-md-0">

                {{-- <form action="/submit-feedback" method="POST" class="needs-validation" novalidate>
                    <!-- Name Input -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback">
                            Please enter your name.
                        </div>
                    </div>

                    <!-- Email Input -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>

                    <!-- Institution Input -->
                    <div class="mb-3">
                        <label for="institution" class="form-label">Institution</label>
                        <input type="text" class="form-control" id="institution" name="institution">
                    </div>

                    <!-- Website Improvement Feedback -->
                    <div class="mb-3">
                        <label for="feedback" class="form-label">How can we make the website better?</label>
                        <textarea class="form-control" id="feedback" name="feedback" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="feedback" class="form-label">Were you able to find the information you were looking for on this website?</label>
                        <input type="text" class="form-control" id="feedback" name="feedback" ></input>
                    </div>

                    <!-- Rate this Website (Radio Buttons) -->
                    <div class="mb-3">
                        <label class="form-label">Rate this website:</label>
                        <div class="rating ">
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label for="star1" title="1 star">&#9733;</label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label for="star2" title="2 stars">&#9733;</label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label for="star3" title="3 stars">&#9733;</label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label for="star4" title="4 stars">&#9733;</label>

                            <input type="radio" id="star5" name="rating" value="5" />
                            <label for="star5" title="5 stars">&#9733;</label>
            
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-20">Submit Feedback</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Form Validation Script -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms).forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script> --}}





@endsection
