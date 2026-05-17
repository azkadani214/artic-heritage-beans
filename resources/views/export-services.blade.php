@extends('layouts.app')

@section('content')
<!-- Start Page Heading Section -->
<section class="cs_page_heading cs_style_1 cs_bg_filed cs_heading_bg" data-src="{{ asset('assets/img/cta-bg-1.png') }}">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Export Services</li>
        </ol>
        <h1 class="cs_page_title mb-0 cs_fs_80 wow fadeInUp">EXPORT SERVICES</h1>
    </div>
</section>
<!-- End Page Heading Section -->

<!-- Start Services Section -->
<div class="cs_height_100 cs_height_lg_70"></div>
<div class="container">
    <div class="cs_section_heading cs_style_3">
        <h3 class="cs_brackets_title cs_normal cs_fs_16 mb-0 wow fadeInUp">WHAT WE PROVIDE</h3>
    </div>
    <div class="cs_height_64 cs_height_lg_50"></div>
    <div class="row cs_gap_y_40 cs_gap_x_40">
        <div class="col-lg-6">
            <div class="cs_card cs_style_2 wow fadeInUp">
                <div class="cs_card_thumb">
                    <img src="{{ asset('assets/img/global-logistics.png') }}" alt="Logistics">
                </div>
                <div class="cs_card_info">
                    <h2 class="cs_card_title cs_fs_32 cs_white_color cs_bold cs_mb_8">
                        GLOBAL LOGISTICS
                    </h2>
                    <p class="cs_card_subtitle mb-0 cs_white_color">We handle the entire logistics chain from our warehouse to your destination port, ensuring standard care and efficiency.</p>
                </div>
                <a href="{{ url('/contact') }}" class="cs_arrow_btn cs_size_lg cs_center cs_white_bg cs_heading_color">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.3846 0H0.615385C0.275692 0 0 0.275692 0 0.615385C0 0.955077 0.275692 1.23077 0.615385 1.23077H13.8988L0.180308 14.9495C-0.06 15.1898 -0.06 15.5794 0.180308 15.8197C0.300615 15.94 0.457846 16 0.615385 16C0.772923 16 0.930461 15.94 1.05046 15.8197L14.7692 2.10092V15.3846C14.7692 15.7243 15.0449 16 15.3846 16C15.7243 16 16 15.7243 16 15.3846V0.615385C16 0.275692 15.7243 0 15.3846 0Z" fill="currentColor"></path>
                    </svg>                
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="cs_card cs_style_2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="cs_card_thumb">
                    <img src="{{ asset('assets/img/document-services.png') }}" alt="Documentation">
                </div>
                <div class="cs_card_info">
                    <h2 class="cs_card_title cs_fs_32 cs_white_color cs_bold cs_mb_8">
                        CUSTOMS & DOCS
                    </h2>
                    <p class="cs_card_subtitle mb-0 cs_white_color">Precision documentation including Phytosanitary, Certificate of Origin, and B/L for smooth customs clearance.</p>
                </div>
                <a href="{{ url('/contact') }}" class="cs_arrow_btn cs_size_lg cs_center cs_white_bg cs_heading_color">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.3846 0H0.615385C0.275692 0 0 0.275692 0 0.615385C0 0.955077 0.275692 1.23077 0.615385 1.23077H13.8988L0.180308 14.9495C-0.06 15.1898 -0.06 15.5794 0.180308 15.8197C0.300615 15.94 0.457846 16 0.615385 16C0.772923 16 0.930461 15.94 1.05046 15.8197L14.7692 2.10092V15.3846C14.7692 15.7243 15.0449 16 15.3846 16C15.7243 16 16 15.7243 16 15.3846V0.615385C16 0.275692 15.7243 0 15.3846 0Z" fill="currentColor"></path>
                    </svg>                
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="cs_card cs_style_2 wow fadeInUp" data-wow-delay="0.2s">
                <div class="cs_card_thumb">
                    <img src="{{ asset('assets/img/quality-assurance.png') }}" alt="Quality Control">
                </div>
                <div class="cs_card_info">
                    <h2 class="cs_card_title cs_fs_32 cs_white_color cs_bold cs_mb_8">
                        QUALITY ASSURANCE
                    </h2>
                    <p class="cs_card_subtitle mb-0 cs_white_color">Rigorous testing and cupping reports for every batch to ensure consistency with international export standards.</p>
                </div>
                <a href="{{ url('/contact') }}" class="cs_arrow_btn cs_size_lg cs_center cs_white_bg cs_heading_color">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.3846 0H0.615385C0.275692 0 0 0.275692 0 0.615385C0 0.955077 0.275692 1.23077 0.615385 1.23077H13.8988L0.180308 14.9495C-0.06 15.1898 -0.06 15.5794 0.180308 15.8197C0.300615 15.94 0.457846 16 0.615385 16C0.772923 16 0.930461 15.94 1.05046 15.8197L14.7692 2.10092V15.3846C14.7692 15.7243 15.0449 16 15.3846 16C15.7243 16 16 15.7243 16 15.3846V0.615385C16 0.275692 15.7243 0 15.3846 0Z" fill="currentColor"></path>
                    </svg>                
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="cs_card cs_style_2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="cs_card_thumb">
                    <img src="{{ asset('assets/img/custom-packaging.png') }}" alt="Packaging">
                </div>
                <div class="cs_card_info">
                    <h2 class="cs_card_title cs_fs_32 cs_white_color cs_bold cs_mb_8">
                        CUSTOM PACKAGING
                    </h2>
                    <p class="cs_card_subtitle mb-0 cs_white_color">Flexible options from 60kg jute bags with GrainPro to vacuum packs and custom retail branding solutions.</p>
                </div>
                <a href="{{ url('/contact') }}" class="cs_arrow_btn cs_size_lg cs_center cs_white_bg cs_heading_color">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.3846 0H0.615385C0.275692 0 0 0.275692 0 0.615385C0 0.955077 0.275692 1.23077 0.615385 1.23077H13.8988L0.180308 14.9495C-0.06 15.1898 -0.06 15.5794 0.180308 15.8197C0.300615 15.94 0.457846 16 0.615385 16C0.772923 16 0.930461 15.94 1.05046 15.8197L14.7692 2.10092V15.3846C14.7692 15.7243 15.0449 16 15.3846 16C15.7243 16 16 15.7243 16 15.3846V0.615385C16 0.275692 15.7243 0 15.3846 0Z" fill="currentColor"></path>
                    </svg>                
                </a>
            </div>
        </div>
    </div>
</div>
<div class="cs_height_100 cs_height_lg_70"></div>
<!-- End Services Section -->

<!-- Start CTA Section -->
<section class="cs_cta cs_style_1 cs_heading_bg cs_bg_filed" data-src="{{ asset('assets/img/cta_bg_2.jpg') }}">
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_cta_in text-center">
            <h2 class="cs_cta_title cs_fs_80 cs_white_color cs_mb_40 wow fadeInDown">NEED A PROFESSIONAL <br>EXPORT PARTNER?</h2>
            <a href="{{ url('/contact') }}" class="cs_btn cs_style_1 cs_bold cs_heading_color cs_white_bg wow fadeInUp">Get a Quote</a>
        </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
</section>
<!-- End CTA Section -->
@endsection
