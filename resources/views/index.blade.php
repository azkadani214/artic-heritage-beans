@extends('layouts.app')

@section('content')
<!-- Start Hero Section -->
<section class="cs_hero cs_style_1 cs_heading_bg cs_white_color">
    <div class="container">
        <div class="cs_hero_in">
            <div class="cs_hero_text">
                <h1 class="cs_hero_title cs_fs_100 cs_normal cs_mb_12 cs_white_color cs_gradient_color_1 wow fadeInUp">Exporting Indonesia’s <b>Finest Coffee Heritage</b> to the World</h1>
                <p class="cs_hero_subtitle cs_fs_20 cs_mb_32 cs_opacity_7_5">Artic Heritage Beans is an Indonesian coffee export company dedicated to delivering premium coffee beans from the finest regions of Indonesia to the global market. We provide specialty coffee, green beans, roasted coffee, and private label solutions.</p>
                <div class="cs_hero_btns">
                    <a href="{{ url('/products') }}" class="cs_btn cs_style_1 cs_bold cs_heading_color cs_white_bg wow fadeInLeft">Explore Coffee</a>
                    <a href="#contact" class="cs_btn cs_style_2 cs_bold cs_white_color wow fadeInRight">Request Sample</a>
                </div>
            </div>
            <div class="cs_hero_funfact_wrap wow fadeInRight">
                <div class="cs_hero_funfact">
                    <h3 class="cs_fs_24 cs_bold cs_white_color mb-0">100%</h3>
                    <p class="cs_fs_20 cs_white_color cs_opacity_7_5 cs_mb_16">Indonesian Origin</p>
                    <div class="cs_circle_group">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="cs_hero_box wow fadeInUp">
                <div class="cs_hero_box_icon cs_mb_29">
                    <svg width="22" height="30" viewBox="0 0 22 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 0C4.93447 0 0 4.97132 0 11.0821C0 13.0939 0.895529 15.2575 0.933059 15.3488C1.22229 16.0404 1.793 17.1147 2.20453 17.7445L9.74665 29.2575C10.0553 29.7295 10.5121 30 11 30C11.4879 30 11.9447 29.7295 12.2534 29.2581L19.7961 17.7445C20.2083 17.1147 20.7784 16.0404 21.0676 15.3488C21.1051 15.2581 22 13.0945 22 11.0821C22 4.97132 17.0655 0 11 0ZM19.8744 14.8429C19.6162 15.4628 19.085 16.4622 18.7155 17.0267L11.1728 28.5404C11.0239 28.7679 10.9767 28.7679 10.8279 28.5404L3.28512 17.0267C2.91565 16.4622 2.38441 15.4622 2.12624 14.8422C2.11523 14.8155 1.29412 12.824 1.29412 11.0821C1.29412 5.69035 5.64818 1.30378 11 1.30378C16.3518 1.30378 20.7059 5.69035 20.7059 11.0821C20.7059 12.8266 19.8828 14.8233 19.8744 14.8429Z" fill="currentColor"/>
                        <path d="M11.0003 5.21578C7.78893 5.21578 5.17676 7.84811 5.17676 11.0828C5.17676 14.3175 7.78893 16.9498 11.0003 16.9498C14.2116 16.9498 16.8238 14.3175 16.8238 11.0828C16.8238 7.84811 14.2116 5.21578 11.0003 5.21578ZM11.0003 15.646C8.50329 15.646 6.47088 13.5991 6.47088 11.0828C6.47088 8.56649 8.50329 6.51956 11.0003 6.51956C13.4973 6.51956 15.5297 8.56649 15.5297 11.0828C15.5297 13.5991 13.4973 15.646 11.0003 15.646Z" fill="currentColor"/>
                    </svg>                
                </div>
                <h3 class="cs_hero_box_title cs_fs_24 cs_mb_12 cs_white_color">About Us</h3>
                <p class="cs_hero_box_subtitle mb-0 cs_opacity_7_5">Artic Heritage Beans is a premium Indonesian coffee exporter focused on high-quality products.</p>
                <a href="{{ url('/about') }}" class="cs_arrow_btn cs_hero_box_btn cs_center cs_heading_bg cs_white_color">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.3846 0H0.615385C0.275692 0 0 0.275692 0 0.615385C0 0.955077 0.275692 1.23077 0.615385 1.23077H13.8988L0.180308 14.9495C-0.06 15.1898 -0.06 15.5794 0.180308 15.8197C0.300615 15.94 0.457846 16 0.615385 16C0.772923 16 0.930461 15.94 1.05046 15.8197L14.7692 2.10092V15.3846C14.7692 15.7243 15.0449 16 15.3846 16C15.7243 16 16 15.7243 16 15.3846V0.615385C16 0.275692 15.7243 0 15.3846 0Z" fill="currentColor"/>
                    </svg>                
                </a>
            </div>
        </div>
    </div>
    <div class="cs_hero_bg">
        <div class="cs_slider cs_style_1">
            <div class="cs_slider_container" data-autoplay="1" data-loop="1" data-speed="800" data-center="0" data-variable-width="0" data-slides-per-view="1">
                <div class="cs_slider_wrapper">
                    <div class="cs_slide">
                        <div class="cs_hero_bg_in cs_bg_filed" data-src="{{ asset('assets/img/hero-img.png') }}"></div>
                    </div>
                    <div class="cs_slide">
                        <div class="cs_hero_bg_in cs_bg_filed" data-src="{{ asset('assets/img/hero_bg_4.jpg') }}"></div>
                    </div>
                    <div class="cs_slide">
                        <div class="cs_hero_bg_in cs_bg_filed" data-src="{{ asset('assets/img/hero_bg_2.jpg') }}"></div>
                    </div>
                </div>
            </div>
            <div class="cs_pagination_1_wrap">
                <div class="container">
                    <div class="cs_pagination_1_in">
                        <div class="cs_slider_number cs_style_1 cs_white_color cs_bold"></div>
                        <div class="cs_pagination cs_style_1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<!-- Start Values Section -->
