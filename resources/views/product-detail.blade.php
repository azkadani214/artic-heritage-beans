@extends('layouts.app')

@section('content')
<!-- Start Page Heading Section -->
<section class="cs_page_heading cs_style_1 cs_bg_filed cs_heading_bg" data-src="{{ asset('assets/img/service_heading_bg.jpg') }}">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/products') }}">Products</a></li>
            <li class="breadcrumb-item active">{{ strtoupper(str_replace('-', ' ', $slug)) }}</li>
        </ol>
        <h1 class="cs_page_title mb-0 cs_fs_80 wow fadeInUp">{{ strtoupper(str_replace('-', ' ', $slug)) }}</h1>
    </div>
</section>
<!-- End Page Heading Section -->

<!-- Start Product Detail Section -->
<section>
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
        <div class="row cs_gap_y_50">
            <div class="col-lg-6">
                <div class="cs_img_box cs_style_1 wow fadeInLeft">
                    <img src="{{ asset('assets/img/service_thumb_1.jpg') }}" alt="{{ $slug }}" class="cs_radius_20">
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <h3 class="cs_brackets_title cs_normal cs_fs_16 mb-0 wow fadeInDown">PRODUCT DETAILS</h3>
                    <div class="cs_height_12 cs_height_lg_10"></div>
                    <h2 class="cs_fs_48 cs_bold mb-0 wow fadeInUp">{{ strtoupper(str_replace('-', ' ', $slug)) }} <span>SPECIFICATIONS</span></h2>
                </div>
                <div class="cs_height_24 cs_height_lg_15"></div>
                <p class="cs_fs_20 wow fadeInUp" style="line-height: 1.6em;">Our {{ str_replace('-', ' ', $slug) }} is sourced from the finest plantations across the Indonesian archipelago. We ensure rigorous quality control at every stage, from harvesting to final packaging.</p>
                
                <div class="cs_height_30 cs_height_lg_20"></div>
                <ul class="cs_list cs_style_1 cs_mp_0 cs_fs_18">
                    <li><i class="fa-solid fa-circle-check"></i> <b>Origin:</b> Gayo, Mandailing, Toraja, or Bajawa (Request Specific)</li>
                    <li><i class="fa-solid fa-circle-check"></i> <b>Variety:</b> Arabica / Robusta / Excelsa</li>
                    <li><i class="fa-solid fa-circle-check"></i> <b>Processing:</b> Full Washed / Semi Washed / Natural / Honey</li>
                    <li><i class="fa-solid fa-circle-check"></i> <b>Moisture Content:</b> Max 12%</li>
                    <li><i class="fa-solid fa-circle-check"></i> <b>Defect Rate:</b> Grade 1 (Standard Export)</li>
                    <li><i class="fa-solid fa-circle-check"></i> <b>Packaging:</b> Jute Bag 60kg / Vacuum Pack / Custom</li>
                </ul>
                
                <div class="cs_height_40 cs_height_lg_30"></div>
                <div class="cs_hero_btns">
                    <a href="{{ url('/contact') }}" class="cs_btn cs_style_1 cs_bold cs_heading_bg cs_white_color wow fadeInUp">Inquiry Now</a>
                </div>
            </div>
        </div>
        
        <div class="cs_height_100 cs_height_lg_70"></div>
        <div class="row cs_gap_y_40">
            <div class="col-lg-4">
                <div class="cs_iconbox cs_style_1 cs_radius_20 wow fadeInUp" style="background: #F1E2D1; padding: 40px; border: 1px solid #DCC3AA; height: 100%;">
                    <div class="cs_iconbox_icon cs_center cs_mb_24" style="background: #541A1A; color: #fff; width: 60px; height: 60px; border-radius: 50%;">
                        <i class="fa-solid fa-mountain-sun"></i>
                    </div>
                    <h3 class="cs_fs_24 cs_bold cs_mb_12">Altitude</h3>
                    <p class="mb-0 cs_fs_18">Grown at 1,200 - 1,600 MASL for optimal flavor density and acidity profile.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cs_iconbox cs_style_1 cs_radius_20 wow fadeInUp" data-wow-delay="0.1s" style="background: #F1E2D1; padding: 40px; border: 1px solid #DCC3AA; height: 100%;">
                    <div class="cs_iconbox_icon cs_center cs_mb_24" style="background: #541A1A; color: #fff; width: 60px; height: 60px; border-radius: 50%;">
                        <i class="fa-solid fa-mug-hot"></i>
                    </div>
                    <h3 class="cs_fs_24 cs_bold cs_mb_12">Taste Notes</h3>
                    <p class="mb-0 cs_fs_18">Complex profiles including Chocolate, Nutty, Fruity, and Earthy undertones.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cs_iconbox cs_style_1 cs_radius_20 wow fadeInUp" data-wow-delay="0.2s" style="background: #F1E2D1; padding: 40px; border: 1px solid #DCC3AA; height: 100%;">
                    <div class="cs_iconbox_icon cs_center cs_mb_24" style="background: #541A1A; color: #fff; width: 60px; height: 60px; border-radius: 50%;">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="cs_fs_24 cs_bold cs_mb_12">Certifications</h3>
                    <p class="mb-0 cs_fs_18">Available with Organic, Fair Trade, and Rainforest Alliance certifications upon request.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
</section>
<!-- End Product Detail Section -->

<!-- Start CTA Section -->
<section class="cs_cta cs_style_1 cs_heading_bg cs_bg_filed" data-src="{{ asset('assets/img/cta_bg.jpg') }}">
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_cta_in text-center">
            <h2 class="cs_cta_title cs_fs_80 cs_white_color cs_mb_40 wow fadeInDown">READY TO ORDER?</h2>
            <p class="cs_white_color cs_fs_20 cs_mb_40 cs_opacity_7_5">Contact us for bulk pricing and logistics details to your destination.</p>
            <a href="{{ url('/contact') }}" class="cs_btn cs_style_1 cs_bold cs_heading_color cs_white_bg wow fadeInUp">Contact Sales</a>
        </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
</section>
<!-- End CTA Section -->
@endsection
