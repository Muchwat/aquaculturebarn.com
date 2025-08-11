<div class="container-fluid bg-dark text-secondary p-5">
    <div class="row g-5">
        <div class="col-lg-4 col-md-6">
            <h3 class="text-white mb-4">{{ __('footer.grassroots_walkers') }}</h3>
            <div class="d-flex flex-column justify-content">
                <p>
                    @lang('footer.about_us_content')
                </p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <h3 class="text-white mb-4">{{ __('footer.get_in_touch') }}</h3>
            <p class="mb-2"><i class="bi bi-globe text-primary me-2"></i>{{ __('footer.grassroots_walkers') }}</p>
            <p class="mb-2"><i class="bi bi-house-door text-primary me-2"></i>Manyatta Business complex</p>
            <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Behind Manyatta Peace Market, Kisumu</p>
            <p class="mb-2"><i class="bi bi-envelope text-primary me-2"></i>mail@aquaculturebarn.com</p>
            <p class="mb-0"><i class="bi bi-phone text-primary me-2"></i>+254(0) 792 871 898</p>
        </div>

        <div class="col-lg-2 col-md-6">
            <h3 class="text-white mb-4">{{ __('footer.popular_links') }}</h3>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-secondary mb-2" href="{{ url('/') }}"><i
                        class="bi bi-arrow-right text-primary me-2"></i>{{ __('footer.home') }}</a>
                <a class="text-secondary mb-2" href="{{ url('/about') }}"><i
                        class="bi bi-arrow-right text-primary me-2"></i>{{ __('footer.about_us') }}</a>
                <a class="text-secondary mb-2" href="{{ url('/services') }}"><i
                        class="bi bi-arrow-right text-primary me-2"></i>{{ __('footer.services') }}</a>
                <a class="text-secondary mb-2" href="{{ url('/articles') }}"><i
                        class="bi bi-arrow-right text-primary me-2"></i>{{ __('footer.articles') }}</a>
                <a class="text-secondary" href="{{ url('/contact') }}"><i
                        class="bi bi-arrow-right text-primary me-2"></i>{{ __('footer.contact') }}</a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <h3 class="text-white mb-4">{{ __('footer.follow_us') }}</h3>
            <div class="d-flex">
                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2 d-flex align-items-center justify-content-center"
                    href="https://x.com/Aquaculturebarn"><i class="fab fa-twitter fw-normal"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2 d-flex align-items-center justify-content-center"
                    href="https://www.facebook.com/aquaculturebarn"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2 d-flex align-items-center justify-content-center"
                    href="https://www.linkedin.com/company/aquaculture-barn-limited/"><i
                        class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-circle d-flex align-items-center justify-content-center"
                    href="https://www.instagram.com/aquaculturebarn/"><i class="fab fa-instagram fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5"
    style="border-color: rgba(256, 256, 256, .1) !important;">
    <p class="m-0">{!! __('footer.rights_reserved') !!}</p>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('theme/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('theme/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('theme/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('theme/js/main.js') }}"></script>
</body>

</html>