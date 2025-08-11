<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     * Handles search queries and category filtering.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Start a new query for the Product model
        $query = Product::query();

        // Apply search filter if a search_query is present in the request
        if ($request->has('search_query') && !empty($request->search_query)) {
            $searchQuery = $request->search_query;
            $query->where('name', 'like', '%' . $searchQuery . '%')
                ->orWhere('description', 'like', '%' . $searchQuery . '%');
        }

        // Apply category filter if a category ID is present in the request
        if ($request->has('category') && !empty($request->category)) {
            $categoryId = $request->category;
            $query->where('product_category_id', $categoryId);
        }

        // Paginate the results. Adjust the number (e.g., 8) as needed.
        $products = $query->paginate(8);

        // Get all product categories for the sidebar filter
        // pluck('name', 'id') creates an associative array [id => name]
        $categories = ProductCategory::pluck('name', 'id');

        // Get the 3 most recent products for the sidebar
        $recentProducts = Product::latest()->take(3)->get();

        // Return the 'products' view, passing the fetched data
        return view('products', compact('products', 'categories', 'recentProducts'));
    }

    /**
     * Display the specified product.
     *
     * @param  string  $slug The slug of the product to display.
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // Find the product by its slug, or throw a 404 error if not found
        $product = Product::where('slug', $slug)->firstOrFail();

        // Get the 3 most recent products for the sidebar (similar to news detail page)
        $recentProducts = Product::latest()->take(3)->get();

        // Get all product categories for the sidebar (if needed on the detail page)
        $categories = ProductCategory::pluck('name', 'id');

        // Return a 'product_detail' view (you'll need to create this view later)
        // passing the product, recent products, and categories
        return view('product_detail', compact('product', 'recentProducts', 'categories'));
    }
}

