<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')
@section('title', 'Data')
@section('content')
<div class="container my-5">
        <h1 class="text-start mb-4">Data</h1>
        <div class="accordion" id="dataAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="True" aria-controls="collapseOne">
                        <strong>Chitwan Valley Family Study (CVFS) Linked Data Sets</strong>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#dataAccordion">
                    <div class="accordion-body">
                        <p> It describes various surveys and data collection efforts over time in the Chitwan Valley, which
                            are essential for understanding ADRD (Alzheimer’s Disease and Related Dementias) and population
                            aging in Nepal.</p>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Survey Name</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Age Group</th>
                                    <th scope="col">Sample Size (N)</th>
                                    <th scope="col">Response Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Individual Survey</th>
                                    <td>1996</td>
                                    <td>15-59 years</td>
                                    <td>5,271 Ind.</td>
                                    <td>97%</td>
                                </tr>
                                <tr>
                                    <th scope="row">Elderly Health & Wellbeing Survey</th>
                                    <td>2006</td>
                                    <td>45+ years</td>
                                    <td>2,147 Ind.</td>
                                    <td>99%</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ideational Survey</th>
                                    <td>2008</td>
                                    <td>15-59 years</td>
                                    <td>9,574 Ind.</td>
                                    <td>95%</td>
                                </tr>
                                <tr>
                                    <th scope="row">Health and Stress Survey</th>
                                    <td>2016-2018</td>
                                    <td>15-59 years</td>
                                    <td>10,714 Ind.</td>
                                    <td>93%</td>
                                </tr>
                                <tr>
                                    <th scope="row">HH Consumption/Agriculture Survey</th>
                                    <td>1996, 2001, 2006, 2015</td>
                                    <td>18+ years</td>
                                    <td>3,271 HH</td>
                                    <td>98%</td>
                                </tr>
                                <tr>
                                    <th scope="row">(NBH) History Calendar</th>
                                    <td>1995, 2006, 2015</td>
                                    <td>N/A</td>
                                    <td>151 NBH</td>
                                    <td>100%</td>
                                </tr>
                                <tr>
                                    <th scope="row">(HLTHS) Health Service Calendar </th>
                                    <td>1995, 2006, 2015</td>
                                    <td>N/A</td>
                                    <td>268 HLTHS</td>
                                    <td>99%</td>
                                </tr>
                                <tr>
                                    <th scope="row">HH Demographic Event Registry</th>
                                    <td>Monthly since 1997</td>
                                    <td>N/A</td>
                                    <td>3,331 HH</td>
                                    <td>95%</td>
                                </tr>
                                <tr>
                                    <th colspan="5" class="text-center">Ind: Individual Survey; HH: Household Survey;
                                        NBH: Neighborhood Survey</th>
                                </tr>
                            </tbody>
                        </table>
                        <p>DATA <a href="#">Click Here</a></p>
                        <p>CodeBook <a href="#">Click Here</a></p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong> Preliminary data on physical & mental health in adults aged > 50</strong>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#dataAccordion">
                    <div class="accordion-body">
                        <p>The following data is from a study examining the physical and mental health of adults aged 50 and
                            older in Chitwan Valley.</p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th colspan="4" class="text-center">Chitwan Valley Elderly Health and Well-Being
                                        Survey 2006 (N = 1,111)
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Male</th>
                                    <th scope="col">Female</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">Number of functional limitations (0-8)</th>
                                    <td>4.26</td>
                                    <td>3.33</td>
                                    <td>3.77</td>
                                </tr>
                                <tr>
                                    <th scope="row">Self-rated health (% fair/poor health)
                                    </th>
                                    <td>77%</td>
                                    <td>82%</td>
                                    <td>79%</td>
                                </tr>

                            </tbody>

                        </table>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th colspan="4" class="text-center">Chitwan Valley Health and Stress Study 2016-2018
                                        (N=1,331)</th>
                                </tr>
                                <tr>
                                    <th scope="col">Condition</th>
                                    <th scope="col">Male</th>
                                    <th scope="col">Female</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Life-time Major Depressive Disorder</th>
                                    <td>10.0%</td>
                                    <td>43.8%</td>
                                    <td>--</td>
                                </tr>
                                <tr>
                                    <th scope="row">Life-time Generalized Anxiety Disorder</th>
                                    <td>1.0%</td>
                                    <td>23.3%</td>
                                    <td>--</td>
                                </tr>
                                <tr>
                                    <th scope="row">Life-time Post-Traumatic Stress Disorder(PTSD)</th>
                                    <td>1.2%</td>
                                    <td>7.6%</td>
                                    <td>--</td>
                                </tr>
                                <tr>
                                    <th scope="row">Life-time Alcohol Abuse Disorder(AUD)</th>
                                    <td>12.0%</td>
                                    <td>1.5%</td>
                                    <td>--</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ever experienced any potentially traumatic event</th>
                                    <td>91.7%</td>
                                    <td>85.3%</td>
                                    <td>--</td>
                                </tr>

                            </tbody>

                        </table>
                        <p>DATA <a href="#">Click Here</a></p>
                        <p>CodeBook <a href="#">Click Here</a></p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong>International Labor Migration Data</strong>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#dataAccordion">
                    <div class="accordion-body">
                        <p>The Life History Calendar (LHC) method will be utilized to gather and update data on
                            international labor migration among participants. This method uses visual "timing" cues based on
                            respondents’ other personal life events, which improves recall and autobiographical memory. The
                            LHC has been validated for use in elderly participants with low literacy, ensuring accurate
                            collection of individual data on residential, educational, employment, marital, and mental
                            health history.</p>
                        <div class="row">
                            <ul class="ms-3">
                                <h5>Key Statistics:</h5>
                                <li>Percentage of CVFS Participants Reporting International Trips (2016-2018): 34%</li>
                                <li>Percentage of Adults Aged > 50 Reporting International Trips: 37%</li>
                                <li>International Trips Reported by Men: 53%</li>
                                <li>International Trips Reported by Women: 21%</li>
                                <li>Mean Number of Trips Among Participants Reporting at Least One Trip: 1.45</li>
                                <li>Mean Duration of International Trips: 7.67 years</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <strong>Armed Conflict Exposure Data</strong>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#dataAccordion">
                    <div class="accordion-body">
                        <p>Data on armed conflict events have been collected from the <strong>South Asia Terrorist Panel
                                (SATP)</strong>, major English and Nepali news media, and other NGOs in Nepal. The
                            <strong>Institute for Social and Environmental Research-Nepal (ISER-N)</strong> has compiled and
                            verified these events with data from Maoist and Government security forces, court records, and
                            by physically visiting the conflict locations.</p>
                        <div class="row">
                            <ul class="ms-3">
                                <p>The detailed data includes the occurrence, date, and location of armed conflict events
                                    during the civil war (1996-2006), covering: <strong>
                                        Arrests,Killings,Gunfire,Disappearances,Bombings,Beatings</strong>.</p>
                                <img src="images/armed_conflict_exposer_data.jpg" class="img-fluid" alt="...">
                                <h5>Key Time Frame:</h5>
                                <li>The most intense period of conflict was between 2001 and 2006.</li>
                                <li>The first year of significant conflict data is 2003, which will be used as a reference
                                    in longitudinal studies, as most participants will have been at least 29 years old by
                                    then, meaning they would have experienced these events during mid-adulthood.</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <strong> Biomarker Data Collection</strong>
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#dataAccordion">
                    <div class="accordion-body">
                        <p>For future studies, blood samples will be collected from 4,000 participants during face-to-face
                            interviews. Details of the biomarker collection process include:</p>
                        <div class="row">
                            <ul class="ms-3">
                                <li>A total of 32.5 ml of blood drawn and processed into various components (plasma, serum,
                                    and buffy coat).</li>
                                <li>Samples will be stored at -80°C and transported to both a central laboratory in
                                    Kathmandu and the University of Michigan for further research.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <strong> Statistical Analysis of Data</strong>
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#dataAccordion">
                    <div class="accordion-body">
                        <p>The statistical analysis plan involves creating summary (composite) variables for cognitive and
                            physical function tests and multi-item instruments. These procedures ensure comparability with
                            previous research and provide reliable results on cognition and ADRD risk factors.</p>
                        <div class="row">
                            <h5>Key Statistical Methods:</h5>
                            <ul class="ms-3">
                                <li><strong>Cognitive and Physical Function Scores:</strong></li>
                                <p>We calculate summary scores for cognitive and physical tests by computing z-scores for
                                    individual tests and averaging them across tests.</p>
                                <li><strong>Exposure Variables:</strong></li>
                                <p>Summary scores are also computed for self-reported variables like international labor
                                    migration and armed conflict exposure.</p>
                                <li><strong>Descriptive Analysis:</strong></li>
                                <p>A range of statistical checks (means, medians, ranges, and distributions) is conducted on
                                    individual and composite variables.</p>
                                <li><strong>Regression Models:</strong></li>
                                <p>The primary analyses use design-adjusted <strong>logistic regression</strong>for binary
                                    outcomes and linear regression for continuous outcomes, accounting for key demographics
                                    like age, sex, education, and risk factors such as cardiovascular disease, diabetes, and
                                    depression.</p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        <Strong> Data Visualization Techniques</Strong>
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#dataAccordion">
                    <div class="accordion-body">
                        <p>Data visualization helps in understanding complex data sets through graphical representation.</p>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="/images/cvfs bar diagram.png" class="card-img-top" alt="Bar Chart">
                                    <div class="card-body">
                                        <h5 class="card-title">Bar Charts</h5>
                                        <p class="card-text">Studies with measures comparable to CVFS.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="https://images.unsplash.com/photo-1543286386-713bdd548da4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                        class="card-img-top" alt="Line Graph">
                                    <div class="card-body">
                                        <h5 class="card-title">Line Graphs</h5>
                                        <p class="card-text">Ideal for showing trends over time or comparing trends.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="/images/piechart_image.jpg" class="card-img-top" alt="Pie Chart">
                                    <div class="card-body">
                                        <h5 class="card-title">Pie Charts</h5>
                                        <p class="card-text">Effective for showing proportions of a whole.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
