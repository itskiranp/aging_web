<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'Data')

@section('content')
    <div class="container mt-4 mb-4">


        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Key Informant Data:
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            The study plans to collect data from <strong>4000 individuals aged 50 and above</strong> and
                            their <strong>4000 key informants/caregivers</strong> in the Chitwan Valley Family Study (CVFS).
                            The caregivers will provide essential information about the respondents' functional status,
                            memory concerns, and activities of daily living (ADL).
                        </p>
                        <p>DATA <a href="#">Click Here</a> </p>
                        <p>CodeBook <a href="#">Click Here</a> </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Questionnaire:
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            The <strong>Harmonized Cognitive Assessment Protocol (HCAP)</strong> is the primary tool for
                            cognitive assessment. The study will adapt and validate the HCAP instruments, with multiple
                            steps for translation, pilot testing, and cognitive interviewing to ensure cultural relevance in
                            Nepal.
                        </p>
                        <p>DATA <a href="#">Click Here</a> </p>
                        <p>CodeBook <a href="#">Click Here</a> </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        HCAP
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            The HCAP includes a comprehensive set of <strong>18 cognitive tests</strong> for respondents and
                            <strong>5 informant tests</strong> to assess cognitive functions, dementia, and related
                            conditions. The data from this will be compared to international studies through the HCAP
                            International Network.
                        </p>
                        <p>DATA <a href="#">Click Here</a> </p>
                        <p>CodeBook <a href="#">Click Here</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>














    {{-- <div class="container mb-5">
    <h2 class="text-center mb-5">DATA</h2>

    <div class="accordion" id="dataAccordion">
        
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Pilot Data
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#dataAccordion">
                <div class="accordion-body">
                    <p>DATA <a href="#">Click Here</a> </p>
                    <p>CodeBook <a href="#">Click Here</a> </p>
                    
                </div>
            </div>
        </div>

        
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Student Achievement Assessment
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#dataAccordion">
                <div class="accordion-body">
                   
                </div>
            </div>
        </div>

        
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Unannounced School and Classroom Observation
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#dataAccordion">
                <div class="accordion-body">
                   
                </div>
            </div>
        </div>

      
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Student Survey
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#dataAccordion">
                <div class="accordion-body">
                 
                </div>
            </div>
        </div>

        
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Parent Survey
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#dataAccordion">
                <div class="accordion-body">
                    
                </div>
            </div>
        </div>

      
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Teacher Survey
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#dataAccordion">
                <div class="accordion-body">
                    
                </div>
            </div>
        </div>

     
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Head Teacher Survey
                </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#dataAccordion">
                <div class="accordion-body">
                   
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    School History Calendar Survey
                </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#dataAccordion">
                <div class="accordion-body">
                  
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


@endsection
