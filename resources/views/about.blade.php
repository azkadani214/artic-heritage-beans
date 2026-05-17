@extends('layouts.app')

@section('content')
<!-- Start Page Heading Section -->
<section class="cs_page_heading cs_style_1 cs_bg_filed cs_heading_bg" data-src="{{ asset('assets/img/about_heading_bg.jpg') }}">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">About</li>
        </ol>
        <h1 class="cs_page_title mb-0 cs_fs_80 wow fadeInUp">ABOUT US</h1>
    </div>
</section>
<!-- End Page Heading Section -->

<!-- Start About Section -->
<section>
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
        <div class="row cs_gap_x_40 cs_gap_y_24">
            <div class="col-lg-4">
                <div class="cs_section_heading cs_style_4">
                    <h2 class="cs_section_title cs_fs_32 cs_bold mb-0 wow fadeInDown">SHARING <br><span>INDONESIA'S COFFEE</span> <br>WITH THE WORLD</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <p class="cs_fs_20 mb-0">Artic Heritage Beans is a premium Indonesian coffee exporter focused on supplying high-quality coffee products to international markets worldwide. Founded with the vision of introducing Indonesia’s rich coffee heritage to the global industry.</p>
            </div>
            <div class="col-lg-4">
                <p class="cs_fs_20 mb-0">We collaborate directly with local farmers, cooperatives, and coffee communities to ensure exceptional quality in every bean we deliver. With experience in specialty coffee and international trading, we are committed to providing reliable export services.</p>
            </div>
        </div>
        <div class="cs_height_56 cs_height_lg_35"></div>
        <div class="row cs_gap_y_30">
            <div class="col-lg-12 wow fadeInUp">
                <div class="cs_cta cs_style_2 cs_bg_filed cs_radius_20" data-src="{{ asset('assets/img/cta_bg_3.jpg') }}">
                    <a href="{{ url('/products') }}" class="cs_btn cs_style_2 cs_bold cs_white_color">Explore Our Products</a>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_60 cs_height_lg_40"></div>
</section>
<!-- End About Section -->

<!-- Start Vision Mission Section -->
<div class="cs_heading_bg cs_white_color">
    <div class="cs_height_60 cs_height_lg_40"></div>
    <div class="container">
        <div class="cs_values_card cs_style_1">
            <div class="cs_values_card_left">
                <h3 class="cs_brackets_title cs_normal cs_fs_16 mb-0 wow fadeInDown">OUR VISION</h3>
            </div>
            <div class="cs_values_card_left">
                <div class="cs_values cs_mp_0 cs_white_color cs_fs_20">
                    <p>To become a leading global partner in Indonesian coffee exports, recognized for quality, integrity, and our contribution to the welfare of local coffee farming communities.</p>
                </div>
            </div>
        </div>
        <div class="cs_height_64 cs_height_lg_40"></div>
        <div class="cs_values_card cs_style_1">
            <div class="cs_values_card_left">
                <h3 class="cs_brackets_title cs_normal cs_fs_16 mb-0 wow fadeInDown">OUR MISSION</h3>
            </div>
            <div class="cs_values_card_left">
                <ul class="cs_values cs_mp_0 cs_white_color cs_fs_20 wow fadeInUp">
                    <li>
                        <span>Delivering premium coffee with international quality standards.</span>
                        <span class="cs_bold">01</span>
                    </li>
                    <li>
                        <span>Empowering local farmers through fair trade and direct collaboration.</span>
                        <span class="cs_bold">02</span>
                    </li>
                    <li>
                        <span>Providing transparent and efficient export services for global buyers.</span>
                        <span class="cs_bold">03</span>
                    </li>
                    <li>
                        <span>Promoting the unique heritage of Indonesian coffee origins.</span>
                        <span class="cs_bold">04</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
</div>
<!-- End Vision Mission Section -->
@endsection
