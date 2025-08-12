@extends('index')
@section('content')
    @push('styles')
        <style>
            .team-item {
                cursor: pointer;
            }

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

            .modal-body .img-fluid {
                max-height: 400px;
                width: 100%;
                object-fit: cover;
            }

            .partner-logo-item {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 1rem;
                background-color: #fff;
                border-radius: 0.5rem;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
                height: 100px;
                text-decoration: none;
            }

            /* CSS for partner logos is now simplified */
            a.partner-logo-item img,
            div.partner-logo-item img {
                max-width: 100%;
                /* Prevent wide logos from overflowing */
                object-fit: contain;
                filter: grayscale(100%);
                transition: filter 0.3s ease;
            }

            a.partner-logo-item:hover img {
                filter: grayscale(0%);
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
                        <div class="team-item position-relative overflow-hidden" data-bs-toggle="modal"
                            data-bs-target="#teamMemberModal" data-name="{{ $member->name }}"
                            data-position="{{ $member->position }}" data-image="{{ asset('storage/' . $member->image) }}"
                            data-description="{{ $member->description }}" data-twitter="{{ $member->twitter_url }}"
                            data-facebook="{{ $member->facebook_url }}" data-linkedin="{{ $member->linkedin_url }}">
                            <img class="img-fluid w-100" src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                            <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                                <h3 class="text-white">{{ $member->name }}</h3>
                                <p class="text-white text-uppercase mb-0">{{ $member->position }}</p>
                            </div>
                            <div class="team-social">
                                @if($member->twitter_url)<a class="btn" href="{{ $member->twitter_url }}" target="_blank"
                                rel="noopener noreferrer"><i class="bi bi-twitter"></i></a>@endif
                                @if($member->facebook_url)<a class="btn" href="{{ $member->facebook_url }}" target="_blank"
                                rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>@endif
                                @if($member->linkedin_url)<a class="btn" href="{{ $member->linkedin_url }}" target="_blank"
                                rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a>@endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center">
                <p>Our team is growing! Check back soon for new member profiles.</p>
            </div>
        @endif
    </div>
    <!-- Team End -->

    <!-- Partners Start -->
    <div class="container-fluid py-6 px-5 bg-secondary">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Our Partners</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        @if(isset($partners) && $partners->count() > 0)
            <div class="row g-4 justify-content-center">
                @foreach($partners as $partner)
                    <div class="col-lg-3 col-md-3 col-6 d-flex align-items-stretch">
                        @if($partner->website_url)
                            <a href="{{ $partner->website_url }}" target="_blank" rel="noopener noreferrer"
                                class="partner-logo-item w-100 d-flex align-items-center justify-content-center"
                                style="height: 140px; background-color: #fff; border-radius: 0.5rem; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05); text-decoration: none; transition: all 0.3s ease;">
                                <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}"
                                    style="height: 100px; width: auto; max-width: calc(100% - 30px); padding: 15px; filter: grayscale(100%); opacity: 0.8; transition: all 0.3s ease;"
                                    onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1'"
                                    onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.8'">
                            </a>
                        @else
                            <div class="partner-logo-item w-100 d-flex align-items-center justify-content-center"
                                style="height: 140px; background-color: #fff; border-radius: 0.5rem; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
                                <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}"
                                    style="height: 100px; width: auto; max-width: calc(100% - 30px); padding: 15px; filter: grayscale(100%); opacity: 0.8; transition: all 0.3s ease;"
                                    onmouseover="this.style.filter='grayscale(0%)'; this.style.opacity='1'"
                                    onmouseout="this.style.filter='grayscale(100%)'; this.style.opacity='0.8'">
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center">
                <p>We are proud to collaborate with leading organizations. Our partners will be listed here soon.</p>
            </div>
        @endif
    </div>
    <!-- Partners End -->

    <!-- Team Member Modal Start -->
    <div class="modal fade" id="teamMemberModal" tabindex="-1" aria-labelledby="teamMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teamMemberModalLabel">Member Details</h5><button type="button"
                        class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-md-5"><img id="modal-image" src="" class="img-fluid rounded" alt="Team Member">
                        </div>
                        <div class="col-md-7 d-flex flex-column">
                            <h2 id="modal-name" class="text-primary"></h2>
                            <h4 id="modal-position" class="mb-3"></h4>
                            <div id="modal-description" class="text-muted"></div>
                            <div id="modal-social-links" class="mt-auto pt-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Member Modal End -->

    @push('scripts')
        <script>
            const teamMemberModal = document.getElementById('teamMemberModal');
            teamMemberModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const name = button.getAttribute('data-name');
                const position = button.getAttribute('data-position');
                const image = button.getAttribute('data-image');
                const description = button.getAttribute('data-description');
                const twitter = button.getAttribute('data-twitter');
                const facebook = button.getAttribute('data-facebook');
                const linkedin = button.getAttribute('data-linkedin');
                const modalTitle = teamMemberModal.querySelector('.modal-title');
                const modalImage = teamMemberModal.querySelector('#modal-image');
                const modalName = teamMemberModal.querySelector('#modal-name');
                const modalPosition = teamMemberModal.querySelector('#modal-position');
                const modalDescription = teamMemberModal.querySelector('#modal-description');
                const modalSocials = teamMemberModal.querySelector('#modal-social-links');
                modalTitle.textContent = name;
                modalImage.src = image;
                modalName.textContent = name;
                modalPosition.textContent = position;
                modalDescription.innerHTML = description;
                modalSocials.innerHTML = '';
                let socialLinksHtml = '<div class="d-flex gap-2">';
                if (twitter) { socialLinksHtml += `<a href="${twitter}" target="_blank" class="btn btn-outline-primary"><i class="bi bi-twitter"></i> Twitter</a>`; }
                if (facebook) { socialLinksHtml += `<a href="${facebook}" target="_blank" class="btn btn-outline-primary"><i class="bi bi-facebook"></i> Facebook</a>`; }
                if (linkedin) { socialLinksHtml += `<a href="${linkedin}" target="_blank" class="btn btn-outline-primary"><i class="bi bi-linkedin"></i> LinkedIn</a>`; }
                socialLinksHtml += '</div>';
                if (twitter || facebook || linkedin) { modalSocials.innerHTML = socialLinksHtml; }
            });
        </script>
    @endpush
@endsection