<?php

namespace App\Http\Controllers;

use App\Mail\QuotationMail;
use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;

class QuotationController extends Controller
{
    function save(Request $request, Quotation $quotation)
    {
        if ($request->filled(['name', 'email', 'service'])) {
            Mail::to(Config::get('mail.mailers.smtp.username'))->send(new QuotationMail($request->all()));
            $quotation::create($request->all());
            Session::flash('success', 'Form submitted successfully!');
        }

        return redirect()->back();
    }
}
