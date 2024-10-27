<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'CVFS')

@section('content')
<main class="container my-4 mb-5">
    <nav style="--bs-breadcrumb-divider:'>';" aria-label="breadcrumb" class="d-flex justify-content-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Study</li>
        </ol>
      </nav>
        <div class="card-header">
            <h2 class="text-start mb-3"><strong>Chitwan Valley Family Study on Cognition and Aging in Nepal
                    (CVFS-SCAN)</strong></h2>
        </div>

        <section id="research-details">
            <div class="row">
                <div class="col">
                    <h3>Study Overview</h3>
                    <p>The Longitudinal Aging Study in Nepal is a comprehensive research initiative aimed at understanding
                        the impact of aging on cognitive health, specifically focusing on Alzheimer’s Disease and Related
                        Dementias (ADRD), in Nepal. The study seeks to explore how factors such as international labor
                        migration and exposure to armed conflict contribute to the risk of dementia and cognitive
                        impairments in older adults.</p>
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
                <li><strong>Build Research Capacity:</strong> Train local researchers to conduct systematic research on
                    ADRD, including culturally appropriate cognitive assessments and advanced statistical analysis of
                    longitudinal data.</li>
                <li><strong>Conduct a Population-Based Study:</strong> Survey 4,000 adults aged 50 and above, along with
                    their 4,000 caregivers, and carry out follow-up assessments to estimate the prevalence and incidence of
                    ADRD.</li>
                <li><strong>Investigate Risk Factors:</strong> Analyze how long-term labor migration and exposure to armed
                    conflict impact the risk of developing ADRD and other cognitive impairments.</li>
            </ul>
        </section>

        <section>
            <h2>Study Methods</h2>
            <p>The study employs a stratified two-stage cluster sampling technique to survey a representative sample of
                4,000 older adults and their caregivers from the Chitwan Valley. Data collection includes:</p>
            <ul>
                <li>Harmonized Cognitive Assessment Protocol (HCAP) instruments for cognitive and physical function
                    assessments.</li>
                <li>Interviews with participants and caregivers, including assessments of height, weight, and blood
                    pressure.</li>
                <li>Biomarker collection involving plasma, serum, and red blood cells.</li>
            </ul>
        </section>

        <section>
            <h2>Timeline and Current Status</h2>
            <p>The study commenced in 2022 and is projected to conclude by 2027. The research team has successfully
                completed initial data collection and is preparing for follow-up assessments in the coming years.</p>
        </section>
        <!-- Add new section for Potential Problems and Alternative Strategies -->
        <section>
            <h2>Potential Problems and Alternative Strategies</h2>
            <h3>1. Participant Burden</h3>
            <p>We anticipate that the survey interview, including cognitive tests, will take 1.5 – 2 hours to complete. In this sample of middle-aged to older adults, this duration may cause fatigue for some participants. Our strategy will be to train interview staff to be sensitive to respondent fatigue and offer to split the interview over multiple sessions to reduce the burden. Although splitting interviews can lower response rates, previous CVFS studies have achieved high response rates of over 90% for similar length interviews.</p>

            <h3>2. Privacy of Interview</h3>
            <p>In rural areas, it is often difficult to conduct interviews in private, as many households live in small dwellings. Our staff will offer to move interviews to safe, private outdoor locations and will send teams of two interviewers—one to conduct the interview and the other to keep household members occupied, ensuring the interview is private. We will also add interviewer observation questions to record the presence of others and control for these factors in our statistical models.</p>

            <h3>3. Limited Statistical Power</h3>
            <p>We recognize that statistical power may be limited. However, this work will lay the groundwork for future ADRD research in Nepal. We plan to continue enrolling eligible participants from the current CVFS cohort, contingent on future funding support.</p>

            <h3>4. Biomarker Data</h3>
            <p>We plan to collect biomarker data, though we have not yet included specific assays of blood samples. This decision stems from the evolving scientific understanding of ADRD biomarkers. We will store frozen samples and seek future funding to conduct assays once more is known about relevant biomarkers for ADRD.</p>
        </section>

        <!-- Add new section for Broader Implications -->
        <section>
            <h2>Broader Implications for ADRD Research in Nepal</h2>
            <p>Population aging is a growing concern in lower-income countries, including Nepal. This has led to an increase in older adults at high risk of developing Alzheimer's Disease and Related Dementias (ADRD). Much remains unknown about the burden of ADRD in Nepal and the care needs of patients and their families.</p>

            <p>Nepal also faces unique social and economic challenges, such as labor migration and armed conflict, which expose its population to health risks throughout life. Our study focuses on two common risk factors in low- and middle-income countries: international labor migration and armed conflict. While immediate health risks like occupational injuries, disabilities, depression, and PTSD are well-documented, the long-term health impacts, particularly those that manifest later in life, remain less understood.</p>

            <p>This study aims to fill critical gaps in understanding the long-term health consequences of these risk factors, especially in relation to ADRD. Findings from this research will not only enhance our understanding of ADRD risks in Nepal but will also have relevance for other low- and middle-income countries undergoing similar social and economic transitions.</p>
        </section>
    @endsection
