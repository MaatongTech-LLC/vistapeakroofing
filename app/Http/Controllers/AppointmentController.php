<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('appointments.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'customer_address' => 'required|string',
            'service_type' => 'required|in:consultation,inspection,estimate,maintenance,emergency',
            'preferred_datetime' => 'required|date|after:now',
            'alternative_datetime' => 'nullable|date|after:now',
            'description' => 'required|string',
            'priority' => 'required|in:low,medium,high,urgent',
        ]);

        $appointment = Appointment::create($validated);

        // Send notification email to admin
        // Mail::to(config('mail.admin_email'))->send(new NewAppointmentNotification($appointment));

        return redirect()->route('appointments.success')->with('appointment_number', $appointment->appointment_number);
    }

    public function success()
    {
        return view('appointments.success');
    }
}