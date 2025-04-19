<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'CVFS on Cognition and Aging in Nepal')
@section('content')
    <div class="container mt-4 mb-5">
        <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('#') }}">Capacity Building</a></li>
                <li class="breadcrumb-item active" aria-current="page">Survey Data Collection Methods
        </nav>


        <div>
            <h2 class="gallery-title">Survey Data Collection Methods</h2>
        </div>
        <p>
            This activity focuses on improving data quality in cognitive assessments and advanced biomarker collection. It
            is essential to ensure that surveys are culturally appropriate for the Nepali population.
        <h5>Key Activities:</h5>
        <ul>
            <li><strong>3-Day Workshop on Cognitive Interviewing</strong></li>
            <p>Conducted by the <strong>University of Michigan Survey Research Center (UM-SRC)</strong> for junior
                investigators and post-doctoral fellows in Nepal.</p>
            <li><strong>Development of Training Modules</strong></li>
            <p>Creation of a cognitive interviewing training module for <strong>ISER-N</strong> staff to design culturally
                appropriate survey instruments.</p>
            <li><strong>3-Day Training on Conducting Cognitive Interviews</strong></li>
            <p>Targeted for older Nepali adults to test questionnaire applicability.</p>
            <li><strong>Validation of Cognitive Assessments</strong></li>
            <p>Testing cognitive instruments on 20 healthy individuals and 20 diagnosed with dementia to ensure sensitivity
                to cognitive impairment.</p>
            <li><strong>2-Week Training for Cognitive Assessment Interviewers</strong></li>
            <p>Focused on the <strong>Harmonized Cognitive Assessment Protocol (HCAP)</strong> administration, incorporating
                global lessons learned.</p>
            <li><strong>Training on Whole Blood Collection and Processing</strong></li>
            <p>ISER-N research staff will be trained on protocols for blood specimen collection, processing, storage, and
                transport.</p>
            <p><strong>"Train the Trainers" Model:</strong><br>
                Local collaborators will be trained in the above methods and will, in turn, train young scholars and
                healthcare professionals across Nepal and South Asia.</p>

        </ul>
        </p>
    </div>

@endsection
