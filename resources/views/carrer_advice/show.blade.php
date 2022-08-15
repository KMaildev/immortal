@extends('layouts.app')
@section('title', ' - Carrer Advice')
@section('content')
    <div class="blog-details-wrapper pt-80 py-3">
        <div class="container">
            <div class="row ">

                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="post-header">
                            <h2 class="post-title">
                                @if (session('key') == 'jp')
                                    {!! $carrer_advice->title_jp ?? '' !!}
                                @else
                                    {!! $carrer_advice->title_eng ?? '' !!}
                                @endif
                            </h2>
                            <div class="post-meta">
                                <a href="#" class="blog-writer">
                                    <i class="bi bi-person-circle"></i>
                                    By {{ $carrer_advice->author ?? '' }}
                                </a>
                                <a href="#" class="blog-comments">
                                    <i class="bi bi-calendar3"></i>
                                    {{ $carrer_advice->upload_date ?? '' }}
                                </a>

                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                    class="blog-comments" target="_blank">
                                    Share
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </div>
                        </div>
                        <div class="post-thumb">
                            <img src="{{ $carrer_advice->photo ?? '' }}" alt="">
                        </div>
                        <div class="post-body">
                            <p>
                                @if (session('key') == 'jp')
                                    {!! $carrer_advice->description_jp ?? '' !!}
                                @else
                                    {!! $carrer_advice->description_eng ?? '' !!}
                                @endif
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <aside class="blog-widget widget-recent-entries-custom mt-30">
                            <div class="widget-title">
                                <h4>Recent Posts</h4>
                            </div>
                            <ul class="widget-body">
                                @foreach ($recent_carrer_advices as $recent_carrer_advice)
                                    <li class="clearfix">
                                        <div class="wi">
                                            <a href="{{ route('carrer_advice.show', $recent_carrer_advice->id) }}">
                                                <img src="{{ $recent_carrer_advice->photo ?? '' }}" alt="">
                                            </a>
                                        </div>
                                        <div class="wb">
                                            <h6>
                                                <a href="{{ route('carrer_advice.show', $recent_carrer_advice->id) }}">
                                                    @if (session('key') == 'jp')
                                                        {!! $recent_carrer_advice->title_jp ?? '' !!}
                                                    @else
                                                        {!! $recent_carrer_advice->title_eng ?? '' !!}
                                                    @endif
                                                </a>
                                            </h6>
                                            <div class="wb-info">
                                                <span class="post-date">
                                                    <i class="bi bi-person-circle"></i>
                                                    By {{ $recent_carrer_advice->author ?? '' }}
                                                </span>
                                                <span class="post-date">
                                                    <i class="bi bi-calendar3"></i>
                                                    {{ $recent_carrer_advice->upload_date ?? '' }}
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>

                        @include('layouts.shared.quick_links') 

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
