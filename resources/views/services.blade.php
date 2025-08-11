@extends('index')
@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">{{ __('services.page_title') }}</h1>
                <a href="{{ url('/') }}">{{ __('services.home') }}</a>
                <i class="bi bi-arrow-right text-primary me-2"></i>
                <a href="{{ url('/services') }}">{{ __('services.page_title') }}</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-6 py-6 px-5">
                <h1 class="display-5 mb-4">{{ __('services.elevate_projects') }} <span class="text-primary">{{ __('services.tailored_solutions') }}</span></h1>
                <h4 class="text-primary mb-4">{{ __('services.unlock_potential') }}</h4>
                <p class="mb-4">{{ __('services.about_content') }}</p>
                <br>
                <h1 class="display-5 mb-4">{{ __('services.request_quotation_heading') }}</h1>
                <p class="mb-4">{{ __('services.request_quotation_content') }}</p>
                <p class="mb-4">{{ __('services.fill_out_form') }}</p>
                <form action="{{ url('/save/quotation') }}" method="GET">
                    <div class="row gx-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" id="form-floating-1" placeholder="{{ __('services.form_full_name') }}">
                                <label for="form-floating-1">{{ __('services.form_full_name') }}</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="form-floating-2" placeholder="{{ __('services.form_email_address') }}">
                                <label for="form-floating-2">{{ __('services.form_email_address') }}</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select" name="service" id="floatingSelect" aria-label="{{ __('services.form_service') }}">
                                    <option value="Academic Research" selected>{{ __('services.academic_research') }}</option>
                                    <option value="Market Research">{{ __('services.market_research') }}</option>
                                    <option value="Video-Based Field Work">{{ __('services.video_field_work') }}</option>
                                    <option value="Business Consultancy">{{ __('services.business_consultancy') }}</option>
                                    <option value="Projects Monitoring and Evaluation">{{ __('services.monitoring_evaluation') }}</option>
                                    <option value="Web Media">{{ __('services.web_media') }}</option>
                                    <option value="Transport Services">{{ __('services.transport_services') }}</option>
                                    <option value="Accommodation Booking Services">{{ __('services.accommodation_booking_services') }}</option>
                                </select>
                                <label for="floatingSelect">{{ __('services.form_service') }}</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary w-100 h-100" type="submit">{{ __('services.form_request_quote') }}</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fas fa-search fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>{{ __('services.research_heading') }}</h3>
                            <p class="mb-0">{{ __('services.research_content') }}</p>
                        </div>
                    </div>

                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fas fa-briefcase fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>{{ __('services.consultancy_heading') }}</h3>
                            <p class="mb-0">{{ __('services.consultancy_content') }}</p>
                        </div>
                    </div>

                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fas fa-check-circle fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>{{ __('services.monitoring_evaluation_heading') }}</h3>
                            <p class="mb-0">{{ __('services.monitoring_evaluation_content') }}</p>
                        </div>
                    </div>

                    <div class="d-flex text-white mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">
                            <i class="fas fa-globe fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>{{ __('services.web_media_heading') }}</h3>
                            <p class="mb-0">{{ __('services.web_media_content') }}</p>
                        </div>
                    </div>

                    <div class="d-flex text-white">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                            style="width: 60px; height: 60px;">>
                            <i class="fas fa-video fs-4"></i>
                        </div>
                        <div class="ps-4">
                            <h3>{{ __('services.video_field_work_heading') }}</h3>
                            <p class="mb-0">{{ __('services.video_field_work_content') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid pt-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">{{ __('services.offer_heading') }}</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            <!-- Service Card: Academic Research -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-search fa-2x"></i>
                    </div>
                    <h3 class="mb-3">{{ __('services.academic_research') }}</h3>
                    <p class="mb-0">
                        {{ __('services.academic_research_content') }}
                    </p>
                </div>
            </div>

            <!-- Service Card: Market Research -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-chart-bar fa-2x"></i>
                    </div>
                    <h3 class="mb-3">{{ __('services.market_research') }}</h3>
                    <p class="mb-0">
                        {{ __('services.market_research_content') }}
                    </p>
                </div>
            </div>

            <!-- Service Card: Business Consultancy -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-briefcase fa-2x"></i>
                    </div>
                    <h3 class="mb-3">{{ __('services.business_consultancy') }}</h3>
                    <p class="mb-0">
                        {{ __('services.business_consultancy_content') }}
                    </p>
                </div>
            </div>

            <!-- Service Card: Projects Monitoring and Evaluation -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-tasks fa-2x"></i>
                    </div>
                    <h3 class="mb-3">{{ __('services.monitoring_evaluation') }}</h3>
                    <p class="mb-0">
                        {{ __('services.monitoring_evaluation_content') }}
                    </p>
                </div>
            </div>

            <!-- Service Card: Web Media -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-globe fa-2x"></i>
                    </div>
                    <h3 class="mb-3">{{ __('services.web_media') }}</h3>
                    <p class="mb-0">
                        {{ __('services.web_media_content') }}
                    </p>
                </div>
            </div>

            <!-- Service Card: Transport Services -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px;">
                        <i class="fa fa-bus fa-2x"></i>
                    </div>
                    <h3 class="mb-3">{{ __('services.transport_services') }}</h3>
                    <p class="mb-0">
                        {{ __('services.transport_services_content') }}
                    </p>
                </div>
            </div>

        </div>
    </div>
    <!-- Services End -->
    <br><br>
@endsection
