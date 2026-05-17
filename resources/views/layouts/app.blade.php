<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <!-- Site Title -->
    <title>@yield('title', 'LeafLife - Garden Landscape Design Service Website')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @stack('css')
</head>
<body>
    <!-- Start Preloader -->
    <div class="cs_preloader">
        <div class="cs_preloader_in">
            <span></span>
            <span></span>
        </div>
        <div class="cs_preloader_text">Loading...</div>
    </div>
    <!-- End Preloader -->

    @include('partials.header')

    <div class="cs_header_form_wrap cs_center">
        <div class="cs_header_form_overlay"></div>
        <form action="#" class="cs_header_form">
            <input type="text" class="cs_header_form_input" placeholder="Search...">
            <button type="button" class="cs_header_form_btn cs_center">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M19.7556 18.5774L14.0682 12.89C15.1699 11.5292 15.8332 9.8 15.8332 7.91669C15.8332 3.55174 12.2815 9.15527e-05 7.91656 9.15527e-05C3.55161 9.15527e-05 0 3.5517 0 7.91666C0 12.2816 3.55165 15.8333 7.9166 15.8333C9.7999 15.8333 11.5291 15.1699 12.8899 14.0683L18.5773 19.7557C18.7398 19.9182 18.9531 19.9999 19.1665 19.9999C19.3798 19.9999 19.5932 19.9182 19.7557 19.7557C20.0815 19.4299 20.0815 18.9032 19.7556 18.5774ZM7.9166 14.1666C4.46996 14.1666 1.66666 11.3633 1.66666 7.91666C1.66666 4.47001 4.46996 1.66672 7.9166 1.66672C11.3632 1.66672 14.1665 4.47001 14.1665 7.91666C14.1665 11.3633 11.3632 14.1666 7.9166 14.1666Z" fill="currentColor"/>
                    </g>
                    <defs>
                        <clipPath>
                            <rect width="20" height="20" fill="currentColor"/>
                        </clipPath>
                    </defs>
                </svg>                    
            </button>
        </form>
    </div>

    @yield('content')

    @include('partials.footer')

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/6281234567890" class="cs_whatsapp_btn" target="_blank">
        <div class="cs_whatsapp_btn_in">
            <span class="cs_whatsapp_icon"><i class="fa-brands fa-whatsapp"></i></span>
            <span class="cs_whatsapp_text">Lets Talk</span>
        </div>
    </a>

    <style>
        .cs_whatsapp_btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 999;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .cs_whatsapp_btn_in {
            display: flex;
            align-items: center;
            background: #25D366;
            color: #fff;
            padding: 12px 20px;
            border-radius: 50px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
        }
        .cs_whatsapp_icon {
            font-size: 24px;
            margin-right: 10px;
            display: flex;
            align-items: center;
        }
        .cs_whatsapp_text {
            font-weight: 700;
            font-size: 16px;
            white-space: nowrap;
        }
        .cs_whatsapp_btn:hover .cs_whatsapp_btn_in {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0,0,0,0.2);
            background: #128C7E;
        }
        @media screen and (max-width: 991px) {
            .cs_whatsapp_btn {
                bottom: 20px;
                right: 20px;
            }
            .cs_whatsapp_text {
                display: none;
            }
            .cs_whatsapp_btn_in {
                padding: 15px;
                border-radius: 50%;
            }
            .cs_whatsapp_icon {
                margin-right: 0;
            }
        }
    </style>

    <!-- Script -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkg.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>
