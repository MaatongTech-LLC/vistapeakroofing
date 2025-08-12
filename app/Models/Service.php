<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'short_description',
        'images',
        'features',
        'starting_price',
        'price_unit',
        'estimated_duration',
        'category',
        'is_popular',
        'is_active',
        'sort_order',
        'icon'
    ];

    protected $casts = [
        'images' => 'array',
        'features' => 'array',
        'starting_price' => 'decimal:2',
        'is_popular' => 'boolean',
        'is_active' => 'boolean'
    ];

    // Accessor for formatted starting price
    protected function formattedStartingPrice(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => $attributes['starting_price']
                ? '$' . number_format($attributes['starting_price'], 2) . ($attributes['price_unit'] ? ' ' . $attributes['price_unit'] : '')
                : null,
        );
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopePopular($query)
    {
        return $query->where('is_popular', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }
}
