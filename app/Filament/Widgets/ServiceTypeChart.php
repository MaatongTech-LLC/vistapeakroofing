<?php

namespace App\Filament\Widgets;

use App\Models\Quote;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class ServiceTypeChart extends ChartWidget
{
    protected static ?string $heading = 'Service Type Distribution';
    protected static ?int $sort = 3;
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $serviceTypes = Quote::select('service_type', DB::raw('count(*) as count'))
            ->groupBy('service_type')
            ->pluck('count', 'service_type')
            ->toArray();

        $labels = array_map(function($type) {
            return match($type) {
                'roof_repair' => 'Roof Repair',
                'roof_replacement' => 'Roof Replacement',
                'roof_installation' => 'New Installation',
                'roof_inspection' => 'Inspection',
                'gutter_services' => 'Gutter Services',
                'emergency_repair' => 'Emergency Repair',
                default => $type
            };
        }, array_keys($serviceTypes));

        return [
            'datasets' => [
                [
                    'data' => array_values($serviceTypes),
                    'backgroundColor' => [
                        '#3B82F6', // Blue
                        '#10B981', // Green
                        '#F59E0B', // Yellow
                        '#EF4444', // Red
                        '#8B5CF6', // Purple
                        '#F97316', // Orange
                    ],
                    'borderWidth' => 0,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => true,
                    'position' => 'bottom',
                ],
            ],
            'maintainAspectRatio' => false,
        ];
    }
}
