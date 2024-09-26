<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@extends('layout')

@section('title', 'Investigators')

@section('content')
<div class="container text-center my-5">
    <h2 class="mb-5">Investigators</h2>
    <div class="container">
        @foreach($investigators as $investigator)
        <div class="row investigator mb-4">
            <!-- Investigator Image -->
            <div class="col-md-3 text-center">
                <img src="{{ asset('storage/' . $investigator->profile_image) }}" alt="{{ $investigator->name }}" class="img-fluid">

            </div>
            <!-- Investigator Details -->
            <div class="col-md-9 text-start">
                <h5>{{ $investigator->name }}</h5>
                <p><strong>{{ $investigator->position }}</strong></p>
                <p><strong><i class="fas fa-phone"></i> {{ $investigator->phone }}</strong></p>
                <p><strong><i class="fa-solid fa-envelope"></i></strong> <a href="mailto:{{ $investigator->email }}">{{ $investigator->email }}</a></p>
                <p>{{ $investigator->bio }}</p>
                <p>{{ $investigator->description }}</p>
                <a href="#" class="btn btn-primary btn-download">Download CV</a>
            </div>
        </div>
        @endforeach
    </div>
</div>




    {{-- <div class="container text-center my-5">
        <h2 class="mb-5">Investigators</h2>
        <div class="container ">

            <div class="row investigator ">
                <!-- First Investigator -->
                <div class="col-md-3 text-center">
                    <img src="/images/Dr_ Dhirgha_jibi_ghimire.jpg" alt="Investigator Image">
                </div>
                <div class="col-md-9 text-start">
                    <h5>PROF. DR. DIRGHA JIBI GHIMIRE</h5>
                    <p><strong>PRINCIPAL INVESTIGATOR</strong></p>
                    <p><strong><i class="fas fa-phone"></i> (734) 763-8649</strong></p>
                    <p><strong><i class="fa-solid fa-envelope"></i></strong> <a
                            href="mailto:nepdj@umich.edu">nepdjg@umich.edu</a></p>
                    <p><strong>Director</strong> – Institute for Social & Environment Research – Nepal <br>
                        Research Professor, Population Studies Center Ph.D. Sociology and Demography, University of Michigan
                    </p>
                    <p>
                        Dr. Ghimire studies social change, developmental idealism, family and demography, population and
                        environment dynamics. His research within family and demography revolves around three sub areas-
                        marriage (marital arrangement, marital relationship and relationship dynamics), childbearing (timing
                        of first birth), and fertility limitation (contraceptive use). In addition, he also studies
                        reproductive health, HIV/AIDS and mental health and well-being. Another major area of Dr. Ghimire’s
                        research focuses on understanding of the interplay between population and environmental processes
                        (reciprocal impacts of population processes on land use and terrestrial biodiversity, and
                        environmental degradation on childbearing, contraceptive use, individual mobility and household
                        energy use). More recently his work has focused on ideational aspects of these substantive areas.
                    </p>
                    <a href="https://idea.isernepal.org/uploads/investigators/Dr.GhimireCV_7.8.2021.pdf" target="_blank"
                        class="btn btn-primary btn-download">Download CV</a>
                </div>
            </div>
            <div class="row investigator ">
                <div class="col-md-3 text-center">
                    <img src="/images/Dr. Carlos Mendes de Leon.jpg" alt="Investigator Image">
                </div>
                <div class="col-md-9 text-start">
                    <h5>Dr. Carlos Mendes de Leon</h5>
                    <p><strong>Co-Investigator</strong></p>
                    <p><strong><i class="fas fa-phone"></i> 734-615-2134</strong></p>
                    <p><strong><i class="fa-solid fa-envelope"></i></strong> <a
                            href="mailto:cmendes@umich.edu">cmendes@umich.edu</a></p>
                    <p><strong>Professor of Epidemiology</strong>- Ph.D., University of Michigan</p>
                    <p>
                        Prof. Dr. Carlos F. Mendes de Leon is a professor of Epidemiology at the University of Michigan. His
                        research involves epidemiology of late life health, social epidemiology, health disparities,
                        psychosocial risk factors for disease and disability, longitudinal methods. He is Co-Principal
                        Investigator of the study and as Co-PI, Mendes de Leon jointly with Dr. Ghimire will oversee all
                        administrative and scientific aspects of the proposed research plan, including coordination among
                        project collaborators, project planning, design and refinement of data collection instruments to
                        measure ADRD, and venomous blood sample collection for genotyping. In the analysis portion of the
                        project, he will lead the estimate of prevalence rate and socioeconomic predictors of ADRD. He will
                        work closely together with Dr. Ghimire, Dr. Briceno-Abreu, Dr. Mitchel and Dr. Langa to oversee all
                        study activities involved in this project.
                    </p>
                    <a href="#" target="_blank" class="btn btn-primary btn-download">Download CV</a>
                </div>
            </div>
            <div class="row investigator ">

                <div class="col-md-3 text-center">
                    <img src="/images/Emily-MarieBriceno-Abreut.jpg" alt="Investigator Image">
                </div>
                <div class="col-md-9 text-start">
                    <h5>Dr. Emily Briceno-Abreu</h5>
                    <p><strong>Co-INVESTIGATOR</strong></p>
                    <p><strong><i class="fas fa-phone"></i> 866-909-4449</strong></p>
                    <p><strong><i class="fa-solid fa-envelope"></i></strong> <a
                            href="mailto:emilande@umich.edu">emilande@umich.edu</a></p>
                    <p><strong>Clinical Neuropsychologist and Clinical Associate Professor</strong> - in the department of
                        Physical Medicine and Rehabilitation at the University of Michigan.</p>
                    <p>
                        As a clinical neuropsychologist, she has extensive training, clinical and research experience in
                        neuropsychology with diverse patient populations, including the neuropsychological assessment of
                        dementia. She is currently an investigator on several NIH-funded studies, including several studies
                        that use the Harmonized Cognitive Assessment Protocol (HCAP), the cognitive assessment protocol for
                        the current project. Dr. Briceno-Abreu is Co-PI of a NIA funded R24 pilot project, which aims to
                        utilize cultural neuropsychological procedures to optimize cross national comparisons of cognitive
                        assessment data from studies within the HCAP International Network. She is also a Co-Investigator on
                        the NIH-funded BASIC-Cognitive study, an R01 that aims to ascertain the prevalence and impact of
                        dementia in Mexican Americans, and on another R01 in this cohort that aims to examine caregiver
                        decision-making and longer-term cognitive trajectories across Mexican Americans and non-Hispanic
                        whites. These projects use the HCAP instruments to assess cognitive health and its trajectories in
                        this culturally and linguistically diverse population. As the neuropsychologist investigator, she
                        will be responsible for the implementation and interpretation of the HCAP assessments, particularly
                        in considering the impact of demographic, linguistic, and cultural factors to optimize precision in
                        measurement of cognition. She will also develop and provide training for the field office staff on
                        cognitive testing with the HCAP assessment instrument and oversee quality assurance. In addition she
                        will also be involved in data analysis, and presentation and publication of results. In the analysis
                        portion of the project, he will lead the analyses of international migration and ADRD.
                    </p>
                    <a href="#" target="_blank" class="btn btn-primary btn-download">Download CV</a>
                </div>
            </div>
            <div class="row investigator ">

                <div class="col-md-3 text-center">
                    <img src="/images/colter-mitchell.jpg" alt="Investigator Image">
                </div>
                <div class="col-md-9 text-start">
                    <h5>Dr. Colter Mitchell</h5>
                    <p><strong>Co-INVESTIGATOR</strong></p>
                    <p><strong><i class="fas fa-phone"></i> (734) 615-1724</strong></p>
                    <p><strong><i class="fa-solid fa-envelope"></i></strong> <a
                            href="mailto:cmsm@umich.edu">cmsm@umich.edu</a></p>
                    <p><strong>Associate Professor</strong>- in the Survey Research Center,PhD., University of Michigan</p>
                    <p>
                        Prof. Dr. Colter Mitchell is Director of Population, Neurodevelopment, and Genetics
                        Program; Research Associate Professor, Survey Research Center, Population Studies Center, and
                        Department of Sociology; Co-Director, Institute for Social Research Bio specimen Lab University of
                        Michigan. Dr. Mitchell’s research utilizes a range of biological data types such as epigenetics,
                        neuroimaging, and genetics to better understand how social conditions shape population health. In
                        particular his work uses these biomarkers to elucidate pathways by which social inequalities cause
                        health inequalities. This research uses longitudinal population-based studies. He is Co-Investigator
                        in the project and will be responsible to oversee the analysis linking genetic propensity,
                        international labor migration to ADRD.
                    </p>
                    <a href="#" target="_blank" class="btn btn-primary btn-download">Download CV</a>
                </div>
            </div>
            <div class="row investigator ">

                <div class="col-md-3 text-center">
                    <img src="/images/Dr. Kenneth M. Langa.JPG" alt="Investigator Image">
                </div>
                <div class="col-md-9 text-start">
                    <h5>Dr. Kenneth M. Langa</h5>
                    <p><strong>Co-INVESTIGATOR</strong></p>
                    <p><strong><i class="fas fa-phone"></i>(734) 647-8160 </strong></p>
                    <p><strong><i class="fa-solid fa-envelope"></i></strong> <a
                            href="mailto:klanga@umich.edu">klanga@umich.edu</a></p>
                    <p><strong>Cyrus Sturgis Professor</strong>- of Medicine at the University of
                        Michigan,<br><strong>Associate Director</strong>- of the Institute of Gerontology and for the Health
                        and Retirement Study (HRS).<br> <strong>Research Investigator</strong>- in the Ann Arbor Veterans
                        Affairs (VA) Center for Clinical Management Research. </p>
                    <p>
                        His research has focused on the risk factors and outcomes for chronic disease in older adults, with
                        a special emphasis on Alzheimer’s disease and other dementias, and has published more than 225
                        peer-reviewed articles on these topics. He has collaborated with the HRS study team since 1998. Dr.
                        Langa was Lead Investigator on the original HRS dementia sub-study, the ADAMS, from 2002 through
                        2010, and a Co-Investigator on the HRS-HCAP competing revision, working closely with David Weir in
                        developing the HCAP protocol fielded by the HRS in 2016. Dr. Langa currently serves as the Principal
                        Investigator of the NIA-funded HRS-HCAP study. He will provide expertise in aligning the HCAP
                        cognitive assessment and dementia algorithms in this study with those applied in other international
                        studies of dementia, in particular the HRS Network of Studies on Aging. Dr. Langa will provide
                        guidance on overall implementation of HCAP.
                    </p>
                    <a href="#" target="_blank" class="btn btn-primary btn-download">Download CV</a>
                </div>
            </div>
            <div class="row investigator ">

                <div class="col-md-3 text-center">
                    <img src="/images/Uttam-Sharma.jpg" alt="Investigator Image">
                </div>
                <div class="col-md-9 text-start">
                    <h5>Dr. Uttam Sharma</h5>
                    <p><strong>Co-INVESTIGATOR</strong></p>
                    <p><strong><i class="fas fa-phone"></i> (734) 615-1724</strong></p>
                    <p><strong><i class="fa-solid fa-envelope"></i></strong> <a
                            href="mailto:cmsm@umich.edu">cmsm@umich.edu</a></p>
                    <p>
                        Dr. Uttam Sharma is an applied economist with more than 10 years of experience conducting research in topics related to agriculture, education, and labor market in Bangladesh, Kenya, Nepal, Nigeria and Tanzania. He was a Co-Principal Investigator (co-PI) on 3ie-funded projects in Kenya and Nepal, and a Co-Investigator in a DFID/ESRC-funded study in Nepal. As a Co-Investigator, his responsibilities on this project include overseeing field operation (acquiring ethical and necessary government approval, validation of research instrument, staff recruitment, training data collection staff and supervision of data collection and data management) in Nepal and coordinating between Nepali and US investigators.  In addition, Dr. Sharma will be involved in all phases of data cleaning and coding, data analysis, writing manuscripts, and presenting scientific results. In the analysis portions of the project, he will collaborate with the research team on the analyses of the associations between socioeconomic status, family dynamics, and ADRD. 
                    </p>
                    <a href="#" target="_blank" class="btn btn-primary btn-download">Download CV</a>
                </div>
            </div>
            <div class="row investigator ">

                <div class="col-md-3 text-center">
                    <img src="/images/dr-meeta-sainju-pradhan.jpg" alt="Investigator Image">
                </div>
                <div class="col-md-9 text-start">
                    <h5>Dr. Meeta Sainju Pradhan</h5>
                    <p><strong>Co-INVESTIGATOR</strong></p>
                    <p><strong><i class="fas fa-phone"></i> (734) 615-1724</strong></p>
                    <p><strong><i class="fa-solid fa-envelope"></i></strong> <a
                            href="mailto:cmsm@umich.edu">cmsm@umich.edu</a></p>
                    <p>
                        Dr. Meeta Sainju Pradhan is a sociologist and Research Scientist at ISER-N and contributes her expertise on gender equality and social inclusion in the social, economic and political life in Nepal. Dr. Pradhan’s research focuses on poverty alleviation, gender equality, and social inclusion (encompassing exclusion from basic rights of groups based on differences in gender, caste, ethnicity, class, geography/region, sexual and gender minorities, persons with disabilities, elderly populations, etc.). The combination of her experiences and insights adds value to this project. As a Co-Investigator, Dr. Pradhan’s responsibilities on this project include providing gender perspective on research instrument translation, validation, and research staff training. She will also be involved in data analysis, writing manuscripts, and presenting scientific results. In the analysis portions of the project, she will collaborate with the research team on the estimation of associations between gender, disadvantage status and ADRD.
                    </p>
                    <a href="#" target="_blank" class="btn btn-primary btn-download">Download CV</a>
                </div>
            </div>
            <div class="row investigator ">

                <div class="col-md-3 text-center">
                    <img src="/images/Dr. Pankaj Jalan.JPG" alt="Investigator Image">
                </div>
                <div class="col-md-9 text-start">
                    <h5>Dr. Pankaj Jalan</h5>
                    <p><strong>Co-INVESTIGATOR</strong></p>
                    <p><strong><i class="fas fa-phone"></i> (734) 615-1724</strong></p>
                    <p><strong><i class="fa-solid fa-envelope"></i></strong> <a
                            href="mailto:cmsm@umich.edu">cmsm@umich.edu</a></p>
                    <p>
                        Dr. Pankaj Jalan is a neurologist and has over a decade of experience in evaluating and treating patients with cognitive disorders from all over Nepal and encounters many patients with Alzheimer disease and related dementias. Dr. Jalan has completed neurology training at S.I.U. School of Medicine and is a board-certified neurologist. He provides expertise in an S.I.U. Memory and Aging Clinic which included training and research on ADRD. As Co-Investigator, his responsibilities on this project include overseeing the translation of the cognitive assessment tools, testing and validating the cognitive assessment tools, blood sample collection and shipping protocol and training Nepali research staff on the cognitive assessments. Dr. Jalan will work in close collaboration with the research team, especially Dr. Sharma, Rai, Pradhan, and the ISER-N research staff on translating the cognitive assessment tools; Dr. Briceno and the ISER-N research staff on testing and validating the cognitive measures; and Dr. Briceno on training of the cognitive assessment and ADRD measures. His extensive experience in evaluating and treating patients with cognitive disorders is particularly valuable for this project. Dr. Jalan will also be involved in writing manuscripts, and presenting scientific results. In the analysis portions of the project, he will collaborate with the research team on estimation of population based ADRD prevalence rate and the analyses of the associations between international migration, armed conflict and ADRD. 
                    </p>
                    <a href="#" target="_blank" class="btn btn-primary btn-download">Download CV</a>
                </div>
            </div>
            <div class="row investigator ">

                <div class="col-md-3 text-center">
                    <img src="/images/Janak-Rai.png" alt="Investigator Image">
                </div>
                <div class="col-md-9 text-start">
                    <h5>Dr. Janak Rai</h5>
                    <p><strong>Co-INVESTIGATOR</strong></p>
                    <p><strong><i class="fas fa-phone"></i> (734) 615-1724</strong></p>
                    <p><strong><i class="fa-solid fa-envelope"></i></strong> <a
                            href="mailto:cmsm@umich.edu">cmsm@umich.edu</a></p>
                    <p>
                        Prof. Dr. Janak Rai is a cultural anthropologist and Associate Professor at Tribhuvan University and has extensive knowledge on the fabric of the Nepali population and culture to inform the content and translation of survey instruments. As a Co-Investigator, his responsibilities on this project include providing cultural perspective on research instrument translation, validation, and research staff training. Dr. Rai will be involved in qualitative data analysis, writing manuscripts, and presenting scientific results. In the analysis portions of the project, he will collaborate with the research team on the analyses of the associations between religio-ethnic status, armed conflict and ADRD. 
                    </p>
                    <a href="#" target="_blank" class="btn btn-primary btn-download">Download CV</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
