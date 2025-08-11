@extends('index')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">{{ __('header.news') }}</h1>
                <a href="{{ url('/') }}">{{ __('header.home') }}</a>
                <i class="bi bi-arrow-right text-primary me-2"></i>
                <a href="{{ url('/news') }}">{{ __('header.news') }}</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    @if(isset($news) && count($news) > 0)
    <!-- Articles Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <!-- Articles List Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                    @foreach($news as $article)
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="articles-item">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('storage/' . $article->thumbnail) }}" alt="thumbnail">
                                </div>
                                <div class="bg-secondary d-flex">
                                    <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                                        <span>{{ $article->dateArray()['day']}}</span>
                                        <h5 class="text-uppercase m-0">{{ $article->dateArray()['month']}}</h5>
                                        <span>{{ $article->dateArray()['year']}}</span>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center py-3 px-4">
                                        <div class="d-flex mb-2">
                                            <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i>{{ $article->author }}</small>
                                        </div>
                                        <a class="h4" href='{{ url("/news/$article->slug") }}'>{{ Str::limit($article->title, 35, '...') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{ $news->links() }}
                </div>
            </div>
            <!-- Articles List End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <form action="/articles" method="GET">
                    <div class="mb-5">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" name="search_query" placeholder="{{ __('articles.search_placeholder') }}">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </form>
                <!-- Search Form End -->

                {{-- <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">{{ __('articles.categories_heading') }}</h2>
                    <div class="d-flex flex-column justify-content-start bg-secondary p-4">
                        @foreach($categories as $id => $name)
                            <a class="h5 mb-3" href='{{ url("/articles?category=$id") }}'>
                                <i class="bi bi-arrow-right text-primary me-2"></i> {{$name}}
                            </a>
                        @endforeach
                    </div>
                </div>
                <!-- Category End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h2 class="mb-4">{{ __('articles.tags_heading') }}</h2>
                    <div class="d-flex flex-wrap m-n1">
                        @foreach($tags as $id => $name)
                            <a href='{{ url("/articles?tag=$id") }}' class="btn btn-secondary m-1">{{$name}}</a>
                        @endforeach
                    </div>
                </div>
                <!-- Tags End --> --}}

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h2 class="mb-4">{{ __('articles.recent_posts_heading') }}</h2>
                    @foreach ($recents as $recent)
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="{{ asset('storage/' . $recent->thumbnail) }}"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="thumbnail">
                            <a href='{{ url("/news/$recent->slug") }}'
                                class="h5 d-flex align-items-center bg-secondary px-3 mb-0">
                                {{ Str::limit($recent->title, 35, '...') }}
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- Recent Post End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Articles End -->
    @endif
@endsection
