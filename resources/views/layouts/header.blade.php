<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ __('header.website_title') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="{{ __('header.keywords') }}">
    <meta name="description" content="{{ __('header.description') }}">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="{{ __('header.website_title') }}">
    <meta property="og:description" content="{{ __('header.description') }}">
    <meta property="og:image" content="{{ asset('img/logo.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('header.website_title') }}">
    <meta name="twitter:description" content="{{ __('header.description') }}">
    <meta name="twitter:image" content="{{ asset('img/logo.jpg') }}">
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Favicon -->
    <link href="/favicon.ico" rel="icon">
    <!-- Add other favicon links here -->

    <!-- Google Web Fonts -->
    <!-- Include your Google Fonts link here -->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('theme/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">
</head>

<div>
    <!-- Topbar Start -->
    <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body py-2 pe-3 border-end"
                        href="{{ url('/faqs') }}"><small>{{ __('header.faqs') }}</small></a>
                    <a class="text-body py-2 px-3 border-end"
                        href="{{ url('/contact') }}"><small>{{ __('header.support') }}</small></a>
                    <a class="text-body py-2 ps-3"
                        href="{{ url('/career') }}"><small>{{ __('header.career') }}</small></a>
                </div>
            </div>
            <div class="col-md-6 text-center text-sm-end" style="font-size:small;">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>{{ __('header.contact_email') }}</p>
                    </div>
                    <div class="me-3 pe-3 py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>{{ __('header.contact_phone') }}</p>
                    </div>
                    {{-- <div class="py-2">
                        <a href="{{ route('lang.switch', ['locale' => 'en']) }}">English</a>
                        <a href="{{ route('lang.switch', ['locale' => 'ja']) }}">Japanese</a>
                    </div> --}}

                    {{-- <div class="dropdown" style="margin: 0px;">
                        <button class="btn btn-sm btn-transparent dropdown-toggle" type="button" id="languageDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            @if (app()->getLocale() === 'en')
                            <img src="{{ asset('flags/en.png') }}" alt="English Flag" class="me-2" height="15">
                            <span class="text-white" style="font-weight: 400">En</span>
                            @else
                            <img src="{{ asset('flags/ja.png') }}" alt="Japanese Flag" class="me-2" height="15">
                            <span class="text-white" style="font-weight: 400">Ja</span>
                            @endif
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'en']) }}">
                                    <img src="{{ asset('flags/en.png') }}" alt="English Flag" class="me-2" height="15">
                                    <span class="text-primary">English</span>
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'ja']) }}">
                                    <img src="{{ asset('flags/ja.png') }}" alt="Kenyan Flag" class="me-2" height="15">
                                    <span class="text-primary">Swahili</span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        @mobile
        <a href="{{ url('/') }}" class="navbar-brand p-0"><img class="img-fluid" src="{{ url('/img/logo.jpg') }}"
                style="width: 200px" alt="The Grassroots Walkers"></a>
        @elsemobile
        <a href="{{ url('/') }}" class="navbar-brand py-3"><img class="img-fluid" src="{{ url('/img/logo.jpg') }}"
                style="height: 50px;" alt="The Grassroots Walkers"></a>
        @endmobile

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">
                    {{ __('header.home') }}
                </a>

                <a href="{{ url('/about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">
                    {{ __('header.about_us') }}
                </a>

                <a href="{{ url('/services') }}"
                    class="nav-item nav-link {{ request()->is('services') ? 'active' : '' }}">
                    {{ __('header.our_services') }}
                </a>

                <a href="{{ url('/articles') }}"
                    class="nav-item nav-link {{ request()->is('articles') || Route::currentRouteName() == 'articles-detail' ? 'active' : '' }}">
                    {{ __('header.articles') }}
                </a>

                <a href="{{ url('/news') }}"
                    class="nav-item nav-link {{ request()->is('news') || Route::currentRouteName() == 'news-detail' ? 'active' : '' }}">
                    {{ __('header.news') }}
                </a>

                <a href="{{ url('/products') }}"
                    class="nav-item nav-link {{ request()->is('products') || Route::currentRouteName() == 'products-detail' ? 'active' : '' }}">
                    {{ __('header.products') }}
                </a>

                {{-- <a href="{{ url('/work-records') }}"
                    class="nav-item nav-link {{ request()->is('work-records') ? 'active' : '' }}">
                    {{ __('header.work_records') }}
                </a> --}}

                <a href="{{ url('/contact') }}"
                    class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">
                    {{ __('header.contact') }}
                </a>
            </div>

            {{-- @mobile
            <br>
            <hr>
            <div class="d-flex align-items-center">
                <div>{{ __('header.select_language') }}: </div>
                <div class="dropdown">
                    <button class="btn btn-transparent dropdown-toggle" type="button" id="languageDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        @if (app()->getLocale() === 'en')
                        <img src="{{ asset('flags/en.png') }}" alt="English Flag" class="me-2" height="15">
                        <span style="font-weight: 400">English</span>
                        @else
                        <img src="{{ asset('flags/ja.png') }}" alt="Japanese Flag" class="me-2" height="15">
                        <span style="font-weight: 400">Japanese</span>
                        @endif
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'en']) }}">
                                <img src="{{ asset('flags/en.png') }}" alt="English Flag" class="me-2" height="15">
                                <span class="text-primary">English</span>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'ja']) }}">
                                <img src="{{ asset('flags/ja.png') }}" alt="Japanese Flag" class="me-2" height="15">
                                <span class="text-primary">Japanese</span>
                            </a>
                        </li>
                        <!-- Add more languages as needed -->
                    </ul>
                </div>
            </div>
            @endmobile --}}

            {{-- @tablet
            <br>
            <hr>
            <div class="d-flex align-items-center">
                <div>{{ __('header.select_language') }}: </div>
                <div class="dropdown">
                    <button class="btn btn-transparent dropdown-toggle" type="button" id="languageDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        @if (app()->getLocale() === 'en')
                        <img src="{{ asset('flags/en.png') }}" alt="English Flag" class="me-2" height="15">
                        <span style="font-weight: 400">English</span>
                        @else
                        <img src="{{ asset('flags/ja.png') }}" alt="Japanese Flag" class="me-2" height="15">
                        <span style="font-weight: 400">Japanese</span>
                        @endif
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'en']) }}">
                                <img src="{{ asset('flags/en.png') }}" alt="English Flag" class="me-2" height="15">
                                <span class="text-primary">English</span>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'ja']) }}">
                                <img src="{{ asset('flags/ja.png') }}" alt="Japanese Flag" class="me-2" height="15">
                                <span class="text-primary">Japanese</span>
                            </a>
                        </li>
                        <!-- Add more languages as needed -->
                    </ul>
                </div>
            </div>
            @endtablet --}}
        </div>
    </nav>
    <!-- Navbar End -->