<div id="about" class="cs_height_40 cs_height_lg_30"></div>
<div class="container">
    <div class="cs_values_card cs_style_1">
        <div class="cs_values_card_left">
            <h3 class="cs_brackets_title cs_normal cs_fs_16 mb-0 wow fadeInDown">ABOUT US</h3>
        </div>
        <div class="cs_values_card_left">
            <ul class="cs_values cs_mp_0 cs_heading_color cs_fs_20 wow fadeInUp">
                <li>
                    <span>Artic Heritage Beans is a premium Indonesian coffee exporter focused on quality products.</span>
                    <span class="cs_bold">01</span>
                </li>
                <li>
                    <span>We collaborate directly with local farmers to ensure exceptional quality in every bean.</span>
                    <span class="cs_bold">02</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Values Section -->

<!-- Start Feature Section -->
<section>

    <div class="container">
        <div class="cs_section_heading cs_style_1">
            <h2 class="cs_section_title cs_fs_80 mb-0 wow fadeInDown">WHY CHOOSE <span>ARTIC HERITAGE</span> BEANS</h2>
            <div class="cs_section_right">
                <a href="#contact" class="cs_btn cs_style_1 cs_bold cs_heading_bg cs_white_color w-100 wow fadeInRight">Get Started</a>
            </div>
        </div>
        <div class="cs_height_64 cs_height_lg_50"></div>
        <div class="row align-items-end cs_gap_y_50">
            <div class="col-lg-4">
                <div class="cs_img_box cs_style_1 wow fadeInLeft">
                    <img src="{{ asset('assets/img/about-coffe-drink.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row cs_gap_y_64">
                    <div class="col-sm-6">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon cs_center cs_mb_24">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <h3 class="cs_fs_24 cs_mb_12">Direct From Farmers</h3>
                            <p class="mb-0 cs_fs_20">We work directly with local farmers and cooperatives across Indonesia to ensure quality and fairness.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon cs_center cs_mb_24">
                                <i class="fa-solid fa-award"></i>
                            </div>
                            <h3 class="cs_fs_24 cs_mb_12">International Standards</h3>
                            <p class="mb-0 cs_fs_20">Every product goes through professional grading, cupping, and quality control processes.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon cs_center cs_mb_24">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <h3 class="cs_fs_24 cs_mb_12">Sustainable Sourcing</h3>
                            <p class="mb-0 cs_fs_20">We support sustainable farming and ethical sourcing practices for a healthy ecosystem.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cs_iconbox cs_style_1">
                            <div class="cs_iconbox_icon cs_center cs_mb_24">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                            <h3 class="cs_fs_24 cs_mb_12">Custom Solutions</h3>
                            <p class="mb-0 cs_fs_20">We provide private label, custom roasting, and packaging solutions tailored to your business needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
