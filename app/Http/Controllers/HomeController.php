<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show(Request $request, Blog $articles) {
        $query = $articles::where('published', true);
        $recents = $articles::latest()->take(3)->get();
        return view('home', compact('recents'));
    }
}
