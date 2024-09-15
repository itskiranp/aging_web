<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'Links')

@section('content')
    <div class="links-page">
        <!-- Links Section -->
        <div class="row links-container">
            <h1>Links</h1>
            <div class="col">
                <ul class="links-list">
                    <li><a href="#" >Chitwan Valley Family Study-Study on Cognition and Aging in Nepal (CVFS-SCAN)</a></li>
                    <li><a href="#" >NHRC Summary_10122022</a></li>
                    <li><a href="#" >Project Details</a></li>
                    <li><a href="#" target="_blank" >Longitudinal Aging Study in Nepal</a></li>
                </ul>
            </div>


            {{-- <!-- Sidebar with the orange box -->
            <div class="col">
                <div class="sidebar">
                    <div class="highlight-box">
                        <p>CADAS seeks to cross-harmonize with 10/66, and the HCAP family of studies.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