</section>
<!-- End Feature Section -->

<!-- Start Products Section -->
<section id="products">
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_3">
            <h3 class="cs_brackets_title cs_normal cs_fs_16 mb-0 wow fadeInUp">OUR PRODUCTS</h3>
            <div class="cs_section_right">
                <a href="{{ url('/products') }}" class="cs_btn cs_style_2 cs_bold cs_heading_color">View All Products</a>
            </div>
        </div>
        <div class="cs_height_64 cs_height_lg_50"></div>
        <div class="cs_card_1_group">
            <div class="cs_card cs_style_1 cs_hover_active cs_heading_bg cs_bg_filed wow fadeInLeft" data-src="{{ asset('assets/img/green-beans.png') }}">
                <div class="cs_card_bottom">
                    <h2 class="cs_card_title cs_white_color cs_fs_32">GREEN BEANS</h2>
                    <p class="cs_card_subtitle mb-0 cs_white_color">Premium raw coffee beans (Arabica, Robusta, Specialty) for international roasteries.</p>
                    <div class="cs_height_20 cs_height_lg_15"></div>
                    <a href="{{ url('/products/green-beans') }}" class="cs_btn cs_style_2 cs_bold cs_white_color cs_product_btn">See Details</a>
                </div>
            </div>
            <div class="cs_card cs_style_1 cs_hover_active cs_heading_bg cs_bg_filed" data-src="{{ asset('assets/img/roasted-coffee.png') }}">
                <div class="cs_card_bottom">
                    <h2 class="cs_card_title cs_white_color cs_fs_32">ROASTED COFFEE</h2>
                    <p class="cs_card_subtitle mb-0 cs_white_color">Freshly roasted beans with various profiles: Light, Medium, and Dark Roast.</p>
                    <div class="cs_height_20 cs_height_lg_15"></div>
                    <a href="{{ url('/products/roasted-coffee') }}" class="cs_btn cs_style_2 cs_bold cs_white_color cs_product_btn">See Details</a>
                </div>
            </div>
            <div class="cs_card cs_style_1 cs_hover_active cs_heading_bg cs_bg_filed" data-src="{{ asset('assets/img/specialty-coffee.png') }}">
                <div class="cs_card_bottom">
                    <h2 class="cs_card_title cs_white_color cs_fs_32">SPECIALTY COFFEE</h2>
                    <p class="cs_card_subtitle mb-0 cs_white_color">Single-origin specialty coffee with premium cupping scores and unique profiles.</p>
                    <div class="cs_height_20 cs_height_lg_15"></div>
                    <a href="{{ url('/products/specialty-coffee') }}" class="cs_btn cs_style_2 cs_bold cs_white_color cs_product_btn">See Details</a>
                </div>
            </div>
            <div class="cs_card cs_style_1 cs_hover_active cs_heading_bg cs_bg_filed wow fadeInRight" data-src="{{ asset('assets/img/drip-bag-coffee.png') }}">
                <div class="cs_card_bottom">
                    <h2 class="cs_card_title cs_white_color cs_fs_32">DRIP BAG COFFEE</h2>
                    <p class="cs_card_subtitle mb-0 cs_white_color">Modern ready-to-brew coffee products for convenient premium coffee experience.</p>
                    <div class="cs_height_20 cs_height_lg_15"></div>
                    <a href="{{ url('/products/drip-bag-coffee') }}" class="cs_btn cs_style_2 cs_bold cs_white_color cs_product_btn">See Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Products Section -->

