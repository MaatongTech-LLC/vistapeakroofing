<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'short_description',
        'images',
        'location',
        'completion_date',
        'project_cost',
        'client_name',
        'status',
        'materials_used',
        'duration_days',
        'is_featured',
        'is_published'
    ];

    protected $casts = [
        'images' => 'array',
        'materials_used' => 'array',
        'completion_date' => 'date',
        'project_cost' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_published' => 'boolean'
    ];

    // Accessor for formatted cost
    protected function formattedCost(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => $attributes['project_cost']
                ? '$' . number_format($attributes['project_cost'], 2)
                : null,
        );
    }

    protected function materialsUsedFormatted(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => collect($attributes['materials_used'] ?? [])
                ->map(fn ($material) => [
                    'material' => $material['material'] ?? '',
                    'quantity' => $material['quantity'] ?? '',
                    'supplier' => $material['supplier'] ?? '',
                    'display' => ($material['material'] ?? '') .
                        (isset($material['quantity']) ? " ({$material['quantity']})" : '') .
                        (isset($material['supplier']) ? " - {$material['supplier']}" : '')
                ])
        );
    }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }
}
