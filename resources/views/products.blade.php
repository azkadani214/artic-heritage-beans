@extends('layouts.app')

@section('content')
<!-- Start Page Heading Section -->
<section class="cs_page_heading cs_style_1 cs_bg_filed cs_heading_bg" data-src="{{ asset('assets/img/service_heading_bg.jpg') }}">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Products</li>
        </ol>
        <h1 class="cs_page_title mb-0 cs_fs_80 wow fadeInUp">OUR PRODUCTS</h1>
    </div>
</section>
<!-- End Page Heading Section -->

<!-- Start Products Section -->
<section>
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_3">
            <h3 class="cs_brackets_title cs_normal cs_fs_16 mb-0 wow fadeInUp">PREMIUM SELECTION</h3>
        </div>
        <div class="cs_height_64 cs_height_lg_50"></div>
        <div class="row cs_gap_y_40">
            <div class="col-lg-4 col-md-6">
                <div class="cs_card cs_style_1 cs_heading_bg cs_bg_filed wow fadeInUp" data-src="{{ asset('assets/img/service_thumb_1.jpg') }}">
                    <div class="cs_card_bottom">
                        <h2 class="cs_card_title cs_white_color cs_fs_32">GREEN BEANS</h2>
                        <p class="cs_card_subtitle mb-0 cs_white_color">Premium raw coffee beans (Arabica, Robusta, Specialty) sourced directly from farmers for international roasteries.</p>
                        <div class="cs_height_20 cs_height_lg_15"></div>
                        <a href="{{ url('/products/green-beans') }}" class="cs_btn cs_style_2 cs_bold cs_white_color cs_product_btn">See Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cs_card cs_style_1 cs_heading_bg cs_bg_filed wow fadeInUp" data-src="{{ asset('assets/img/service_thumb_2.jpg') }}" data-wow-delay="0.1s">
                    <div class="cs_card_bottom">
                        <h2 class="cs_card_title cs_white_color cs_fs_32">ROASTED COFFEE</h2>
                        <p class="cs_card_subtitle mb-0 cs_white_color">Freshly roasted beans with various profiles: Light, Medium, and Dark Roast to meet your market preference.</p>
                        <div class="cs_height_20 cs_height_lg_15"></div>
                        <a href="{{ url('/products/roasted-coffee') }}" class="cs_btn cs_style_2 cs_bold cs_white_color cs_product_btn">See Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cs_card cs_style_1 cs_heading_bg cs_bg_filed wow fadeInUp" data-src="{{ asset('assets/img/service_thumb_3.jpg') }}" data-wow-delay="0.2s">
                    <div class="cs_card_bottom">
                        <h2 class="cs_card_title cs_white_color cs_fs_32">SPECIALTY COFFEE</h2>
                        <p class="cs_card_subtitle mb-0 cs_white_color">Single-origin specialty coffee with premium cupping scores and unique profiles from across Indonesia.</p>
                        <div class="cs_height_20 cs_height_lg_15"></div>
                        <a href="{{ url('/products/specialty-coffee') }}" class="cs_btn cs_style_2 cs_bold cs_white_color cs_product_btn">See Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cs_card cs_style_1 cs_heading_bg cs_bg_filed wow fadeInUp" data-src="{{ asset('assets/img/service_thumb_4.jpg') }}" data-wow-delay="0.3s">
                    <div class="cs_card_bottom">
                        <h2 class="cs_card_title cs_white_color cs_fs_32">GROUND COFFEE</h2>
                        <p class="cs_card_subtitle mb-0 cs_white_color">High-quality ground coffee available in various grind sizes, perfect for retail and food service.</p>
                        <div class="cs_height_20 cs_height_lg_15"></div>
                        <a href="{{ url('/products/ground-coffee') }}" class="cs_btn cs_style_2 cs_bold cs_white_color cs_product_btn">See Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cs_card cs_style_1 cs_heading_bg cs_bg_filed wow fadeInUp" data-src="{{ asset('assets/img/service_thumb_1.jpg') }}" data-wow-delay="0.4s">
                    <div class="cs_card_bottom">
                        <h2 class="cs_card_title cs_white_color cs_fs_32">DRIP BAG COFFEE</h2>
                        <p class="cs_card_subtitle mb-0 cs_white_color">Convenient and modern ready-to-brew coffee products for premium experience on-the-go.</p>
                        <div class="cs_height_20 cs_height_lg_15"></div>
                        <a href="{{ url('/products/drip-bag-coffee') }}" class="cs_btn cs_style_2 cs_bold cs_white_color cs_product_btn">See Details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cs_card cs_style_1 cs_heading_bg cs_bg_filed wow fadeInUp" data-src="{{ asset('assets/img/service_thumb_2.jpg') }}" data-wow-delay="0.5s">
                    <div class="cs_card_bottom">
                        <h2 class="cs_card_title cs_white_color cs_fs_32">PRIVATE LABEL</h2>
                        <p class="cs_card_subtitle mb-0 cs_white_color">Custom roasting and packaging solutions to help you build your own successful coffee brand.</p>
                        <div class="cs_height_20 cs_height_lg_15"></div>
                        <a href="{{ url('/products/private-label') }}" class="cs_btn cs_style_2 cs_bold cs_white_color cs_product_btn">See Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
</section>
<!-- End Products Section -->

<!-- Start CTA Section -->
<section class="cs_cta cs_style_1 cs_heading_bg cs_bg_filed" data-src="{{ asset('assets/img/cta_bg.jpg') }}">
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_cta_in text-center">
            <h2 class="cs_cta_title cs_fs_80 cs_white_color cs_mb_40 wow fadeInDown">READY TO SOURCE <br>PREMIUM COFFEE?</h2>
            <a href="{{ url('/#contact') }}" class="cs_btn cs_style_1 cs_bold cs_heading_color cs_white_bg wow fadeInUp">Request a Sample</a>
        </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
</section>
<!-- End CTA Section -->
@endsection