<!-- Working Process moved below -->

<!-- Start Services Section -->
<section id="services">
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_3">
            <h3 class="cs_brackets_title cs_normal cs_fs_16 mb-0 wow fadeInUp">EXPORT SERVICES</h3>
            <div class="cs_section_right">
                <a href="#contact" class="cs_btn cs_style_2 cs_bold cs_heading_color">Request a Quote</a>
            </div>
        </div>
        <div class="cs_height_64 cs_height_lg_50"></div>
        <div class="cs_card_1_group">
            <div class="cs_card cs_style_1 cs_hover_active cs_heading_bg cs_bg_filed active wow fadeInLeft" data-src="{{ asset('assets/img/coffee-sourcing.png') }}">
                <div class="cs_card_top">
                    <div class="cs_card_tags">
                        <a href="#" class="cs_card_tag">Sourcing</a>
                        <a href="#" class="cs_card_tag">Quality</a>
                    </div>
                </div>
                <div class="cs_card_bottom">
                    <h2 class="cs_card_title cs_white_color cs_fs_32">COFFEE SOURCING</h2>
                    <p class="cs_card_subtitle mb-0 cs_white_color">Helping international buyers source premium Indonesian coffee according to market needs.</p>
                </div>
            </div>
            <div class="cs_card cs_style_1 cs_hover_active cs_heading_bg cs_bg_filed" data-src="{{ asset('assets/img/private-label.png') }}">
                <div class="cs_card_top">
                    <div class="cs_card_tags">
                        <a href="#" class="cs_card_tag">Private Label</a>
                        <a href="#" class="cs_card_tag">Branding</a>
                    </div>
                </div>
                <div class="cs_card_bottom">
                    <h2 class="cs_card_title cs_white_color cs_fs_32">PRIVATE LABEL</h2>
                    <p class="cs_card_subtitle mb-0 cs_white_color">Develop your own coffee brand with our professional production and packaging support.</p>
                </div>
            </div>
            <div class="cs_card cs_style_1 cs_hover_active cs_heading_bg cs_bg_filed" data-src="{{ asset('assets/img/quality-control.png') }}">
                <div class="cs_card_top">
                    <div class="cs_card_tags">
                        <a href="#" class="cs_card_tag">QC</a>
                        <a href="#" class="cs_card_tag">Grading</a>
                    </div>
                </div>
                <div class="cs_card_bottom">
                    <h2 class="cs_card_title cs_white_color cs_fs_32">QUALITY CONTROL</h2>
                    <p class="cs_card_subtitle mb-0 cs_white_color">Every coffee batch undergoes professional sorting, grading, and cupping by experts.</p>
                </div>
            </div>
            <div class="cs_card cs_style_1 cs_hover_active cs_heading_bg cs_bg_filed wow fadeInRight" data-src="{{ asset('assets/img/logistic-services.png') }}">
                <div class="cs_card_top">
                    <div class="cs_card_tags">
                        <a href="#" class="cs_card_tag">Logistics</a>
                        <a href="#" class="cs_card_tag">Shipping</a>
                    </div>
                </div>
                <div class="cs_card_bottom">
                    <h2 class="cs_card_title cs_white_color cs_fs_32">EXPORT LOGISTICS</h2>
                    <p class="cs_card_subtitle mb-0 cs_white_color">Handling export permits and reliable worldwide coffee shipment and logistics services.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
</section>
<!-- End Services Section -->

