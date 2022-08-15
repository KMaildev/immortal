<div class="hero-area hero-style-three">
    <img src="assets/images/banner/banner-plane.svg" class="img-fluid banner-plane">
    <div class="hero-main-wrapper position-relative">
        <div class="hero-social">
            <ul class="social-list d-flex justify-content-center align-items-center gap-4">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">instagram</a></li>
                <li><a href="#">Linked in</a></li>
            </ul>
        </div>
        <div class="swiper hero-slider-three ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-bg-1" style="background-image: url({{ asset('data/slider/1.jpeg') }})">
                        <div class="container">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-8">
                                    <div class="hero3-content">
                                        <h1>Immortal Friends Company</h1>
                                        <p>
                                            Overseas Employment Agency <br>
                                            Immortal Friends Company was established in 1990
                                        </p>
                                        <a href="{{ route('contact.index') }}" class="button-fill-primary banner3-btn">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slider-bg-3" style="background-image: url({{ asset('data/slider/2.jpeg') }})">
                        <div class="container">
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-lg-8">
                                    <div class="hero3-content">
                                        <h1>Immortal Friends Company</h1>
                                        <p>
                                            Overseas Employment Agency <br>
                                            Immortal Friends Company was established in 1990
                                        </p>
                                        <a href="{{ route('cv.index') }}" class="button-fill-primary banner3-btn">
                                            Submit CV
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-arrows text-center d-lg-flex flex-column d-none gap-5">
            <div class="hero-prev3" tabindex="0" role="button" aria-label="Previous slide"> <i
                    class="bi bi-arrow-left"></i></div>
            <div class="hero-next3" tabindex="0" role="button" aria-label="Next slide"><i
                    class="bi bi-arrow-right"></i></div>
        </div>
    </div>
</div>
