<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function show(Request $request, Career $career) {
        $careers = $career::all();
        return view('career', compact('careers'));
    }
}
