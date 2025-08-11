<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;

class ContactController extends Controller
{
    function show(Request $request, Contact $contact)
    {   
        if ($request->filled(['name', 'email', 'subject', 'content'])) {
            $contact::create($request->all());
            Session::flash('success', 'Form submitted successfully!');
            Mail::to(Config::get('mail.mailers.smtp.username'))->send(new ContactMail($request->all()));
            return redirect()->back();
        }

        return view('contact');
    }
}
