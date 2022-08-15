@extends('layouts.app')
@section('title', ' - MD')
@section('content')

    <div class="about-main-wrappper pt-100 py-5" style="background-color: #CDCED0;">
        <div class="container">
            <div class="row pt-100 align-items-center">
                <div class="col-lg-6">
                    <div class="achievement-counter-wrap">
                        <h2 class="about-wrap-title">
                            OUR VISION
                            <span>MISSION</span> & VALUES
                        </h2>
                        <div class="achievement-counter-cards">
                            <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center"
                                style="background-color: white;">
                                <div class="counter-box mb-sm-0 mb-3">
                                    <h2>Our</h2>
                                    <h6>Vision</h6>
                                </div>
                                <p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus.
                                    Suspendissendt enlane
                                    molestie turpis nec lacinia vehicula.</p>
                            </div>
                            <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center"
                                style="background-color: white;">
                                <div class="counter-box mb-3">
                                    <h2>Our</h2>
                                    <h6>Mission</h6>
                                </div>
                                <p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus.
                                    Suspendissendt enlane
                                    molestie turpis nec lacinia vehicula.</p>
                            </div>
                            <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center"
                                style="background-color: white;">
                                <div class="counter-box mb-3">
                                    <h2>Our </h2>
                                    <h6> Value</h6>
                                </div>
                                <p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus.
                                    Suspendissendt enlane
                                    molestie turpis nec lacinia vehicula.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image-group mt-5 mt-lg-0">
                        <img src="{{ asset('data/mssion.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
