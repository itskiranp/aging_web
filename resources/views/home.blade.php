<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="home-content">
        <div class="cadas-container">
            <!-- Image Section on the Left -->
            <div class="cadas-image">
                <img src="{{ asset('/images/image1.jpg') }}" alt="Smiling faces">
            </div>

            <!-- Text Section on the Right -->
            <div class="cadas-text">
                <h3>
                    <b>The Caribbean American Dementia and Aging Study</b>
                    (CADAS) seeks to expand understanding of the lifecourse determinants and consequences of Alzheimer’s
                    Disease and related dementias (AD/ADRD) in Caribbean-origin populations.
                </h3>
                <p>
                    We are collecting new <em>nationally representative</em> household survey data among adults ages 65+
                    in Puerto Rico (n=1500) and the Dominican
                </p>
            </div>
            <div class="cadas-secondtext">
            <p>
                Republic (n=1500) to estimate the prevalence of dementia and to capture
                the variation in lifecourse exposures to AD/ADRD risk factors, as well as family and societal effects of
                dementia.
            </p>
            <p>
                We build on previous research by the <a href="https://1066.alzint.org/" target="_blank"> 10/66 Dementia
                    Research Group.</a> that indicates a remarkably high dementia prevalence of 10-12% among
                metro-dwelling adults aged 65+ in Puerto Rico, Dominican Republic and Cuba, whose similar histories but
                richly varying societal structures over the past century offer great promise for better understanding
                AD/ADRD. These Hispanic Caribbean sites are also the origin of the vast majority of Caribbean immigrants
                to the U.S., and we will also compare experiences in sending countries with experiences among U.S.
                immigrants. Our surveys are designed for cross-harmonization with both past 10/66 surveys as well as the
                global network of recent surveys using the <a href="https://hcap.isr.umich.edu/" target="_blank">Harmonized
                    Cognitive Assessment Protocol</a> , including the U.S. <a href="https://hrs.isr.umich.edu/about">Health
                    and Retirement Study . </a>
            </p>
            <div>
        </div>

    </div>

    </div>

    <div class="alert-message">
        Project Timeline: Survey data collection has been delayed due to COVID-19.
    </div>

@endsection
