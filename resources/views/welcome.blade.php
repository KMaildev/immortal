@extends('layouts.app')
@section('title', ' - Home')
@section('content')
    <div class="about-main-wrappper pt-100 py-5">
        <div class="container">
            <div class="about-tab-wrapper">
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-6">
                        <div class="about-tab-image-grid text-center">
                            <div class="about-video d-inline-block">
                                <img src="{{ asset('data/about1.webp') }}" alt=""
                                    style="width: 50%; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                            </div>
                            <div class="row float-images g-4">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about-image">
                                        <img src="{{ asset('data/about2.jpeg') }}" alt=""
                                            style="width: 100%; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="about-image">
                                        <img src="{{ asset('data/about3.jpeg') }}" alt="" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="about-tab-wrap">
                            <h2 class="about-wrap-title">
                                About <span>Our Company</span>
                            </h2>
                            <div class="tab-content about-tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="about-pills1" role="tabpanel"
                                    aria-labelledby="pills-about1">
                                    <p>
                                        Immortal Friends Company was established in 1990.(License No.***/***) We,
                                        thereafter, obtained our overseas employment agency license in 2015 (License
                                        No.138/2015) and subsequently we obtained the employment agency license
                                        (1License
                                        No.12/2017) for Thailand in 2017 which the licenses are issued by the Ministry
                                        of
                                        Labor, Immigration and Population, Republic of the Union of Myanmar. We are also
                                        the
                                        member of Myanmar Oversea Employment Agencies Federation (MOEAF) . We have
                                        signed
                                        the code of conduct developed by the Myanmar Overseas Employment Agencies
                                        Federation
                                        (MOEAF), in collaboration with the Ministry of Labour, Immigration and
                                        Population
                                        (MOLIP) and with technical input from the ILO TRIANGLE in ASEAN project.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-100 align-items-center">
                <div class="col-md-12 col-lg-12">
                    <center>
                        <h2 class="about-wrap-title">
                            Why
                            <span>Choose </span>
                            Us
                        </h2>
                    </center>
                </div>

                <div class="row py-5">

                    <div class="col-lg-4 col-md-6">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;">
                                    <img loading="lazy" class="alignnone wp-image-21123" src="{{ asset('data/3.png') }}"
                                        alt="" width="75" height="56" sizes="(max-width: 75px) 100vw, 75px">
                                </p>
                                <h2 style="font-size: 2em; line-height: 1em; text-align: center;">
                                    <span style="color: #1d3fd9;font-size:20px; font-weignt:bold;">Collaborative</span>
                                </h2>
                                <p>
                                    <span style="font-weight: 400;">To cooperate and support each other by sharing ideas and
                                        listening. In order to create and expand success.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;">
                                    <img loading="lazy" class="alignnone wp-image-21123" src="{{ asset('data/5.png') }}"
                                        alt="" width="75" height="56" sizes="(max-width: 75px) 100vw, 75px">
                                </p>
                                <h2 style="font-size: 2em; line-height: 1em; text-align: center;">
                                    <span style="color: #1d3fd9;font-size:20px; font-weignt:bold;">
                                        Learning and Development
                                    </span>
                                </h2>
                                <p>
                                    <span style="font-weight: 400;">
                                        Open mind to learn new things. Continuous self improvement with modern knowledge and
                                        skill set.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;">
                                    <img loading="lazy" class="alignnone wp-image-21123" src="{{ asset('data/4.png') }}"
                                        alt="" width="75" height="56" sizes="(max-width: 75px) 100vw, 75px">
                                </p>
                                <h2 style="font-size: 2em; line-height: 1em; text-align: center;">
                                    <span style="color: #1d3fd9;font-size:20px; font-weignt:bold;">
                                        Customer Centric
                                    </span>
                                </h2>
                                <p>
                                    <span style="font-weight: 400;">
                                        Being service minded. Emphasizing and adhering to the customer???s success is the
                                        first
                                        priority.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 py-5">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;">
                                    <img loading="lazy" class="alignnone wp-image-21124" src="{{ asset('data/2.png') }}"
                                        alt="" width="75" height="56" sizes="(max-width: 75px) 100vw, 75px">
                                </p>
                                <h2 style="font-size: 2em; line-height: 1em; text-align: center;">
                                    <span style="color: #1d3fd9;font-size:20px; font-weignt:bold;">Accountability</span>
                                </h2>
                                <p>
                                    <span style="color: #000000;">Have responsibility and good conscience with awareness of
                                        the
                                        organization???s overall results with honesty and ethical standards.
                                    </span>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 py-5">
                        <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                                <p style="text-align: center;">
                                    <img class="alignnone wp-image-21120" src="{{ asset('data/1.png') }}" alt=""
                                        width="75" height="56" sizes="(max-width: 75px) 100vw, 75px">
                                </p>
                                <h2 style="font-size: 2em; line-height: 1em; text-align: center;">
                                    <span style="color: #1d3fd9;font-size:20px; font-weignt:bold;">Can-Do Attitude</span>
                                </h2>
                                <p style="text-align: left;">
                                    <span style="color: #000000; text-align: center;">
                                        Using a positive and ???Can-Do???
                                        attitude to seize the moment and realize the opportunity. Think of obstacles as
                                        challenges then strive for success.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="package-area package-style-one">
        <div class="container">
            <div class="row align-items-center" style="background-color: #5DB64B; padding: 20px;">
                <div class="col-lg-8">
                    <div class="section-head-alpha">
                        <h2 class="text-white">
                            Overseas Jobs
                        </h2>
                        <p class="text-white">
                            @if (session('key') == 'jp')
                                ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                ???????????????????????????????????????????????????????????????????????????????????????????????????
                            @else
                                Apart from urgent vacancies large corporations growing companies have an eternal demand for
                                talented manpower to take their business to the higher level. In such cases we keep a
                                continuous
                                lookout for talented individuals who can add value to your organization. We handle these
                                requirements across multiple global locations and with a previously agreed pricing
                                structure.
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package-btn text-lg-end">
                        <a href="{{ route('contact.index') }}" class="button-fill-primary">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-4 py-3">
                @foreach ($countries as $countrie)
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="package-card-alpha">
                            <div class="package-thumb">
                                <a href="{{ route('overseas_jobs.show', $countrie->id) }}">
                                    <img src="{{ $countrie->photo ?? '' }}" alt="">
                                </a>
                                <p class="card-lavel">
                                    <i class="bi bi-clock"></i>
                                    <span>20 Jobs</span>
                                </p>
                            </div>
                            <div class="package-card-body" style="background-color: #5DB64B;">
                                <h3 class="p-card-title">
                                    <a href="{{ route('overseas_jobs.show', $countrie->id) }}">
                                        @if (session('key') == 'jp')
                                            {{ $countrie->title_jp ?? '' }}
                                        @else
                                            {{ $countrie->title_eng ?? '' }}
                                        @endif
                                    </a>
                                </h3>
                                <div class="p-card-bottom">
                                    <div class="book-btn">
                                        <a href="{{ route('cv.index') }}">
                                            Apply Now
                                            <i class='bx bxs-right-arrow-alt'></i>
                                        </a>
                                    </div>
                                    <div class="p-card-info">
                                        <a href="{{ route('overseas_jobs.show', $countrie->id) }}" style="color: white">
                                            View Jobs
                                            <i class='bx bxs-right-arrow-alt'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="blog-sidebar-wrapper pt-80 py-5" style="background-color: #5DB64B;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <center>
                        <h2 class="about-wrap-title">
                            Career Advice
                        </h2>
                    </center>
                </div>
                @foreach ($carrer_advices as $carrer_advice)
                    <div class="col-lg-3">
                        <div class="blog-card-gamma-full">
                            <div class="blog-thumb">
                                <a href="{{ route('carrer_advice.show', $carrer_advice->id) }}">
                                    <img src="{{ $carrer_advice->photo ?? '' }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-body-top">
                                    <a href="#" class="blog-writer">
                                        <i class="bi bi-person-circle"></i>
                                        {{ $carrer_advice->author ?? '' }}
                                    </a>
                                    <a href="#" class="blog-comments">
                                        <i class="bi bi-calendar3"></i>
                                        {{ $carrer_advice->upload_date ?? '' }}
                                    </a>
                                </div>
                                <h4 class="blog-title">
                                    <a href="{{ route('carrer_advice.show', $carrer_advice->id) }}">
                                        @if (session('key') == 'jp')
                                            {!! $carrer_advice->title_jp ?? '' !!}
                                        @else
                                            {!! $carrer_advice->title_eng ?? '' !!}
                                        @endif
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="guide-wrapper  pt-80" style="background-color: #eff1f4;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <center>
                        <h2 class="about-wrap-title">
                            Activities
                        </h2>
                    </center>
                </div>
                @foreach ($activities as $activitie)
                    <div class="col-md-12 col-sm-12 col-lg-12 py-3">
                        <h4 class="gallary-group-title text-black">
                            @if (session('key') == 'jp')
                                {{ $activitie->title_jp ?? '' }}
                            @else
                                {{ $activitie->title_eng ?? '' }}
                            @endif
                        </h4>
                        <p class="text-black">
                            @if (session('key') == 'jp')
                                {!! $activitie->description_jp ?? '' !!}
                            @else
                                {!! $activitie->description_eng ?? '' !!}
                            @endif
                        </p>
                        <div class="row">
                            @php
                                $values = explode(',', $activitie->photo);
                            @endphp
                            @foreach ($values as $photo)
                                <div class="col-md-3 col-lg-3 col-sm-12">
                                    <div class="gallary-item"
                                        style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                                        <img src="{{ $photo }}" alt="Immortal Friends Company"
                                            style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                        <a href="{{ $photo }}" data-fancybox="gallery"
                                            data-caption="Immortal Friends Company" class="gallary-item-overlay">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
