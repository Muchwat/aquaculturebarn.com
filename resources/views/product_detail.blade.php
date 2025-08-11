@extends('index')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">{{ $product->name }}</h1>
                <a href="{{ url('/') }}">{{ __('header.home') }}</a>
                <i class="bi bi-arrow-right text-primary me-2"></i>
                <a href="{{ url('/products') }}">{{ __('header.products') }}</a>
                <i class="bi bi-arrow-right text-primary me-2"></i>
                <a href="#">{{ Str::limit($product->name, 20, '...') }}</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Product Detail Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Product Image Gallery Start -->
                <div class="mb-5">
                    @if(isset($product->images) && count($product->images) > 0)
                        <!-- Main Product Image -->
                        <div class="mb-4">
                            <img class="img-fluid w-100 mb-5" id="mainProductImage"
                                src="{{ asset('storage/' . $product->images[0]) }}" alt="{{ $product->name }}">
                        </div>

                        <!-- Thumbnail Gallery -->
                        <div class="flex flex-wrap gap-3 justify-center">
                            @foreach($product->images as $index => $imagePath)
                                <img class="img-fluid rounded-lg shadow-sm cursor-pointer border-2 border-transparent hover:border-primary transition-all duration-300"
                                    src="{{ asset('storage/' . $imagePath) }}" alt="{{ $product->name }} Thumbnail {{ $index + 1 }}"
                                    onclick="document.getElementById('mainProductImage').src = this.src;"
                                    style="width: 100px; height: 100px; object-fit: cover;">
                            @endforeach
                        </div>
                    @else
                        <div class="mb-4 text-center">
                            <img class="img-fluid w-100 mb-5"
                                src="https://placehold.co/800x600/cccccc/333333?text=No+Image+Available"
                                alt="No Image Available">
                            <p class="text-gray-500 mt-2">{{ __('products.no_images_available') }}</p>
                        </div>
                    @endif
                </div>
                <!-- Product Image Gallery End -->

                <!-- Product Content Start -->
                <div class="mb-5"> {{-- Removed bg-secondary p-5 rounded-lg shadow-md here to match articles-detail --}}
                    <h1 class="mb-4">{{ $product->name }}</h1>
                    <div class="d-flex flex-column justify-content-center py-2"> {{-- Consistent with articles detail meta
                        --}}
                        <div class="d-flex">
                            <small class="text-uppercase me-3 text-gray-400"><i class="bi bi-currency-dollar me-2"></i>KSh
                                {{ number_format($product->price, 2) }}</small>
                            @if($product->category)
                                <small class="text-uppercase me-3 text-gray-400"><i
                                        class="bi bi-bookmarks me-2"></i>{{ $product->category->name }}</small>
                            @endif
                            <small class="text-uppercase me-3 text-gray-400"><i
                                    class="bi bi-calendar me-2"></i>{{ $product->created_at->format('d M Y') }}</small>
                        </div>
                    </div>
                    <hr class="border-gray-600 my-4">
                    <h3 class="mb-3">{{ __('products.description_heading') }}</h3>
                    <div class="text-gray-300 leading-relaxed">
                        {!! $product->description !!}
                    </div>
                </div>
                <!-- Product Content End -->

            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <form action="/products" method="GET">
                    <div class="mb-5">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" name="search_query"
                                placeholder="{{ __('products.search_placeholder') }}">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </form>
                <!-- Search Form End -->

                <!-- Product Categories Start -->
                <div class="mb-5">
                    <h2 class="mb-4">{{ __('products.categories_heading') }}</h2>
                    <div class="d-flex flex-column justify-content-start bg-secondary p-4">
                        @if(isset($categories) && count($categories) > 0)
                            @foreach($categories as $id => $name)
                                <a class="h5 mb-3 text-grey hover:text-primary transition duration-300"
                                    href='{{ url("/products?category=$id") }}'>
                                    <i class="bi bi-arrow-right text-primary me-2"></i> {{$name}}
                                </a>
                            @endforeach
                        @else
                            <p class="text-gray-400">{{ __('products.no_categories') }}</p>
                        @endif
                    </div>
                </div>
                <!-- Product Categories End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Product Detail End -->
@endsection