<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layout')

@section('title', 'CVFS on Cognition and Aging in Nepal')
@section('content')
<div class="container mt-4 mb-5">
    <nav class="breadcrumb-nav mb-4 d-flex justify-content-end">
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home me-1"></i>Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('#') }}">Capacity Building</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Analysis</li>
        </ol>
    </nav>

    <div>
        <h2 class="gallery-title">Data Analysis</h2>
    </div>

    <div class="accordion" id="dataAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="True" aria-controls="collapseOne">
                    <strong>Workshop: Building Your Biostatistics Toolbox at ISER-N</strong>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#dataAccordion">
                <div class="accordion-body">
                    <div style="width: auto; margin: 0 auto; padding: 20px; font-family: 'Segoe UI', Arial, sans-serif; color: #333; line-height: 1.6;"><!-- Header Section -->

                        <!-- Introduction Paragraph -->
                        <div style="background-color: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 30px;">
                            <p style="font-size: 16px; line-height: 1.7; margin: 0;">The Institute for Social and Environmental Research Nepal (ISER-N), in partnership with the University of Michigan School of Public Health, hosted a dynamic two-day workshop titled <strong style="color: #2980b9;">"Building Your Biostatistics Toolbox"</strong> on <strong>May 22&ndash;23, 2025</strong> at Fulbari, Chitwan. Participants included doctors from Bharatpur Hospital, Chitwan Medical College, and Bakulahar Hospital, along with researchers from academic institutions across Chitwan and ISER-N's in-house research team. The event aimed to enhance their capacity in biostatistical analysis.</p>
                        </div>
                        <!-- Image Gallery - Row 1 -->
                        <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 20px;"><!-- Image 1 -->
                            <!-- Image 2 -->
                            <div style="flex: 1 1 calc(50% - 20px); min-width: 300px; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"><img style="width: 100%; height: 250px; object-fit: cover;" src="/images/biostaticspic2.jpg" alt="Session by Dr. Mousumi Banerjee" />
                                <div style="padding: 15px;">
                                    <p style="font-style: italic; font-size: 14px; color: #555; margin: 0; border-left: 3px solid #3498db; padding-left: 10px;">Dr. Mousumi Banerjee, a Collegiate Research Professor from the University of Michigan, delivers an engaging session on regression modeling and statistical reasoning, joined by active participant&rsquo;s eager to apply these methods.</p>
                                </div>
                            </div>

                            <div style="flex: 1 1 calc(50% - 20px); min-width: 300px; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"><img style="width: 100%; height: 250px; object-fit: cover;" src="/images/biostaticspic4.jpg" alt="Hands-on SPSS session" />
                                <div style="padding: 15px;">
                                    <p style="font-style: italic; font-size: 14px; color: #555; margin: 0; border-left: 3px solid #3498db; padding-left: 10px;">Participants applied their learning through hands-on SPSS exercises, supported by ISER-N's technical team led by Mrs. Adina Gurung, Data Manager. The practical sessions focused on linear and logistic regression, facilitating the real-world application of statistical concepts.</p>
                                </div>
                            </div>



                        </div>
                        <!-- Image Gallery - Row 2 -->
                        <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 30px;"><!-- Image 3 -->

                            <!-- Image 4 -->
                            <div style="flex: 1 1 calc(50% - 20px); min-width: 300px; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"><img style="width: 100%; height: 250px; object-fit: cover;" src="/images/biostaticspic3.jpg" alt="Certificate distribution" />
                                <div style="padding: 15px;">
                                    <p style="font-style: italic; font-size: 14px; color: #555; margin: 0; border-left: 3px solid #3498db; padding-left: 10px;">Dr. Mousumi Banerjee and ISER-N leadership congratulate participants during the certificate distribution ceremony, celebrating the successful completion of the biostatistics training.</p>
                                </div>
                            </div>

                            <div style="flex: 1 1 calc(50% - 20px); min-width: 300px; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"><img style="width: 100%; height: 250px; object-fit: cover;" src="/images/biostaticspic1.jpg" alt="Group photo of participants" />
                                <div style="padding: 15px;">
                                    <p style="font-style: italic; font-size: 14px; color: #555; margin: 0; border-left: 3px solid #3498db; padding-left: 10px;">Participants of the "Building Your Biostatistics Toolbox" workshop pose for a group photo at ISER-N. The event brought together doctors, statisticians, and public health professionals from across the region.</p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong> Data Analysis Training - 2024/2025</strong>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#dataAccordion">
                <div class="accordion-body">






                </div>
            </div>
        </div>




    </div>
</div>




















</div>
@endsection