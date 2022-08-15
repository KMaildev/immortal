@extends('layouts.app')
@section('title', ' - Country')
@section('content')

    <div class="package-area package-style-one pt-110 py-5">
        <div class="container">
            <div class="row align-items-center" style="background-color: #5DB64B; padding: 20px;">
                <div class="col-lg-8">
                    <div class="section-head-alpha">
                        <h2 class="text-white">
                            Overseas Jobs
                        </h2>
                        <p class="text-white">
                            @if (session('key') == 'jp')
                                緊急の欠員とは別に、大企業の成長企業は、ビジネスをより高いレベルに引き上げるために有能な人材を永遠に必要としています。そのような場合、私たちはあなたの組織に付加価値を与えることができる有能な個人を継続的に探します。これらの要件は、複数のグローバルな場所で、事前に合意された価格体系で処理されます。
                                以下の国では、カスタマイズされた人材紹介サービスを提供しています。
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
            <div class="row g-4 py-5">
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
@endsection
