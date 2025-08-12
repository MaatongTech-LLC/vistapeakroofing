<?php

namespace App\Filament\Widgets;

use App\Models\Quote;
use Filament\Widgets\ChartWidget;

class QuotesChart extends ChartWidget
{
    protected static ?string $heading = 'Quotes Overview';
    protected static ?int $sort = 2;

    public ?string $filter = '12months';

    protected function getData(): array
    {
        $filter = $this->filter;

        $data = match ($filter) {
            '7days' => $this->getDataForDays(7),
            '30days' => $this->getDataForDays(30),
            '12months' => $this->getDataForMonths(12),
            default => $this->getDataForMonths(12),
        };

        return [
            'datasets' => [
                [
                    'label' => 'Total Quotes',
                    'data' => $data['totals'],
                    'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
                    'borderColor' => 'rgb(59, 130, 246)',
                    'borderWidth' => 2,
                    'fill' => true,
                ],
                [
                    'label' => 'Accepted Quotes',
                    'data' => $data['accepted'],
                    'backgroundColor' => 'rgba(34, 197, 94, 0.1)',
                    'borderColor' => 'rgb(34, 197, 94)',
                    'borderWidth' => 2,
                    'fill' => true,
                ],
            ],
            'labels' => $data['labels'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getFilters(): ?array
    {
        return [
            '7days' => 'Last 7 days',
            '30days' => 'Last 30 days',
            '12months' => 'Last 12 months',
        ];
    }

    private function getDataForDays(int $days): array
    {
        $labels = [];
        $totals = [];
        $accepted = [];

        for ($i = $days - 1; $i >= 0; $i--) {
            $date = now()->subDays($i);
            $labels[] = $date->format('M j');

            $dayTotal = Quote::whereDate('created_at', $date)->count();
            $dayAccepted = Quote::whereDate('created_at', $date)
                ->where('status', 'accepted')
                ->count();

            $totals[] = $dayTotal;
            $accepted[] = $dayAccepted;
        }

        return [
            'labels' => $labels,
            'totals' => $totals,
            'accepted' => $accepted,
        ];
    }

    private function getDataForMonths(int $months): array
    {
        $labels = [];
        $totals = [];
        $accepted = [];

        for ($i = $months - 1; $i >= 0; $i--) {
            $date = now()->subMonths($i);
            $labels[] = $date->format('M Y');

            $monthTotal = Quote::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count();

            $monthAccepted = Quote::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->where('status', 'accepted')
                ->count();

            $totals[] = $monthTotal;
            $accepted[] = $monthAccepted;
        }

        return [
            'labels' => $labels,
            'totals' => $totals,
            'accepted' => $accepted,
        ];
    }
}
