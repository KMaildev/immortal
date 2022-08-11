@extends('layouts.app')
@section('title', ' - Employer')
@section('content')
    <div class="guide-wrapper  pt-80 py-5" style="background-color: #5DB64B;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-head-alpha section-padding-15 text-center mx-auto">
                        <h2 class="text-white">
                            APPLY YOUR CV
                        </h2>
                        <p class="text-white">
                            Fill your informations and upload your CV.
                        </p>
                    </div>
                </div>

                <div class="col-md-8 col-sm-12 col-lg-8">
                    <form autocomplete="off" method="POST" action="{{ route('cv.store') }}" enctype="multipart/form-data"
                        id="create-form">
                        @csrf
                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label>Additional Note</label>
                                    <textarea class="form-control" rows="5" name="additional_note">{{ old('additional_note') }}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <div class="choose-img">
                                    <label for="img">Select your CV to upload</label>
                                    <input type="file" id="img" name="attachment_file"
                                        accept=".doc, .docx, .pdf" />
                                    @error('attachment_file')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="button-fill-primary">
                                    Apply Now
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
