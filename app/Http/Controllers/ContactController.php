<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormNotification;
use App\Mail\NewQuoteNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function post(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        Mail::to(env('ADMIN_EMAIL'))->send(new ContactFormNotification($data));

        return redirect()->back()->with('success', __('We received your message and will get back to you as soon as possible.'));
    }
}
