@extends('index')
@section('content')
    {{-- Add custom styles for the hover effect and typography on product cards --}}
    @push('styles')
        <style>
            .product-card-link {
                display: block;
                text-decoration: none;
                color: inherit;
            }

            .product-card-link .product-item {
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                height: 100%;
                display: flex;
                flex-direction: column;
            }

            .product-card-link:hover .product-item {
                transform: translateY(-5px);
                box-shadow: 0 1rem 1.5rem rgba(0, 0, 0, 0.15) !important;
            }

            .product-item .bg-secondary {
                flex-grow: 1;
                display: flex;
                flex-direction: column;
            }

            .product-item .product-content {
                flex-grow: 1;
                display: flex;
                flex-direction: column;
            }

            .product-title {
                transition: color 0.3s ease-in-out;
                font-size: 1.25rem;
                /* h5 */
                font-weight: 600;
                /* semibold */
                color: #fff;
                margin-bottom: 0.5rem;
            }

            .product-card-link:hover .product-title {
                color: var(--bs-primary) !important;
            }

            .product-description {
                font-size: 0.9rem;
                color: #313131;
                /* Softer gray for readability */
                line-height: 1.5;
                margin-bottom: 1rem;
                flex-grow: 1;
                /* Allows description to fill space, pushing price down */
            }

            .product-footer {
                margin-top: auto;
                /* Pushes this to the bottom of the flex container */
            }

            .product-price {
                font-size: 1.75rem;
                /* Larger font size for emphasis */
                font-weight: 700;
                /* Bold */
                color: var(--bs-primary);
            }
        </style>
    @endpush

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">{{ __('header.products') }}</h1>
                <a href="{{ url('/') }}">{{ __('header.home') }}</a>
                <i class="bi bi-arrow-right text-primary me-2"></i>
                <a href="{{ url('/products') }}">{{ __('header.products') }}</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Products Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <!-- Product Listing Start -->
            <div class="col-lg-8">
                <!-- Search Form Start -->
                <form action="/products" method="GET" class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3 rounded-l-full focus:ring-primary focus:border-primary"
                            name="search_query" placeholder="{{ __('products.search_placeholder') }}">
                        <button class="btn btn-primary px-4 rounded-r-full"><i class="bi bi-search"></i></button>
                    </div>
                </form>
                <!-- Search Form End -->

                <div class="row g-5">
                    @if(isset($products) && count($products) > 0)
                        @foreach($products as $product)
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                {{-- The entire card is now a single clickable link --}}
                                <a href='{{ url("/products/$product->slug") }}' class="product-card-link">
                                    <div class="product-item">
                                        <div class="position-relative overflow-hidden">
                                            <img class="img-fluid w-100"
                                                src="{{ asset('storage/' . ($product->images[0] ?? 'https://placehold.co/600x400/cccccc/333333?text=No+Image')) }}"
                                                alt="{{ $product->name }}">
                                        </div>
                                        <div class="bg-secondary d-flex p-4">
                                            <div class="product-content">
                                                <div class="d-flex mb-2">
                                                    @if($product->category)
                                                        <small class="text-uppercase me-3"><i
                                                                class="bi bi-bookmarks me-2"></i>{{ $product->category->name }}</small>
                                                    @endif
                                                </div>
                                                <h5 class="product-title">{{ Str::limit($product->name, 35, '...') }}</h5>
                                                <p class="product-description">
                                                    {{ Str::limit(strip_tags($product->description), 70, '...') }}
                                                </p>
                                                <div class="product-footer">
                                                    <span class="product-price">KSh {{ number_format($product->price, 2) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="col-12 text-center">
                            <p class="text-lg text-gray-600">{{ __('products.no_products_found') }}</p>
                        </div>
                    @endif

                    {{-- Pagination links --}}
                    @if(isset($products))
                        <div class="col-12 mt-5">
                            {{ $products->links() }}
                        </div>
                    @endif
                </div>
            </div>
            <!-- Product Listing End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
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
    <!-- Products End -->
@endsection