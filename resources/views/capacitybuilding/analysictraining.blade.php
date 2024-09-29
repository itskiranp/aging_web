<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'CVFS on Cognition and Aging in Nepal')
@section('content')
    <div class="container mt-5 mb-4 ">
        <div>
            <h2>Power Considerations in Data Analysis </h2>
        </div>

        <p> Our research aims to ensure adequate statistical power to detect associations between risk factors and cognitive
            outcomes, such as Alzheimer’s Disease and Related Dementias (ADRD). These considerations are crucial for
            building a research infrastructure capable of generating reliable and valid results in Nepal.</p>
        <div class="row">
            <div class="col">
                <h5><strong>Power Analysis:</strong></h5>
                <ul>
                    <li><strong>Prevalence Estimates:</strong></li>
                    <p>Based on prior data, we estimate a 15% prevalence for cognitive impairment in the rural setting of
                        Chitwan Valley and a 5% prevalence for ADRD.</p>
                    <li><strong>Statistical Power:</strong></li>

                    <p>With a sample size of 4,000 and a 5% significance level, we expect to have adequate power to detect
                        associations for various risk factors. Power calculations show good capability for detecting
                        sex-specific effects and other significant variables.</p>
                </ul>
            </div>
            <div class="col-7 ">
                <img src="/images/power_analysis.png" class="img-fluid" alt="power_analysis">

            </div>
        </div>
        <div>
            <h5><strong>Sex as a Biological Variable:</strong></h5>
            <ul>
                <li><strong>Sex-Specific Analysis:</strong></li>
                <p>Since previous studies have shown mixed results regarding sex differences in ADRD risk, we will
                    explore sex-specific models and interaction effects between sex and predictor variables to
                    understand these differences in the Nepali population.</p>
            </ul>
        </div>

    </div>

@endsection
