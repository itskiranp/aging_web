<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'CVFS on Cognition and Aging in Nepal')
@section('content')
<div class="container mt-4 mb-5">
    <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb" class="d-flex justify-content-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Capacity Building</a></li>
          <li class="breadcrumb-item active" aria-current="page">Statistical Analysis</li>
        </ol>
      </nav>
<div><h2>Statistical Analysis Methods for Complex Data</h2></div>

    <p>This activity aims to enhance ISER-N’s capacity to conduct and analyze complex longitudinal data on ADRD and risk factors. The training will include the following:
    <h5>Key Activities:</h5>
    <ul>
        <li><strong>5-Day Workshop on Complex Survey Design</strong></li>
        <p>Led by Dr. West and Mr. Schulz, this workshop will focus on cross-sectional and longitudinal data analysis</p>
        <li><strong>Bi-Weekly Online Seminars & Discussion Sessions</strong></li>
        <p>Alternating between online seminars and live discussion sessions, covering descriptive analysis, multilevel modeling, marginal modeling, and software procedures for longitudinal data.</p>
    </ul>
    The overall training will offer ~120 hours of in-depth instruction on longitudinal data analysis, equipping ISER-N analysts with the necessary skills to conduct advanced statistical analyses.
    </p>

</div>
@endsection