<!-- Start Testimonial Section -->
<section class="cs_gray_bg">
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
        <div class="text-center">
            <h3 class="cs_brackets_title cs_normal cs_fs_16 mb-0 wow fadeInDown">TESTIMONIALS</h3>
        </div>
        <div class="cs_height_64 cs_height_lg_50"></div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cs_slider cs_style_1">
                    <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="800" data-center="0" data-variable-width="0" data-slides-per-view="1">
                        <div class="cs_slider_wrapper">
                            <div class="cs_slide">
                                <div class="cs_testimonial cs_style_1 text-center wow fadeInUp">
                                    <blockquote class="cs_testimonial_blockquote cs_heading_color cs_fs_32 cs_bold cs_mb_48">“Consistent coffee quality and always on-time delivery.”</blockquote>
                                    <div class="cs_testimonial_meta">
                                        <h4 class="cs_testimonial_avatar cs_bold cs_fs_16 cs_mb_2">COFFEE ROASTERY</h4>
                                        <p class="cs_testimonial_avatar_designation mb-0">Germany</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cs_slide">
                                <div class="cs_testimonial cs_style_1 text-center">
                                    <blockquote class="cs_testimonial_blockquote cs_heading_color cs_fs_32 cs_bold cs_mb_48">“Excellent communication and premium Indonesian coffee beans.”</blockquote>
                                    <div class="cs_testimonial_meta">
                                        <h4 class="cs_testimonial_avatar cs_bold cs_fs_16 cs_mb_2">SPECIALTY COFFEE BUYER</h4>
                                        <p class="cs_testimonial_avatar_designation mb-0">Japan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cs_slide">
                                <div class="cs_testimonial cs_style_1 text-center">
                                    <blockquote class="cs_testimonial_blockquote cs_heading_color cs_fs_32 cs_bold cs_mb_48">“Reliable supplier with professional export handling.”</blockquote>
                                    <div class="cs_testimonial_meta">
                                        <h4 class="cs_testimonial_avatar cs_bold cs_fs_16 cs_mb_2">DISTRIBUTOR</h4>
                                        <p class="cs_testimonial_avatar_designation mb-0">Australia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cs_slider_arrows cs_style_2">
                        <div class="cs_left_arrow cs_heading_color">
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.499953 9.00005C0.499953 8.80823 0.573265 8.61623 0.719703 8.4698L8.2197 0.969797C8.51277 0.676734 8.98733 0.676734 9.2802 0.969797C9.57308 1.26286 9.57327 1.73742 9.2802 2.0303L2.31045 9.00005L9.2802 15.9698C9.57327 16.2629 9.57327 16.7374 9.2802 17.0303C8.98714 17.3232 8.51258 17.3234 8.2197 17.0303L0.719703 9.5303C0.573265 9.38386 0.499953 9.19186 0.499953 9.00005Z" fill="currentColor"/>
                            </svg>                                   
                        </div>
                        <div class="cs_right_arrow cs_heading_color">
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.50005 8.99995C9.50005 9.19177 9.42673 9.38377 9.2803 9.5302L1.7803 17.0302C1.48723 17.3233 1.01267 17.3233 0.719797 17.0302C0.426922 16.7371 0.426734 16.2626 0.719797 15.9697L7.68955 8.99995L0.719797 2.0302C0.426734 1.73714 0.426734 1.26258 0.719797 0.969702C1.01286 0.676826 1.48742 0.67664 1.7803 0.969702L9.2803 8.4697C9.42673 8.61614 9.50005 8.80814 9.50005 8.99995Z" fill="currentColor"/>
                            </svg>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
</section>
<!-- End Testimonial Section -->

