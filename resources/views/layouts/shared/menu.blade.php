<div class="topbar-area topbar-style-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 align-items-center d-xl-flex d-none">
                <div class="topbar-contact-left">
                    <ul class="contact-list">
                        <li>
                            <a href="tel:091231231">
                                <i class="bi bi-telephone-fill"></i>
                                091231231
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@immortalfriendscompany.com">
                                <i class="bi bi-envelope-fill"></i>
                                info@immortalfriendscompany.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-6 text-xl-center text-md-start text-center">
                <div class="topbar-ad">
                    <a href="{{ route('home') }}">Immortal Friends Company Limited</a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 d-md-flex  d-none align-items-center justify-content-end">
                <ul class="topbar-social-links">
                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="#"><i class='bx bxl-instagram-alt'></i></a></li>
                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="#"><i class="bx bxl-whatsapp-square"></i></a></li>

                    <a href="{{ route('set_eng') }}">
                        <img src="{{ asset('data/us.gif') }}" alt=""
                            style="width: 50px; height: auto; padding: 2px;">
                    </a>

                    <a href="{{ route('set_jp') }}">
                        <img src="{{ asset('data/jp.jpeg') }}" alt=""
                            style="width: 43px; height: auto; padding: 2px;">
                    </a>

                </ul>
            </div>
        </div>
    </div>
</div>


<header>
    <div class="header-area header-style-one">
        <div class="container">
            <div class="row">
                <div
                    class="col-xxl-2 col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-items-center d-xl-flex d-lg-block">
                    <div class="nav-logo d-flex justify-content-between align-items-center">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('data/logo.jpg') }}" alt="logo" style="width: 90px;">
                        </a>
                        <div class="mobile-menu d-flex ">
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                    <span class="h-top"></span>
                                    <span class="h-middle"></span>
                                    <span class="h-bottom"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <nav class="main-nav">

                        <div class="inner-logo d-xl-none text-center">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('data/logo.jpg') }}" alt="" style="width: 100px;">
                            </a>
                        </div>

                        <ul>

                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>

                            <li class="has-child-menu">
                                <a href="javascript:void(0)">
                                    Our Company
                                </a>
                                <ul class="sub-menu">
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
                                </ul>
                            </li>


                            <li class="has-child-menu">
                                <a href="javascript:void(0)">
                                    Overseas employment
                                </a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
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
                                        <a href="{{ route('carrer_advice.index') }}">
                                            Career Advice
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('training.index') }}">
                                    Japanese Language
                                </a>
                            </li>

                            <li class="has-child-menu">
                                <a href="javascript:void(0)">
                                    Application
                                </a>
                                <ul class="sub-menu">
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
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
