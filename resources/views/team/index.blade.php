@extends('layouts.app')
@section('title', ' - Team')
@section('content')
    <div class="guide-area guide-style-one pt-110 py-5" style="background-color: #5DB64B;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-head-alpha text-center mx-auto">
                        <h2 class="text-white">
                            OUR TEAM
                        </h2>
                        <p style="color: white">
                            Our ability to deliver customer’s satisfactory and excellent quality of service starts from our
                            vibrant, dedicated and experienced team of individuals. Each of us has diverse experience and
                            background, and together, we serve our customer better and bring the successful growth of our
                            company in the employment industry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="guide-card-alpha">
                            <div class="guide-image">
                                <img src="{{ $team->photo }}" alt=""
                                    style="width: 100%; height: 300px; object-fit: cover; background-size: contain; background-position: top; object-position: center">
                                <ul class="guide-social-links" hidden>
                                    <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-whatsapp'></i></a></li>
                                </ul>
                            </div>
                            <div class="guide-content">
                                <h4 class="guide-name">{{ $team->name ?? '' }}</h4>
                                <h6 class="guide-designation">{{ $team->position ?? '' }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
