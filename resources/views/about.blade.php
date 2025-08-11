@extends('index')
@section('content')
    @push('styles')
        <style>
            .team-item .team-social {
                position: absolute;
                top: 1.5rem;
                right: 1.5rem;
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
            }

            .team-item .team-social a.btn {
                background-color: #fff;
                color: var(--bs-primary);
                border-radius: 50%;
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.2rem;
                opacity: 0;
                transform: scale(0.8);
                transition: all 0.3s ease;
            }

            .team-item:hover .team-social a.btn {
                opacity: 1;
                transform: scale(1);
            }

            .team-item .team-social a.btn:hover {
                background-color: var(--bs-primary);
                color: #fff;
            }
        </style>
    @endpush

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">{{ __('about.about_us_title') }}</h1>
                <a href="/">{{ __('about.home_link') }}</a>
                <i class="bi bi-arrow-right text-primary me-2"></i>
                <a href="{{ url('/about') }}">{{ __('about.about_link') }}</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-12 py-6 px-5">
                <div class="text-center mx-auto mb-5" style="max-width: 1200px;">
                    <h1 class="display-5 mb-4">{{__('about.page_header_title')}} <span
                            class="text-primary">{{__('about.company_name')}}</span></h1>
                    <h4 class="text-primary mb-4">{{ __('about.drive_success') }}</h4>
                    <p class="mb-4" style="text-align: justify;">{{ __('about.company_description') }}</p>
                    <p class="mb-4" style="text-align: justify;">{{ __('about.research_services') }}</p>
                    <p class="mb-4" style="text-align: justify;">{{ __('about.inform_decisions') }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">{{ __('about.meet_ceo_title') }}</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>

        @if(isset($teamMembers) && $teamMembers->count() > 0)
            <div class="row g-5">
                @foreach($teamMembers as $member)
                    <div class="col-lg-3">
                        <div class="team-item position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                            <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                                <h3 class="text-white">{{ $member->name }}</h3>
                                <p class="text-white text-uppercase mb-0">{{ $member->position }}</p>
                            </div>
                            {{-- Social Links --}}
                            <div class="team-social">
                                @if($member->twitter_url)
                                    <a class="btn" href="{{ $member->twitter_url }}" target="_blank"><i class="bi bi-twitter"></i></a>
                                @endif
                                @if($member->facebook_url)
                                    <a class="btn" href="{{ $member->facebook_url }}" target="_blank"><i class="bi bi-facebook"></i></a>
                                @endif
                                @if($member->linkedin_url)
                                    <a class="btn" href="{{ $member->linkedin_url }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center">
                <p>{{ __('about.no_team_members_found') }}</p>
            </div>
        @endif
    </div>
    <!-- Team End -->
@endsection