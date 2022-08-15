@extends('layouts.app')
@section('title', ' - Carrer Advice')
@section('content')
    <div class="blog-sidebar-wrapper pt-80 py-5" style="background-color: #5DB64B;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                @foreach ($carrer_advices as $carrer_advice)
                    <div class="col-lg-6">
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
@endsection
