@extends('index')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ url('/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">{{ __('home.partner') }}</h5>
                            <h1 class="display-3 text-white mb-md-4">{{ __('home.success') }}</h1>
                            <a href="{{ url('/services') }}"
                                class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">{{ __('home.our_services') }}</a>
                            <a href="{{ url('/about') }}"
                                class="btn btn-secondary py-md-3 px-md-5 rounded-pill">{{ __('home.about_us') }}</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ url('/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">{{ __('home.partner') }}</h5>
                            <h1 class="display-2 text-white mb-md-4">{{ __('home.success') }}</h1>
                            <a href="{{ url('/services') }}"
                                class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">{{ __('home.our_services') }}</a>
                            <a href="{{ url('/about') }}"
                                class="btn btn-secondary py-md-3 px-md-5 rounded-pill">{{ __('home.about_us') }}</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ url('/img/carousel-3.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">{{ __('home.partner') }}</h5>
                            <h1 class="display-2 text-white mb-md-4">{{ __('home.success') }}</h1>
                            <a href="{{ url('/services') }}"
                                class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">{{ __('home.our_services') }}</a>
                            <a href="{{ url('/about') }}"
                                class="btn btn-secondary py-md-3 px-md-5 rounded-pill">{{ __('home.about_us') }}</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="carousel-item">
                    <img class="w-100" src="{{ url('/img/carousel-4.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">{{ __('home.partner') }}</h5>
                            <h1 class="display-2 text-white mb-md-4">{{ __('home.success') }}</h1>
                            <a href="{{ url('/services') }}" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">{{
                                __('home.our_services') }}</a>
                            <a href="{{ url('/about') }}" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">{{
                                __('home.about_us') }}</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ url('/img/carousel-5.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">{{ __('home.partner') }}</h5>
                            <h1 class="display-2 text-white mb-md-4">{{ __('home.success') }}</h1>
                            <a href="{{ url('/services') }}" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">{{
                                __('home.our_services') }}</a>
                            <a href="{{ url('/about') }}" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">{{
                                __('home.about_us') }}</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ url('/img/carousel-6.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">{{ __('home.partner') }}</h5>
                            <h1 class="display-2 text-white mb-md-4">{{ __('home.success') }}</h1>
                            <a href="{{ url('/services') }}" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">{{
                                __('home.our_services') }}</a>
                            <a href="{{ url('/about') }}" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">{{
                                __('home.about_us') }}</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-12 py-6 px-5">
                <div class="text-center mx-auto mb-5" style="max-width: 1000px;">
                    <h1 class="display-5 mb-4">{{ __('about.page_header_title') }} <span
                            class="text-primary">{{ __('about.company_name') }}</span></h1>
                    <p class="mb-4">{{ __('about.company_description') }}</p>
                    <a href="{{ url('/about') }}"
                        class="btn btn-primary py-md-3 px-md-5 rounded-pill">{{ __('home.learn_more') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">{{ __('home.why_choose_us') }}</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users fs-4 text-white"></i>
                        </div>
                        <h3 class="mb-0">{{ __('home.experienced_team_title') }}</h3>
                        <p>{{ __('home.experienced_team_description') }}</p>
                    </div>

                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-check-circle fs-4 text-white"></i>
                        </div>
                        <h3>{{ __('home.quality_results_title') }}</h3>
                        <p class="mb-0">{{ __('home.quality_results_description') }}</p>
                    </div>

                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award fs-4 text-white"></i>
                        </div>
                        <h3>{{ __('home.global_collaboration_title') }}</h3>
                        <p class="mb-0">{{ __('home.global_collaboration_description') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-block bg-primary h-100 text-center">
                    <img class="img-fluid" src="img/feature.jpg" alt="">
                    <div class="p-4">
                        <p class="text-white mb-4">{{ __('home.fetures_company_description') }}</p>
                        <a href="{{ url('/about') }}"
                            class="btn btn-light py-md-3 px-md-5 rounded-pill mb-2">{{ __('home.learn_more') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-cogs fs-4 text-white"></i>
                        </div>
                        <h3>{{ __('home.tailored_solutions_title') }}</h3>
                        <p>{{ __('home.tailored_solutions_description') }}</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-comments fs-4 text-white"></i>
                        </div>
                        <h3>{{ __('home.transparent_communication_title') }}</h3>
                        <p class="mb-0">{{ __('home.transparent_communication_description') }}</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-chart-line fs-4 text-white"></i>
                        </div>
                        <h3>{{ __('home.continuous_improvement_title') }}</h3>
                        <p class="mb-0">{{ __('home.continuous_improvement_description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Quote Start -->
    <div class="container-fluid bg-secondary px-0" id="quote">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">{{ __('services.request_quotation_heading') }}</h1>
                <p class="mb-4">{{ __('services.request_quotation_content') }}</p>
                <p class="mb-4">{{ __('services.fill_out_form') }}</p>
                <form action="{{ url('/save/quatation') }}" method="GET">
                    <div class="row gx-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" id="form-floating-1"
                                    placeholder="{{ __('services.form_full_name') }}">
                                <label for="form-floating-1">{{ __('services.form_full_name') }}</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="form-floating-2"
                                    placeholder="{{ __('services.form_email_address') }}">
                                <label for="form-floating-2">{{ __('services.form_email_address') }}</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select" name="service" id="floatingSelect"
                                    aria-label="{{ __('services.form_service') }}">
                                    <option value="Academic Research" selected>{{ __('services.academic_research') }}
                                    </option>
                                    <option value="Market Research">{{ __('services.market_research') }}</option>
                                    <option value="Video-Based Field Work">{{ __('services.video_field_work') }}</option>
                                    <option value="Business Consultancy">{{ __('services.business_consultancy') }}
                                    </option>
                                    <option value="Projects Monitoring and Evaluation">
                                        {{ __('services.monitoring_evaluation') }}
                                    </option>
                                    <option value="Web Media">{{ __('services.web_media') }}</option>
                                    <option value="Transport Services">{{ __('services.transport_services') }}</option>
                                    <option value="Accommodation Booking Services">
                                        {{ __('services.accommodation_booking_services') }}
                                    </option>
                                </select>
                                <label for="floatingSelect">{{ __('services.form_service') }}</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary w-100 h-100"
                                type="submit">{{ __('services.form_request_quote') }}</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/quote.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- articles Start -->
    @if(isset($recents) && count($recents) > 0)
        <div class="container-fluid py-6 px-5">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h1 class="display-5 mb-0">{{ __('home.latest_articles') }}</h1>
                <hr class="w-25 mx-auto bg-primary">
            </div>
            <div class="row g-5">
                @foreach ($recents as $articles)
                    <div class="col-lg-4">
                        <div class="articles-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('storage/' . $articles->thumbnail) }}" alt="thumbnail">
                            </div>
                            <div class="bg-secondary d-flex">
                                <div
                                    class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                                    <span>{{ $articles->dateArray()['day'] }}</span>
                                    <h5 class="text-uppercase m-0">{{ $articles->dateArray()['month'] }}</h5>
                                    <span>{{ $articles->dateArray()['year'] }}</span>
                                </div>
                                <div class="d-flex flex-column justify-content-center py-3 px-4">
                                    <div class="d-flex mb-2">
                                        <small class="text-uppercase me-3"><i
                                                class="bi bi-person me-2"></i>{{ $articles->author }}</small>
                                        <small class="text-uppercase me-3"><i
                                                class="bi bi-bookmarks me-2"></i>{{ $articles->category->name }}</small>
                                    </div>
                                    <a class="h4"
                                        href='{{ url("/articles/$articles->slug") }}'>{{ Str::limit($articles->title, 35, '...') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    <!-- articles End -->
@endsection