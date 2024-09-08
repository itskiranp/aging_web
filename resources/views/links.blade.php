<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'Links')

@section('content')
<div class="links-page">
    <!-- Links Section -->
    <div class="links-container">
        <h1>Links</h1>
        <ul class="links-list">
            <li><a href="#" target="_blank">The 10/66 Dementia Research Group</a></li>
            <li><a href="#" target="_blank">Harmonized Cognitive Assessment Protocol (HCAP) network</a> - see website for links to HCAP sister studies</li>
            <li><a href="#" target="_blank">Health and Retirement Study</a></li>
            <li><a href="#" target="_blank">Puerto Rican Elderly: Health Conditions (PREHCO) Project</a></li>
            <li><a href="#" target="_blank">Survey on Health, Well-Being, and Aging in Latin America and the Caribbean (SABE)</a></li>
            <li><a href="#" target="_blank">The Costa Rican Longevity and Healthy Aging Study (CRELES)</a></li>
            <li><a href="#" target="_blank">Gateway to Global Aging Data</a></li>
        </ul>
    </div>

    <!-- Sidebar with the orange box -->
    <div class="sidebar">
        <div class="highlight-box">
            <p>CADAS seeks to cross-harmonize with 10/66, and the HCAP family of studies.</p>
        </div>
    </div>
</div>
@endsection
