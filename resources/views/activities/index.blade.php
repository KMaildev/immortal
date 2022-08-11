@extends('layouts.app')
@section('title', ' - Activities')
@section('content')
    <div class="guide-wrapper  pt-80" style="background-color: #5DB64B;">
        <div class="container">
            <div class="row">

                @foreach ($activities as $activitie)
                    <div class="col-md-12 col-sm-12 col-lg-12 py-3">
                        <h4 class="gallary-group-title text-white">
                            @if (session('key') == 'jp')
                                {{ $activitie->title_jp ?? '' }}
                            @else
                                {{ $activitie->title_eng ?? '' }}
                            @endif
                        </h4>
                        <p class="text-white">
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
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
