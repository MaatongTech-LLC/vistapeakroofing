<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $projects = [
            [
                'title' => 'Modern Residential Roof Replacement',
                'description' => 'Complete roof replacement for a beautiful suburban home. We removed the old asphalt shingles and installed premium architectural shingles with improved ventilation system.',
                'short_description' => 'Complete roof replacement with premium architectural shingles',
                'location' => 'Downtown District',
                'completion_date' => now()->subMonths(2),
                'project_cost' => 15000.00,
                'client_name' => 'Johnson Family',
                'status' => 'completed',
                'materials_used' => [
                    ['material' => 'Architectural Shingles', 'quantity' => '35 squares', 'supplier' => 'GAF Materials'],
                    ['material' => 'Underlayment', 'quantity' => '35 squares', 'supplier' => 'GAF Materials'],
                    ['material' => 'Ridge Vents', 'quantity' => '40 linear feet', 'supplier' => 'Ridge-Guard']
                ],
                'duration_days' => 3,
                'is_featured' => true,
                'is_published' => true
            ],
            [
                'title' => 'Commercial Flat Roof Repair',
                'description' => 'Emergency repair and waterproofing of a commercial building flat roof. Identified and sealed multiple leak sources, applied protective coating.',
                'short_description' => 'Emergency commercial roof repair and waterproofing',
                'location' => 'Business Park',
                'completion_date' => now()->subWeeks(3),
                'project_cost' => 8500.00,
                'client_name' => 'Metro Office Complex',
                'status' => 'completed',
                'materials_used' => [
                    ['material' => 'EPDM Membrane', 'quantity' => '500 sq ft', 'supplier' => 'Firestone'],
                    ['material' => 'Roof Coating', 'quantity' => '10 gallons', 'supplier' => 'Henry Company']
                ],
                'duration_days' => 2,
                'is_featured' => true,
                'is_published' => true
            ],
            [
                'title' => 'Historic Home Slate Restoration',
                'description' => 'Careful restoration of a century-old slate roof maintaining historical authenticity while ensuring modern weatherproofing standards.',
                'short_description' => 'Historic slate roof restoration preserving architectural heritage',
                'location' => 'Historic Quarter',
                'completion_date' => now()->subMonths(4),
                'project_cost' => 25000.00,
                'client_name' => 'Heritage Foundation',
                'status' => 'completed',
                'materials_used' => [
                    ['material' => 'Welsh Slate Tiles', 'quantity' => '200 pieces', 'supplier' => 'Historic Materials Co'],
                    ['material' => 'Copper Flashing', 'quantity' => '150 linear feet', 'supplier' => 'Metal Roofing Supply']
                ],
                'duration_days' => 7,
                'is_featured' => true,
                'is_published' => true
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }

}
