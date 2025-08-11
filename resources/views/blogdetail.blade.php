@extends('index')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Article Detail</h1>
                <a href="{{ url('/articles') }}">Articles</a>
                <i class="bi bi-arrow-right text-primary me-2"></i>
                <a href="#">Detail</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- articles Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- articles Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 mb-5" src="{{ asset('storage/' . $articles->thumbnail) }}" alt="thumbnail">
                    <h1 class="mb-4">{{ $articles->title }}</h1>
                    <div class="d-flex flex-column justify-content-center py-2">
                        <div class="d-flex">
                            <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i>{{ $articles->author }}</small>
                            <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>{{$articles->category->name}}</small>
                            <small class="text-uppercase me-3"><i class="bi bi-calendar me-2"></i>{{$articles->created_at}}</small>
                        </div>
                    </div>
                    {!! $articles->content !!}
                </div>
                <!-- articles Detail End -->

                <!-- Comment List Start -->
                {{-- <div class="mb-5">
                    <h2 class="mb-4">3 Comments</h2>
                    <div class="d-flex mb-4">
                        <img src="img/user.jpg" class="img-fluid rounded-circle" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="img/user.jpg" class="img-fluid rounded-circle" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex ms-5 mb-4">
                        <img src="img/user.jpg" class="img-fluid rounded-circle" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                </div> --}}
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                {{-- <div class="bg-secondary p-5">
                    <h2 class="mb-4">Leave a comment</h2>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control bg-white border-0" placeholder="Your Name"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control bg-white border-0" placeholder="Your Email"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control bg-white border-0" placeholder="Website"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                </div> --}}
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <form action="/articles" method="GET">
                    <div class="mb-5">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" name="search_query" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </form>
                <!-- Search Form End -->
                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <div class="d-flex flex-column justify-content-start bg-secondary p-4">
                        @foreach ($categories as $id => $name)
                            <a class="h5 mb-3" href='{{ url("/articles?category=$id") }}'>
                                <i class="bi bi-arrow-right text-primary me-2"></i> {{ $name }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <!-- Category End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Tag Cloud</h2>
                    <div class="d-flex flex-wrap m-n1">
                        @foreach ($tags as $id => $name)
                            <a href='{{ url("/articles?tag=$id") }}' class="btn btn-secondary m-1">{{ $name }}</a>
                        @endforeach
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Recent Post</h2>
                    @foreach ($recents as $recent)
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="{{ asset('storage/' . $recent->thumbnail) }}"
                                style="width: 100px; height: 100px; object-fit: cover;" alt="thumbnail">
                            <a href='{{ url("/articles/$recent->slug") }}' class="h5 d-flex align-items-center bg-secondary px-3 mb-0">
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
    <!-- articles End -->
@endsection
