<?php

namespace App\Http\Controllers;

use App\Mail\NewQuoteNotification;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function create()
    {
        return view('quotes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'customer_address' => 'required|string',
            'service_type' => 'required|in:roof_repair,roof_replacement,roof_installation,roof_inspection,gutter_services,emergency_repair',
            'roof_type' => 'nullable|in:asphalt_shingles,metal,tile,slate,flat,other',
            'estimated_area' => 'nullable|numeric|min:0',
            'description' => 'required|string',
            'special_requirements' => 'nullable|string',
            'preferred_start_date' => 'nullable|date|after:today',
            'priority' => 'required|in:low,medium,high,urgent',
            'attachments.*' => 'nullable|file|max:10240|mimes:jpeg,png,pdf'
        ]);

        $attachments = [];
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                $path = $file->store('quote-attachments', 'public');
                $attachments[] = [
                    'name' => $file->getClientOriginalName(),
                    'path' => $path,
                    'size' => $file->getSize()
                ];
            }
        }

        $validated['attachments'] = $attachments;

        $quote = Quote::create($validated);

        // Send notification email to admin
        Mail::to(env('ADMIN_EMAIL'))->send(new NewQuoteNotification($quote));

        return redirect()->route('home')->with('success', __('Your quote has been sent successfully! We will contact you soon.'));
    }

}
