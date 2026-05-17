@extends('layouts.app')

@section('content')
<!-- Start Page Heading Section -->
<section class="cs_page_heading cs_style_1 cs_bg_filed cs_heading_bg" data-src="{{ asset('assets/img/hero_bg_4.jpg') }}">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>
        <h1 class="cs_page_title mb-0 cs_fs_80 wow fadeInUp">CONTACT US</h1>
    </div>
</section>
<!-- End Page Heading Section -->

<!-- Start Contact Section -->
<section>
    <div class="cs_height_100 cs_height_lg_70"></div>
    <div class="container">
        <div class="row cs_gap_y_50">
            <div class="col-lg-5">
                <div class="cs_section_heading cs_style_1">
                    <h3 class="cs_brackets_title cs_normal cs_fs_16 mb-0 wow fadeInDown">GET IN TOUCH</h3>
                    <div class="cs_height_12 cs_height_lg_10"></div>
                    <h2 class="cs_section_title cs_fs_48 cs_bold mb-0 wow fadeInDown">READY TO <span>COLLABORATE?</span></h2>
                    <div class="cs_height_24 cs_height_lg_15"></div>
                    <p class="mb-0 cs_fs_18 wow fadeInUp" style="line-height: 1.6em;">Have questions about our coffee origins, export processes, or want to request a sample? Our dedicated export team is ready to assist your global business needs.</p>
                </div>
                <div class="cs_height_40 cs_height_lg_30"></div>
                <div class="row cs_gap_y_30">
                    <div class="col-sm-12">
                        <div class="cs_iconbox cs_style_1 wow fadeInLeft d-flex align-items-center">
                            <div class="cs_iconbox_icon cs_center me-3" style="background: #541A1A; color: #fff; width: 50px; height: 50px; border-radius: 50%; flex-shrink: 0;">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h4 class="cs_fs_20 cs_bold mb-1">Office Location</h4>
                                <p class="mb-0 cs_fs_16">Jakarta, Indonesia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cs_iconbox cs_style_1 wow fadeInLeft d-flex align-items-center" data-wow-delay="0.1s">
                            <div class="cs_iconbox_icon cs_center me-3" style="background: #541A1A; color: #fff; width: 50px; height: 50px; border-radius: 50%; flex-shrink: 0;">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="cs_fs_20 cs_bold mb-1">Email Us</h4>
                                <p class="mb-0 cs_fs_16">info@articheritagebeans.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cs_iconbox cs_style_1 wow fadeInLeft d-flex align-items-center" data-wow-delay="0.2s">
                            <div class="cs_iconbox_icon cs_center me-3" style="background: #541A1A; color: #fff; width: 50px; height: 50px; border-radius: 50%; flex-shrink: 0;">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h4 class="cs_fs_20 cs_bold mb-1">Call Support</h4>
                                <p class="mb-0 cs_fs_16">+62 812 3456 7890</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="cs_contact_form_wrap cs_radius_20" style="background: #F1E2D1; padding: 40px; border: 1px solid #DCC3AA;">
                    <form action="#" class="cs_contact_form row cs_gap_y_24">
                        <div class="col-md-6">
                            <label class="cs_fs_16 cs_bold cs_mb_8">Full Name</label>
                            <input type="text" class="cs_form_field" placeholder="Enter your name" required style="background: #fff; border: 1px solid #DCC3AA; border-radius: 10px; padding: 15px 20px;">
                        </div>
                        <div class="col-md-6">
                            <label class="cs_fs_16 cs_bold cs_mb_8">Email Address</label>
                            <input type="email" class="cs_form_field" placeholder="Enter your email" required style="background: #fff; border: 1px solid #DCC3AA; border-radius: 10px; padding: 15px 20px;">
                        </div>
                        <div class="col-md-6">
                            <label class="cs_fs_16 cs_bold cs_mb_8">Subject</label>
                            <input type="text" class="cs_form_field" placeholder="How can we help?" required style="background: #fff; border: 1px solid #DCC3AA; border-radius: 10px; padding: 15px 20px;">
                        </div>
                        <div class="col-md-6">
                            <label class="cs_fs_16 cs_bold cs_mb_8">Phone Number</label>
                            <input type="text" class="cs_form_field" placeholder="Enter phone number" required style="background: #fff; border: 1px solid #DCC3AA; border-radius: 10px; padding: 15px 20px;">
                        </div>
                        <div class="col-md-12">
                            <label class="cs_fs_16 cs_bold cs_mb_8">Your Message</label>
                            <textarea class="cs_form_field" placeholder="Write your message here..." rows="4" required style="background: #fff; border: 1px solid #DCC3AA; border-radius: 10px; padding: 15px 20px;"></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="cs_btn cs_style_1 cs_bold cs_heading_bg cs_white_color w-100" style="border-radius: 10px; padding: 18px;">Send Message Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
</section>
<!-- End Contact Section -->

<!-- Start Map Section -->
<div class="cs_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.2417203362!2d106.7594776!3d-6.229728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e3fa73%3A0x66c30472400e695a!2sJakarta!5e0!3m2!1sen!2sid!4v1715849823456!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!-- End Map Section -->
@endsection
