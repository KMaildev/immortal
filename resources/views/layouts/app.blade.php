<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Immortal Friends Company Limited @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/gif" sizes="20x20">

    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">

    <link href='{{ asset('assets/css/boxicons.min.css') }}' rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <link rel="stylesheet" href="assets/css/select2.min.css">

</head>

<body>


    @include('layouts.shared.menu')

    @if (request()->route()->getName() == 'home')
        @include('layouts.shared.slider')
    @endif

    @yield('content')


    <div class="footer-area">
        <div class="footer-main-wrapper">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title text-center">
                                Career Advice
                            </h4>
                            <div class="footer-gallary-grid">
                                @foreach ($footer_carrer_advices as $key => $footer_carrer_advice)
                                    @if ($key == 6)
                                        @php
                                            break;
                                        @endphp
                                    @endif
                                    <div class="footer-gallary-item">
                                        <a href="{{ route('carrer_advice.show', $footer_carrer_advice->id) }}"
                                            data-fancybox="footer" data-caption="">
                                            <img src="{{ $footer_carrer_advice->photo }}" alt=""
                                                style="width: 100%; height: 100px; background-size: center; object-fit: cover;">
                                            <p style="font-size: 12px;">
                                                {{ $footer_carrer_advice->title_eng ?? '' }}
                                            </p>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="footer-about text-lg-start text-center">
                            <div class="footer-social-wrap">
                                <ul class="footer-social-links justify-content-lg-start justify-content-center">
                                    <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
                                    <li><a href="#"><i class='bx bxl-pinterest-alt'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Quick Link</h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="{{ route('about.index') }}">
                                        About Us
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('md.index') }}">
                                        MD'S Message
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('statement.index') }}">
                                        Vision / Mission / Values
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('team.index') }}">
                                        Meet Our Team
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('country.index') }}">
                                        Overseas Jobs
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('recruitment_services.index') }}">
                                        Our Recruitment Services
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('activities.index') }}">
                                        Activities
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('contact.index') }}">
                                        Contact Us
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">
                                Application
                            </h4>
                            <ul class="footer-links">
                                <li>
                                    <a href="{{ route('cv.index') }}">
                                        Submit CV
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('employer.index') }}">
                                        Employer Form
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-contact-wrapper">
                    <h5>Contact Us:</h5>
                    <ul class="footer-contact-list">
                        <li>
                            <i class="bi bi-telephone-x"></i>
                            <a href="tel:09123123123">
                                09123123123
                            </a>
                        </li>
                        <li>
                            <i class="bi bi-envelope-open"></i>
                            <a href="mailto:info@immortalfriendscompany">
                                info@immortalfriendscompany
                            </a>
                        </li>
                        <li>
                            <i class="bi bi-geo-alt"></i>
                            <a href="#">
                                Yangon, Myanmar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 col-md-12 order-lg-1 order-3 ">
                        <div class="copyright-link text-lg-start text-center">
                            <p>Copyright {{ now()->year }} Immortal Friends Company Limited</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/chain_fade.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    @yield('script')
</body>

</html>
