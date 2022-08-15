@extends('layouts.app')
@section('title', ' - Training')
@section('content')
    <div class="package-details-wrapper pt-76 py-5">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8">
                    <div class="tour-package-details">
                        <div class="pd-header">
                            <div class="pd-thumb">
                                <img src="{{ asset('data/japan.jpeg') }}" alt="">
                            </div>
                            <div class="header-bottom">
                                <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <h5 class="location">
                                        <i class="bi bi-geo-alt"></i>
                                        Yangon, Myanmar
                                    </h5>
                                </div>
                                <h2 class="pd-title">
                                    Japanese Language
                                </h2>
                            </div>
                        </div>
                        <div class="package-details-tabs">
                            <ul class="nav nav-pills tab-switchers gap-xxl-4 gap-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-package1" data-bs-toggle="pill"
                                        data-bs-target="#pill-body1" type="button" role="tab"
                                        aria-controls="pill-body1" aria-selected="true">
                                        <i class="bi bi-info-lg"></i>
                                        Information
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-package2" data-bs-toggle="pill"
                                        data-bs-target="#pill-body2" type="button" role="tab"
                                        aria-controls="pill-body2" aria-selected="false">
                                        <i class="bi bi-file-earmark-spreadsheet"></i>
                                        FAQ
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-package3" data-bs-toggle="pill"
                                        data-bs-target="#pill-body3" type="button" role="tab"
                                        aria-controls="pill-body3" aria-selected="false">
                                        <i class="bi bi-images"></i>
                                        Gallary
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-package4" data-bs-toggle="pill"
                                        data-bs-target="#pill-body4" type="button" role="tab"
                                        aria-controls="pill-body4" aria-selected="false">
                                        <i class="bi bi-geo-alt"></i>
                                        Location
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1" role="tabpanel"
                                    aria-labelledby="pills-package1">
                                    <h3 class="d-subtitle">
                                        About of Japanese Language Training Center
                                    </h3>
                                    <p style="text-align: justify">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus quo blanditiis
                                        aliquid debitis molestias itaque, obcaecati cum ab beatae ut magnam fugit fuga
                                        soluta? Libero officiis hic omnis aperiam totam.
                                        <br>
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, vitae saepe ut
                                        dolores illum magnam delectus ipsa, eos quam aperiam veritatis illo soluta labore
                                        doloremque velit doloribus odio aut suscipit!
                                    </p>
                                    <div class="p-info-featured-img row position-relative g-4 row-cols-1 row-cols-sm-2">
                                        <div class="col">
                                            <div class="featured-img">
                                                <img src="{{ asset('data/training_1.jpeg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="featured-img">
                                                <img src="{{ asset('data/training_2.webp') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade package-plan-tab tab-body mt-3" id="pill-body2" role="tabpanel"
                                    aria-labelledby="pills-package2">
                                    <h3 class="d-subtitle">
                                        FAQ
                                    </h3>
                                    <div class="accordion plans-accordion" id="planAccordion">
                                        @foreach ($training_faqs as $key => $faq)
                                            <div class="accordion-item plans-accordion-single">
                                                <div class="accordion-header" id="planHeadingOne">
                                                    <div class="accordion-button" data-bs-toggle="collapse"
                                                        data-bs-target="#planCollapse_{{ $key }}"
                                                        aria-expanded="true" role="navigation">
                                                        <div class="paln-index-circle">
                                                            <h4>
                                                                {{ $key + 1 }}
                                                            </h4>
                                                        </div>
                                                        <div class="plan-title">
                                                            <h5>
                                                                @if (session('key') == 'jp')
                                                                    {{ $faq->question_eng ?? '' }}
                                                                @else
                                                                    {{ $faq->question_jp ?? '' }}
                                                                @endif
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="planCollapse_{{ $key }}"
                                                    class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }} "
                                                    aria-labelledby="planHeadingOne" data-bs-parent="#planAccordion">
                                                    <div class="accordion-body plan-info">
                                                        <p>
                                                            @if (session('key') == 'jp')
                                                                {!! $faq->answer_eng ?? '' !!}
                                                            @else
                                                                {!! $faq->answer_jp ?? '' !!}
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                    aria-labelledby="pills-package3">
                                    <div class="row g-4">
                                        @foreach ($training_galleries as $training_gallery)
                                            @php
                                                $values = explode(',', $training_gallery->photo);
                                            @endphp
                                            @foreach ($values as $photo)
                                                <div class="col-md-4 col-sm-12 col-lg-4">
                                                    <div class="package-gallary-item">
                                                        <a href="{{ $photo ?? '' }}" data-fancybox="gallery"
                                                            data-caption="Caption Here">
                                                            <img src="{{ $photo ?? '' }}" alt=""
                                                                style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>

                                <div class="tab-pane fade package-location-tab mt-3" id="pill-body4" role="tabpanel"
                                    aria-labelledby="pills-package4">
                                    <div class="mapouter">
                                        <div class="gmap_canvas">
                                            <iframe id="gmap_canvas"
                                                src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe><a
                                                href="https://123movies-to.org/"></a><br>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="package-sidebar">
                        <aside class="package-widget-style-2 widget-form mt-30">
                            <div class="widget-title text-center d-flex justify-content-between">
                                <h4>
                                    Student Application Form
                                </h4>
                            </div>
                            <div class="widget-body">
                                <form autocomplete="off" method="POST"
                                    action="{{ route('student_application_form.store') }}" id="create-form">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="inputEmail3" class="control-label mb-2">
                                            အမည် (မြန်မာ/အင်္ဂလိပ်)
                                        </label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name">
                                        @error('name')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputEmail3" class="control-label mb-2">
                                            ဖုန်းနံပါတ်
                                        </label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            name="phone">
                                        @error('phone')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputEmail3" class="control-label mb-2">
                                            အီးမေးလ်
                                        </label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="email">
                                        @error('email')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputEmail3" class="control-label mb-2">
                                            ပညာအရည်အချင်း/ဘွဲ့
                                        </label>
                                        <input type="text"
                                            class="form-control @error('education') is-invalid @enderror"
                                            name="education">
                                        @error('education')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputEmail3" class="control-label mb-2">
                                            မွေးသက္ကရာဇ်
                                        </label>
                                        <input type="text"
                                            class="form-control @error('date_of_birth') is-invalid @enderror"
                                            name="date_of_birth">
                                        @error('date_of_birth')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputEmail3" class="control-label mb-2">
                                            အဖအမည်/အလုပ်အကိုင်
                                        </label>
                                        <input type="text" class="form-control @error('father') is-invalid @enderror"
                                            name="father">
                                        @error('father')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>


                                    <div class="form-group mb-3">
                                        <label for="inputEmail3" class="control-label mb-2">
                                            ကျား/မ
                                        </label>
                                        <select class="form-control" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputEmail3" class="control-label mb-2">
                                            လူမျိုး/ဘာသာ
                                        </label>
                                        <input type="text"
                                            class="form-control @error('nationality') is-invalid @enderror"
                                            name="nationality">
                                        @error('nationality')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>


                                    <div class="form-group mb-3">
                                        <label for="inputEmail3" class="control-label mb-2">
                                            အမြဲတမ်းလိပ်စာ
                                        </label>
                                        <input type="text"
                                            class="form-control @error('permanent_address') is-invalid @enderror"
                                            name="permanent_address">
                                        @error('permanent_address')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="button-fill-primary">
                                            Apply Now
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreStudentApplicationForm', '#create-form') !!}
@endsection
