<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'CVFS on Cognition and Aging in Nepal')
@section('content')
    <div class="container mt-5 mb-5">
        <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb" class="d-flex justify-content-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/About') }}">About</a></li>
              <li class="breadcrumb-item active" aria-current="page">Connect With Us</li>
            </ol>
          </nav>
        <div>
            <h2>Connect With Us</h2>
        </div>
        <div class="container my-5">
            <div class="row">
                <!-- Contact Form Section -->
                <div class="col-md-7">
                    <h3>Contact Us</h3>
                    <p>If you have any questions or need more information, feel free to send us a message using the form
                        below.</p>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif


                    <!-- Contact Form -->
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter your name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Type your message here"
                                required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Send Message</button>
                    </form>
                </div>

                <!-- Contact Information Section -->
                <div class="col-md-5">
                    <h3>Our Contact Information</h3>
                    <p>You can also reach out to us through the following contact details:</p>

                    <ul class="list-unstyled">
                        <li><strong>Email:</strong> iser.nepal@outlook.com</li>
                        <li><strong>Phone:</strong> +977-56-592406</li>
                        <li><strong>Address:</strong> Bharatpur-15, Fulbari, Chitwan, Nepal</li>
                        <li><strong>Working Hours:</strong> Sun - Fri, 10:00 AM - 5:00 PM</li>
                    </ul>

                    <!-- Social Media Links -->
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/isernepalofficial/" class="btn btn-outline-primary btn-sm mx-1"><i
                                class="fab fa-facebook"></i> Facebook</a>
                        <a href="https://twitter.com/yourpage" class="btn btn-outline-info btn-sm mx-1"><i
                                class="fab fa-twitter"></i> Twitter</a>
                        <a href="https://www.linkedin.com/in/iser-nepal-68b407160/"
                            class="btn btn-outline-primary btn-sm mx-1"><i class="fab fa-linkedin"></i> LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
