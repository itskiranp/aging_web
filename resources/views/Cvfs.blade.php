
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'Cvfs')

@section('content')
<div class="investigators-content">
    <h1 class="text-center">Chitwan Valley Family
        Study on Cognition and Ageing in Nepal (CVFS-SCAN)</h1>
        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Timeline of the Study
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  First submission: November 2020 <br>
                  Reviewed: March 2021 <br>
                  Scored: Impact score 42 Percentile 33% <br>
                  ...
                </div>
              </div>
            </div>
          </div>
          
    

</div>
@endsection
