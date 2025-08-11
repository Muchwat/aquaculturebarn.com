@extends('index')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">{{ __('contact.contact_us') }}</h1>
                <a href="{{ url('/') }}">{{ __('contact.home') }}</a>
                <i class="bi bi-arrow-right text-primary me-2"></i>
                <a href="{{ url('/contact') }}">{{ __('contact.contact_for_any_queries') }}</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <!-- Contact Start -->
    <div class="container-fluid bg-secondary px-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">{{ __('contact.contact_for_any_queries') }}</h1>
                <form action="/contact" method="GET">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input name="name" type="text" class="form-control" id="form-floating-1"
                                    placeholder="{{ __('contact.full_name') }}">
                                <label for="form-floating-1">{{ __('contact.full_name') }}</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input name="email" type="email" class="form-control" id="form-floating-2"
                                    placeholder="{{ __('contact.email_address') }}">
                                <label for="form-floating-2">{{ __('contact.email_address') }}</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input name="subject" type="text" class="form-control" id="form-floating-3"
                                    placeholder="{{ __('contact.subject') }}">
                                <label for="form-floating-3">{{ __('contact.subject') }}</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="content" class="form-control" placeholder="{{ __('contact.message') }}"
                                    id="form-floating-4" style="height: 150px"></textarea>
                                <label for="form-floating-4">{{ __('contact.message') }}</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">{{ __('contact.submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8810.836223202818!2d34.778986!3d-0.096773!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182aa3e10f705dab%3A0xf97ea03346a2db8!2sAquaculture%20Barn%20Limited!5e1!3m2!1sen!2ske!4v1754922134531!5m2!1sen!2ske"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection