<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function switch(Request $request, $locale)
    {   
        // Check if the requested locale is supported
        if (!in_array($locale, ['en', 'ja'])) {
            abort(400, 'Invalid language selected.');
        }

         // Set the application locale using the app helper function
         App::setLocale($locale);
         $request->session()->put('locale', $locale);

        // Redirect back to the previous page or a default page
        return Redirect::back();
    }
}
