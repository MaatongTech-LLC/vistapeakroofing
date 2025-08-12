<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $services = [
            [
                'name' => 'Roof Installation',
                'description' => 'Complete new roof installation for residential and commercial properties. We use only premium materials and provide comprehensive warranties.',
                'short_description' => 'Professional new roof installation with premium materials',
                'features' => ['Premium Materials', 'Comprehensive Warranty', 'Professional Installation', 'Free Estimates'],
                'starting_price' => 8.50,
                'price_unit' => 'per sq ft',
                'estimated_duration' => 3,
                'category' => 'installation',
                'is_popular' => true,
                'is_active' => true,
                'sort_order' => 1,
                'icon' => 'heroicon-o-home'
            ],
            [
                'name' => 'Roof Repair',
                'description' => 'Expert roof repair services for leaks, storm damage, and wear-and-tear issues. Quick response times and reliable solutions.',
                'short_description' => 'Fast and reliable roof repair services',
                'features' => ['Emergency Service', 'Same-Day Response', 'Warranty on Repairs', 'Insurance Claims Help'],
                'starting_price' => 150.00,
                'price_unit' => 'per hour',
                'estimated_duration' => 1,
                'category' => 'repair',
                'is_popular' => true,
                'is_active' => true,
                'sort_order' => 2,
                'icon' => 'heroicon-o-wrench-screwdriver'
            ],
            [
                'name' => 'Gutter Installation & Repair',
                'description' => 'Complete gutter systems including installation, repair, and cleaning. Protecting your home from water damage.',
                'short_description' => 'Complete gutter solutions and maintenance',
                'features' => ['Seamless Gutters', 'Leaf Protection', 'Downspout Installation', 'Regular Maintenance'],
                'starting_price' => 12.00,
                'price_unit' => 'linear ft',
                'estimated_duration' => 2,
                'category' => 'installation',
                'is_popular' => true,
                'is_active' => true,
                'sort_order' => 3,
                'icon' => 'heroicon-o-cloud-rain'
            ],
            [
                'name' => 'Emergency Roof Services',
                'description' => '24/7 emergency roofing services for storm damage, leaks, and urgent repairs. We respond quickly to protect your property.',
                'short_description' => '24/7 emergency roofing response services',
                'features' => ['24/7 Availability', 'Storm Damage Response', 'Temporary Repairs', 'Insurance Documentation'],
                'starting_price' => 200.00,
                'price_unit' => 'per hour',
                'estimated_duration' => 1,
                'category' => 'emergency',
                'is_popular' => true,
                'is_active' => true,
                'sort_order' => 4,
                'icon' => 'heroicon-o-bolt'
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
