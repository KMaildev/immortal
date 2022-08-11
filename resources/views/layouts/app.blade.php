<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Immortal Friends Company @yield('title')</title>
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
            <div class="footer-vactor">
                <img src="{{ asset('assets/images/banner/footer-bg.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4">
                        <div class="footer-about text-lg-start text-center">
                            <p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus.
                                Suspendissendt molestie turpis nec lacinia vehicula.</p>
                            <div class="footer-social-wrap">
                                <h5>Follow Us On:</h5>
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
                    <div class="col-lg-2 col-md-4">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Quick Link</h4>
                            <ul class="footer-links">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="package.html">Tour Package</a></li>
                                <li><a href="destination.html">Destination</a></li>
                                <li><a href="guide.html">Tour Guide</a></li>
                                <li><a href="package-details.html">Booking Process</a></li>
                                <li><a href="blog.html">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title">Tour Type</h4>
                            <ul class="footer-links">
                                <li><a href="#">Wild & Adventure Tours</a></li>
                                <li><a href="#">Group Tour</a></li>
                                <li><a href="#">Seasonal Tours</a></li>
                                <li><a href="#">Relaxation Tours</a></li>
                                <li><a href="#">Family Friendly Tours</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="footer-widget">
                            <h4 class="footer-widget-title text-center">Gallery</h4>
                            <div class="footer-gallary-grid">
                                <div class="footer-gallary-item">
                                    <a href="{{ asset('assets/images/gallary/fg-1.png') }}" data-fancybox="footer"
                                        data-caption="Caption Here"><img
                                            src="{{ asset('assets/images/gallary/fg-1.png') }}" alt=""></a>
                                </div>
                                <div class="footer-gallary-item">
                                    <a href="{{ asset('assets/images/gallary/fg-2.png') }}" data-fancybox="footer"
                                        data-caption="Caption Here"><img
                                            src="{{ asset('assets/images/gallary/fg-2.png') }}" alt=""></a>
                                </div>
                                <div class="footer-gallary-item">
                                    <a href="{{ asset('assets/images/gallary/fg-3.png') }}" data-fancybox="footer"
                                        data-caption="Caption Here"><img
                                            src="{{ asset('assets/images/gallary/fg-3.png') }}" alt=""></a>
                                </div>
                                <div class="footer-gallary-item">
                                    <a href="{{ asset('assets/images/gallary/fg-4.png') }}" data-fancybox="footer"
                                        data-caption="Caption Here"><img
                                            src="{{ asset('assets/images/gallary/fg-4.png') }}" alt=""></a>
                                </div>
                                <div class="footer-gallary-item">
                                    <a href="{{ asset('assets/images/gallary/fg-5.png') }}" data-fancybox="footer"
                                        data-caption="Caption Here"><img
                                            src="{{ asset('assets/images/gallary/fg-5.png') }}" alt=""></a>
                                </div>
                                <div class="footer-gallary-item">
                                    <a href="{{ asset('assets/images/gallary/fg-6.png') }}" data-fancybox="footer"
                                        data-caption="Caption Here"><img
                                            src="{{ asset('assets/images/gallary/fg-6.png') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-contact-wrapper">
                    <h5>Contact Us:</h5>
                    <ul class="footer-contact-list">
                        <li><i class="bi bi-telephone-x"></i> <a href="tel:+17632275032">+1 763-227-5032</a></li>
                        <li><i class="bi bi-envelope-open"></i> <a
                                href="https://demo.egenslab.com/cdn-cgi/l/email-protection#01686f676e41756e74737971736e2f626e6c"><span
                                    class="__cf_email__"
                                    data-cfemail="cda4a3aba28db9a2b8bfb5bdbfa2e3aea2a0">[email&#160;protected]</span></a>
                        </li>
                        <li><i class="bi bi-geo-alt"></i> <a href="#">2752 Willison Street Eagan, United
                                State</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6 order-lg-1 order-3 ">
                        <div class="copyright-link text-lg-start text-center">
                            <p>Copyright 2021 TourXPro | Design By <a href="#"> Egens Lab</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4  order-lg-2 order-1">
                        <div class="footer-logo text-center">
                            <a href="index.html"><img src="{{ asset('assets/images/logo-w.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 order-lg-3 order-2">
                        <div class="policy-links">
                            <ul class="policy-list justify-content-lg-end justify-content-center">
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
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
