@extends('layouts.app')
@section('title', ' - Contact Us')
@section('content')

    <div class="contact-wrapper pt-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="contact-info" style="border-radius: 5px 35px 5px 5px !important;">
                        <h3>Contact Info.</h3>
                        <ul>
                            <li>
                                <h6>Let’s Talk</h6>
                                <a
                                    href="https://demo.egenslab.com/cdn-cgi/l/email-protection#8ae3e4ece5caeff2ebe7fae6efa4e9e5e7"><span
                                        class="__cf_email__"
                                        data-cfemail="4920272f26092c31282439252c672a2624">[email&#160;protected]</span></a>
                                <a
                                    href="https://demo.egenslab.com/cdn-cgi/l/email-protection#177e79717857726f767a677b723974787a"><span
                                        class="__cf_email__"
                                        data-cfemail="cfa6a1a9a08faab7aea2bfa3aae1aca0a2">[email&#160;protected]</span></a>
                                <a href="tel:8801761111456">+88 0176 1111 456</a>
                            </li>
                            <li>
                                <h6>Loacation.</h6>
                                <a href="#">168/170, Ave 01, Streets Suite 666 Mirpur DOHS, Bangladesh</a>
                            </li>
                            <li>
                                <h6>Visit Us.</h6>
                                <a href="#">Facebook: https://www.facebook.com/egenslab</a>
                                <a href="#">Twitter: https://www.twitter.com/egenslab</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form autocomplete="off" action="{{ route('contact.store') }}" method="POST" id="create-form">
                        @csrf
                        <div class="contact-form-wrap">
                            <h4 class="title">Interested in <span>discussing?</span></h4>
                            <p>
                                Alternatively, you may contact us by filling up the contact form. Our team will response
                                you shortly.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="custom-input-group">
                                        <label for="name">Name</label>
                                        <input type="text" value="{{ old('name') }}" placeholder="Your Name*"
                                            name="name">
                                        @error('name')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="custom-input-group">
                                        <label for="name">Phone</label>
                                        <input type="text" value="{{ old('phone') }}" placeholder="Your Phone*"
                                            name="phone">
                                        @error('phone')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="custom-input-group">
                                        <label for="name">Email</label>
                                        <input name="email" type="text" value="{{ old('email') }}"
                                            placeholder="Email Address">
                                        @error('email')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="custom-input-group">
                                        <label for="name">Subject</label>
                                        <input name="subject" type="text" value="{{ old('subject') }}"
                                            placeholder="Subject*">
                                        @error('subject')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="custom-input-group">
                                <textarea cols="10" rows="2" placeholder="Your message" name="message">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="custom-input-group">
                                <div class="submite-btn">
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container-fluid p-0">
            <div class="contact-map mt-120">
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
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
