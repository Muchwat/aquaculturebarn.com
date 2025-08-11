<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;

class NewsController extends Controller
{
    public function __construct()
    {
        Paginator::defaultView('custom-pagination');
    }

    public function show(Request $request, News $news)
    {
        $query = $news::where('published', true);

        // if (isset($request->category)) {
        //     $query = $query->where('category_id', $request->category);
        // }

        // if (isset($request->tag)) {
        //     $query = $query->whereJsonContains('tags', $request->tag);
        // }

        if (isset($request->search_query)) {
            $searchTerm = $request->search_query;

            if ($searchTerm) {
                $columns = Schema::getColumnListing($news->getTable());
                $columns = array_diff($columns, ['tags']);

                $query->where(function ($query) use ($columns, $searchTerm) {
                    foreach ($columns as $column) {
                        $query->orWhere($column, 'like', '%' . $searchTerm . '%');
                    }
                });
            }
        }


        // $categories = Category::latest()->pluck('name', 'id');
        // $tags = Tag::latest()->pluck('name', 'id');
        $recents = $news::latest()->take(3)->get();
        $news = $query->latest()->paginate(6);

        return view('news', compact('news', 'recents'));
    }

    public function detail(Request $request, News $articles) {
        $articles = $articles->where([
            'published' => true,
            'slug' => $request->slug
        ])->first();

        // $categories = Category::latest()->pluck('name', 'id');
        // $tags = Tag::latest()->pluck('name', 'id');
        $recents = $articles::latest()->take(3)->get();

        return view('newsdetail', compact('articles', 'recents'));
    }
}
