@extends('layouts.app')
@section('title', ' - Overseas Jobs')
@section('content')

    <div class="package-standard-wrapper pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($jobs as $job)
                        <div class="package-card-gamma">
                            <div class="package-thumb">
                                <img src="{{ $job->photo ?? '' }}" alt="" style="width: 100%;">
                            </div>
                            <div class="package-card-body">
                                <p class="card-lavel">
                                    <i class="bi bi-toggle-on"></i>
                                    <span>
                                        {{ $job->status ?? '' }}
                                    </span>
                                </p>
                                <h3 class="p-card-title">
                                    @if (session('key') == 'jp')
                                        {{ $job->title_jp ?? '' }}
                                    @else
                                        {{ $job->title_eng ?? '' }}
                                    @endif
                                </h3>
                                <p style="text-align: left;">
                                    @if (session('key') == 'jp')
                                        {{ $job->description_jp ?? '' }}
                                    @else
                                        {{ $job->description_eng ?? '' }}
                                    @endif
                                </p>
                                <div class="p-card-bottom">
                                    <div class="book-btn">
                                        <a href="{{ route('cv.index') }}">
                                            Apply Now <i class='bx bxs-right-arrow-alt'></i>
                                        </a>

                                        <a href="{{ route('contact.index') }}">
                                            Contact Us <i class='bx bxs-right-arrow-alt'></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        @include('layouts.shared.quick_links')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
