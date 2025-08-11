<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class BlogController extends Controller
{
    public function __construct()
    {
        Paginator::defaultView('custom-pagination');
    }

    public function show(Request $request, Blog $articles)
    {
        $query = $articles::where('published', true);

        if (isset($request->category)) {
            $query = $query->where('category_id', $request->category);
        }

        if (isset($request->tag)) {
            $query = $query->whereJsonContains('tags', $request->tag);
        }

        if (isset($request->search_query)) {
            $searchTerm = $request->search_query;

            if ($searchTerm) {
                $columns = Schema::getColumnListing($articles->getTable());
                $columns = array_diff($columns, ['tags']);

                $query->where(function ($query) use ($columns, $searchTerm) {
                    foreach ($columns as $column) {
                        $query->orWhere($column, 'like', '%' . $searchTerm . '%');
                    }
                });
            }
        }

        $blogs = $query->latest()->paginate(6);

        $categories = Category::latest()->pluck('name', 'id');
        $tags = Tag::latest()->pluck('name', 'id');
        $recents = $articles::latest()->take(3)->get();

        return view('blog', compact('blogs', 'categories', 'tags', 'recents'));
    }

    public function detail(Request $request, Blog $articles) {
        $articles = $articles->where([
            'published' => true,
            'slug' => $request->slug
        ])->first();

        $categories = Category::latest()->pluck('name', 'id');
        $tags = Tag::latest()->pluck('name', 'id');
        $recents = $articles::latest()->take(3)->get();

        return view('blogdetail', compact('articles', 'categories', 'tags', 'recents'));
    }
}
