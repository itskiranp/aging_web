
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'Investigators')

@section('content')
<div class="investigators-content">
    <h1>Investigators</h1>
    
    <!-- Principal Investigators Section -->
    <h2>Principal Investigators</h2>
    <ul class="investigators-list">
        <li>
            <a href="#" target="_blank">Daisy Acosta</a>, Universidad Nacional Pedro Henríquez Ureña | 
            <a href="#" target="_blank">pubmed link</a>
        </li>
        <li>
            <a href="#" target="_blank">William Dow</a>, University of California Berkeley | 
            <a href="#" target="_blank">pubmed link</a>
        </li>
        <li>
            <a href="#" target="_blank">Ivonne Z. Jiménez-Velázquez</a>, Universidad de Puerto Rico Escuela de Medicina | 
            <a href="#" target="_blank">pubmed link</a>
        </li>
    </ul>

    <!-- Other Investigators Section -->
    <h2>Other Investigators</h2>
    <ul class="investigators-list">
        <li>Amal Harrati, Mathematica Research | <a href="#" target="_blank">pubmed link</a></li>
        <li><a href="#" target="_blank">Jorge Llibre-Guerra</a>, Washington University | <a href="#" target="_blank">pubmed link</a></li>
        <li>Juan J. Llibre-Rodriguez, Universidad de Ciencias Médicas de La Habana | <a href="#" target="_blank">pubmed link</a></li>
        <li><a href="#" target="_blank">Jing Li</a>, University of Washington | <a href="#" target="_blank">pubmed link</a></li>
        <li><a href="#" target="_blank">Mao-Mei Liu</a>, University of California Berkeley | <a href="#" target="_blank">pubmed link</a></li>
        <li>Chris Soria, University of California Berkeley</li>
        <li><a href="#" target="_blank">Jordan Weiss</a>, Stanford University | <a href="#" target="_blank">pubmed link</a></li>
    </ul>
</div>
@endsection
