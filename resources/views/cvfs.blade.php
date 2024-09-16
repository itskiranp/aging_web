<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'cvfs')

@section('content')
<div class="container my-5">
    <h2>Chitwan Valley Family Study on Cognition and Aging in Nepal (CVFS-SCAN)</h2>
    <p>This longitudinal study investigates the cognitive decline and dementia risks in older adults in the Chitwan Valley of Nepal, involving 4,000 participants and their caregivers.</p>
    
    <h3>Study Overview</h3>
    <p>
        The Chitwan Valley Family Study (CVFS-SCAN) is an in-depth, longitudinal research project aimed at exploring the various factors affecting cognitive aging and dementia in older adults in Nepal. The project focuses on:
    </p>
    <ul>
        <li>Identifying the cognitive decline patterns in aging populations.</li>
        <li>Understanding the risk factors associated with dementia and Alzheimer's disease.</li>
        <li>Studying the impact of lifestyle, environmental, and genetic factors on brain health.</li>
        <li>Involving 4,000 participants along with their caregivers in the Chitwan Valley.</li>
    </ul>
    
    <h3>Key Objectives</h3>
    <p>
        The main objectives of the CVFS-SCAN project are:
    </p>
    <ul>
        <li>To assess the cognitive functioning of individuals over the age of 50.</li>
        <li>To evaluate the influence of familial and social support on cognitive aging.</li>
        <li>To explore the correlation between physical health, mental well-being, and cognitive decline.</li>
        <li>To inform public policy for aging populations in Nepal.</li>
    </ul>

    <h3>Methodology</h3>
    <p>
        The CVFS-SCAN study employs a combination of qualitative and quantitative research methods, including:
    </p>
    <ul>
        <li>Annual cognitive assessments of participants to monitor changes over time.</li>
        <li>Structured interviews with caregivers to assess their roles and challenges.</li>
        <li>Detailed surveys about lifestyle, mental health, and physical conditions.</li>
        <li>Genetic sampling to investigate hereditary risks of dementia.</li>
    </ul>

    <h3>Expected Outcomes</h3>
    <p>
        By the end of this study, the research team expects to:
    </p>
    <ul>
        <li>Have a clearer understanding of cognitive decline in older populations.</li>
        <li>Identify key factors that contribute to the onset of dementia.</li>
        <li>Provide valuable data that will help shape healthcare policies for aging populations.</li>
        <li>Educate caregivers and families about the best practices for supporting individuals at risk of cognitive decline.</li>
    </ul>

    <h3>Publications and Research Data</h3>
    <p>
        All research data, findings, and publications will be made available to the public through the official CVFS-SCAN portal. This will allow researchers, healthcare providers, and policymakers to access the most up-to-date information on cognitive aging and dementia risks in Nepal.
    </p>
    
    <a href="{{ route('Research') }}" class="btn btn-primary">Back</a>
</div>

@endsection