<!-- Start Works Section -->
<section id="origins">
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_2 cs_color_1">
            <h2 class="cs_section_title cs_fs_80 mb-0 wow fadeInDown">COFFEE <span>ORIGINS</span> FROM ACROSS THE ARCHIPELAGO</h2>
            <div class="cs_section_right">
                <h3 class="cs_brackets_title cs_normal cs_fs_16 mb-0">ORIGINS</h3>
            </div>
        </div>
        <div class="cs_height_64 cs_height_lg_50"></div>
        <div class="cs_full_width_slider_section">
            <div class="cs_slider cs_style_1 cs_slider_gap_24">
                <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="800" data-center="0" data-variable-width="1" data-slides-per-view="1">
                    <div class="cs_slider_wrapper">
                        <div class="cs_slide">
                            <div class="cs_card cs_style_4">
                                <div class="cs_card_thumb cs_bg_filed cs_mb_40" data-src="{{ asset('assets/img/aceh-gayo.png') }}"></div>
                                <div class="cs_card_info">
                                    <ul class="cs_card_info_list cs_mp_0">
                                        <li>
                                            <p class="mb-0">NAME</p>
                                            <h3 class="mb-0 cs_fs_20 cs_bold">GAYO – ACEH</h3>
                                        </li>
                                        <li>
                                            <p class="mb-0">CHARACTER</p>
                                            <h3 class="mb-0 cs_fs_20 cs_bold">HERBAL, CHOCOLATE</h3>
                                        </li>
                                    </ul>
                                    <div class="cs_card_text">Herbal notes, dark chocolate flavor, full body, and low acidity.</div>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_card cs_style_4">
                                <div class="cs_card_thumb cs_bg_filed cs_mb_40" data-src="{{ asset('assets/img/mandailing-sumatra.png') }}"></div>
                                <div class="cs_card_info">
                                    <ul class="cs_card_info_list cs_mp_0">
                                        <li>
                                            <p class="mb-0">NAME</p>
                                            <h3 class="mb-0 cs_fs_20 cs_bold">MANDAILING – SUMATRA</h3>
                                        </li>
                                        <li>
                                            <p class="mb-0">CHARACTER</p>
                                            <h3 class="mb-0 cs_fs_20 cs_bold">EARTHY, SPICY</h3>
                                        </li>
                                    </ul>
                                    <div class="cs_card_text">Earthy, spicy, tobacco-like character with long aftertaste.</div>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_card cs_style_4">
                                <div class="cs_card_thumb cs_bg_filed cs_mb_40" data-src="{{ asset('assets/img/ijen-jawa.png') }}"></div>
                                <div class="cs_card_info">
                                    <ul class="cs_card_info_list cs_mp_0">
                                        <li>
                                            <p class="mb-0">NAME</p>
                                            <h3 class="mb-0 cs_fs_20 cs_bold">JAVA IJEN</h3>
                                        </li>
                                        <li>
                                            <p class="mb-0">CHARACTER</p>
                                            <h3 class="mb-0 cs_fs_20 cs_bold">SMOOTH, CARAMEL</h3>
                                        </li>
                                    </ul>
                                    <div class="cs_card_text">Smooth body with nutty, caramel, and clean finish notes.</div>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_card cs_style_4">
                                <div class="cs_card_thumb cs_bg_filed cs_mb_40" data-src="{{ asset('assets/img/toraja-sulawesi.png') }}"></div>
                                <div class="cs_card_info">
                                    <ul class="cs_card_info_list cs_mp_0">
                                        <li>
                                            <p class="mb-0">NAME</p>
                                            <h3 class="mb-0 cs_fs_20 cs_bold">TORAJA – SULAWESI</h3>
                                        </li>
                                        <li>
                                            <p class="mb-0">CHARACTER</p>
                                            <h3 class="mb-0 cs_fs_20 cs_bold">BOLD, CHOCOLATE</h3>
                                        </li>
                                    </ul>
                                    <div class="cs_card_text">Bold body, earthy profile, and dark chocolate flavor.</div>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_card cs_style_4">
                                <div class="cs_card_thumb cs_bg_filed cs_mb_40" data-src="{{ asset('assets/img/kintamani-bali.png') }}"></div>
                                <div class="cs_card_info">
                                    <ul class="cs_card_info_list cs_mp_0">
                                        <li>
                                            <p class="mb-0">NAME</p>
                                            <h3 class="mb-0 cs_fs_20 cs_bold">KINTAMANI – BALI</h3>
                                        </li>
                                        <li>
                                            <p class="mb-0">CHARACTER</p>
                                            <h3 class="mb-0 cs_fs_20 cs_bold">FRUITY, CITRUS</h3>
                                        </li>
                                    </ul>
                                    <div class="cs_card_text">Fruity, citrus, and floral notes with bright acidity.</div>
                                </div>
                            </div>
                        </div>
                        <div class="cs_slide">
                            <div class="cs_card cs_style_4">
                                <div class="cs_card_thumb cs_bg_filed cs_mb_40" data-src="{{ asset('assets/img/bajawa-flores.png') }}"></div>
                                <div class="cs_card_info">
                                    <ul class="cs_card_info_list cs_mp_0">
                                        <li>
                                            <p class="mb-0">NAME</p>
                                            <h3 class="mb-0 cs_fs_20 cs_bold">FLORES BAJAWA</h3>
                                        </li>
                                        <li>
                                            <p class="mb-0">CHARACTER</p>
                                            <h3 class="mb-0 cs_fs_20 cs_bold">SWEET, CHOCOLATE</h3>
                                        </li>
                                    </ul>
                                    <div class="cs_card_text">Sweet chocolate, brown sugar sweetness, and creamy body.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_slider_arrows cs_style_3 cs_hide_lg">
                    <div class="cs_right_arrow cs_heading_color cs_fs_20 cs_center">
                        <span class="cs_center">NEXT</span>                  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_140 cs_height_lg_80"></div>
