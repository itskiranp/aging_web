<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'CVFS')

@section('content')
    <main class="container my-4 mt-5">
        <div class="card-header">
        <h2 class="text-start mb-3"><strong>Chitwan Valley Family Study on Cognition and Aging in Nepal (CVFS-SCAN)</strong></h2>
        </div>
        
        <section id="research-details">
            <div class="row">
                <div class="col">
                    <h3>Study Overview</h3>
                    <p>The Longitudinal Aging Study in Nepal is a comprehensive research initiative aimed at understanding the impact of aging on cognitive health, specifically focusing on Alzheimer’s Disease and Related Dementias (ADRD), in Nepal. The study seeks to explore how factors such as international labor migration and exposure to armed conflict contribute to the risk of dementia and cognitive impairments in older adults.</p>
                </div>
            </div>
        </section>
        <section id="image-gallery" class="mt-4">
            <h3 class="mb-2">Study Area</h3>
            <img src="images/CVFS study area.png" class="card-img-top" height="100%" alt="Project workspace">
        </section>

        <section>
            <h2>Study Objectives</h2>
            <ul>
                <li><strong>Build Research Capacity:</strong> Train local researchers to conduct systematic research on ADRD, including culturally appropriate cognitive assessments and advanced statistical analysis of longitudinal data.</li>
                <li><strong>Conduct a Population-Based Study:</strong> Survey 4,000 adults aged 50 and above, along with their 4,000 caregivers, and carry out follow-up assessments to estimate the prevalence and incidence of ADRD.</li>
                <li><strong>Investigate Risk Factors:</strong> Analyze how long-term labor migration and exposure to armed conflict impact the risk of developing ADRD and other cognitive impairments.</li>
            </ul>
        </section>

        <section>
            <h2>Study Methods</h2>
            <p>The study employs a stratified two-stage cluster sampling technique to survey a representative sample of 4,000 older adults and their caregivers from the Chitwan Valley. Data collection includes:</p>
            <ul>
                <li>Harmonized Cognitive Assessment Protocol (HCAP) instruments for cognitive and physical function assessments.</li>
                <li>Interviews with participants and caregivers, including assessments of height, weight, and blood pressure.</li>
                <li>Biomarker collection involving plasma, serum, and red blood cells.</li>
            </ul>
        </section>

        <section>
            <h2>Timeline and Current Status</h2>
            <p>The study commenced in 2022 and is projected to conclude by 2027. The research team has successfully completed initial data collection and is preparing for follow-up assessments in the coming years.</p>
        </section>

    @endsection
