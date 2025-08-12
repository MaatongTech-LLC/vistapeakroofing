<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'quote_number', 'customer_name', 'customer_email', 'customer_phone',
        'customer_address', 'service_type', 'roof_type', 'estimated_area',
        'description', 'special_requirements', 'estimated_cost', 'status',
        'priority', 'preferred_start_date', 'attachments', 'admin_notes'
    ];

    protected $casts = [
        'attachments' => 'array',
        'preferred_start_date' => 'date',
        'estimated_area' => 'decimal:2',
        'estimated_cost' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($quote) {
            $quote->quote_number = 'QT-' . date('Y') . '-' . str_pad(Quote::whereYear('created_at', date('Y'))->count() + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function getServiceTypeDisplayAttribute()
    {
        return match($this->service_type) {
            'roof_repair' => 'Roof Repair',
            'roof_replacement' => 'Roof Replacement',
            'roof_installation' => 'New Roof Installation',
            'roof_inspection' => 'Roof Inspection',
            'gutter_services' => 'Gutter Services',
            'emergency_repair' => 'Emergency Repair',
            default => $this->service_type
        };
    }

    public function getRoofTypeDisplayAttribute()
    {
        return match($this->roof_type) {
            'asphalt_shingles' => 'Asphalt Shingles',
            'metal' => 'Metal Roofing',
            'tile' => 'Tile Roofing',
            'slate' => 'Slate Roofing',
            'flat' => 'Flat Roofing',
            'other' => 'Other',
            default => $this->roof_type
        };
    }

    // Accessor to get just the file paths
    public function getAttachmentPathsAttribute()
    {
        if (!$this->attachments) {
            return [];
        }

        return collect($this->attachments)->map(function ($attachment) {
            return is_array($attachment) ? ($attachment['path'] ?? '') : $attachment;
        })->filter()->values()->toArray();
    }

    // Helper method to get attachment URLs
    public function getAttachmentUrlsAttribute()
    {
        return collect($this->attachment_paths)->map(function ($path) {
            return Storage::url($path);
        })->toArray();
    }
}