</section>
<!-- Start Working Process -->
<section class="cs_heading_bg">
    <div class="cs_height_140 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_2">
            <h2 class="cs_section_title cs_white_color cs_fs_80 mb-0 wow fadeInUp">SIMPLE STEPS FOR OUR <span>EXPORT</span> PROCESS</h2>
            <div class="cs_section_right">
                <h3 class="cs_brackets_title cs_normal cs_fs_16 mb-0 cs_white_color">HOW IT WORKS</h3>
            </div>
        </div>
        <div class="cs_height_64 cs_height_lg_50"></div>
        <div class="cs_card_3_wrap">
            <div class="cs_card cs_style_3">
                <div class="cs_card_in">
                    <h3 class="cs_fs_24 cs_bold cs_white_color cs_mb_12">01 | Inquiry & Consultation</h3>
                    <p class="mb-0 cs_white_color cs_opacity_5 cs_fs_20">Discuss product specifications, coffee types, quantity, and destination country with our team.</p>
                </div>
            </div>
            <div class="cs_card cs_style_3">
                <div class="cs_card_in">
                    <h3 class="cs_fs_24 cs_bold cs_white_color cs_mb_12">02 | Sample & Cupping</h3>
                    <p class="mb-0 cs_white_color cs_opacity_5 cs_fs_20">We provide coffee samples for buyer evaluation and quality assessment before bulk production.</p>
                </div>
            </div>
            <div class="cs_card cs_style_3">
                <div class="cs_card_in">
                    <h3 class="cs_fs_24 cs_bold cs_white_color cs_mb_12">03 | Production & QC</h3>
                    <p class="mb-0 cs_white_color cs_opacity_5 cs_fs_20">Production, grading, and quality control processes based on international export standards.</p>
                </div>
            </div>
            <div class="cs_card cs_style_3">
                <div class="cs_card_in">
                    <h3 class="cs_fs_24 cs_bold cs_white_color cs_mb_12">04 | Packaging & Shipment</h3>
                    <p class="mb-0 cs_white_color cs_opacity_5 cs_fs_20">Professional packaging and secure international shipping process to your destination.</p>
                </div>
            </div>
            <div class="cs_section_logo"><img src="{{ asset('assets/img/logo-artic-beans.png') }}" alt=""></div>
        </div>
    </div>
    <div class="cs_height_140 cs_height_lg_80"></div>
</section>
<!-- End Working Process -->

<!-- Start CTA Section -->
<section id="sustainability" class="cs_cta cs_style_1 cs_heading_bg cs_bg_filed" data-src="{{ asset('assets/img/cta-bg-2.png') }}">
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
        <div class="cs_cta_in">
            <h2 class="cs_cta_title cs_fs_80 cs_white_color cs_mb_40 wow fadeInDown">SUSTAINABLE COFFEE <br>FOR THE FUTURE</h2>
            <p class="cs_white_color cs_fs_20 cs_mb_40 cs_opacity_7_5">Artic Heritage Beans believes that exceptional coffee begins with healthy ecosystems and fair partnerships. We support: Sustainable farming, Fair trade, Farmer education, and Eco-friendly processing.</p>
            <a href="#contact" class="cs_btn cs_style_1 cs_bold cs_heading_color cs_white_bg wow fadeInUp">Our Commitment</a>
        </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
</section>
<!-- End CTA Section -->
@endsection
