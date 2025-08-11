@extends('index')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">{{ __('career.career') }}</h1>
                <a href="/">{{ __('career.home') }}</a>
                <i class="bi bi-arrow-right text-primary me-2"></i>
                <a href="{{ url('/career') }}">{{ __('career.career') }}</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-12 py-6 px-5">
                <div class="text-justify mx-auto mb-5" style="max-width: 1200px;">
                    @foreach ($careers as $career)
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"> <i class="fas fa-briefcase"></i> {{ $career->title }}</h4>
                                    <p class="card-text"><strong>{{ __('career.type') }}:</strong> {{ $career->type }}</p>
                                    <p class="card-text">{!! $career->description !!}</p>
                                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{ $career->location }}</p>

                                    @isset($career->salary)
                                        <p class="card-text"><i class="fas fa-money-bill-wave"></i>  KSH {{ number_format($career->salary, 2) }}</p>
                                    @endisset

                                    <p class="card-text"><i class="far fa-calendar-alt"></i> {{ $career->closing_date }}</p>
                                </div>
                            </div>
                        </div><br>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <!-- About End -->
@endsection
