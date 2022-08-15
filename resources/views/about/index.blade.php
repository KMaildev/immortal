@extends('layouts.app')
@section('title', ' - About Us')
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
                                        Being service minded. Emphasizing and adhering to the customer’s success is the
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
                                        organization’s overall results with honesty and ethical standards.
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
                                        Using a positive and “Can-Do”
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
@endsection
