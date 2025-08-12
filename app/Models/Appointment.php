<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'appointment_number', 'customer_name', 'customer_email', 'customer_phone',
        'customer_address', 'service_type', 'preferred_datetime', 'alternative_datetime',
        'description', 'status', 'priority', 'assigned_technician_id',
        'admin_notes', 'completion_notes', 'confirmed_datetime'
    ];

    protected $casts = [
        'preferred_datetime' => 'datetime',
        'alternative_datetime' => 'datetime',
        'confirmed_datetime' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($appointment) {
            $appointment->appointment_number = 'APT-' . date('Y') . '-' . str_pad(Appointment::whereYear('created_at', date('Y'))->count() + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function technician()
    {
        return $this->belongsTo(User::class, 'assigned_technician_id');
    }

    public function getServiceTypeDisplayAttribute()
    {
        return match($this->service_type) {
            'consultation' => 'Consultation',
            'inspection' => 'Roof Inspection',
            'estimate' => 'On-site Estimate',
            'maintenance' => 'Maintenance Service',
            'emergency' => 'Emergency Service',
            default => $this->service_type
        };
    }
}
