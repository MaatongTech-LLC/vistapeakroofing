<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use App\Models\Quote;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        // Get current month data
        $currentMonth = now()->format('Y-m');
        $lastMonth = now()->subMonth()->format('Y-m');

        // Quotes statistics
        $totalQuotes = Quote::count();
        $monthlyQuotes = Quote::whereRaw("DATE_FORMAT(created_at, '%Y-%m') = ?", [$currentMonth])->count();
        $lastMonthQuotes = Quote::whereRaw("DATE_FORMAT(created_at, '%Y-%m') = ?", [$lastMonth])->count();
        $quotesGrowth = $lastMonthQuotes > 0 ? (($monthlyQuotes - $lastMonthQuotes) / $lastMonthQuotes * 100) : 0;

        // Appointments statistics
        $totalAppointments = Appointment::count();
        $monthlyAppointments = Appointment::whereRaw("DATE_FORMAT(created_at, '%Y-%m') = ?", [$currentMonth])->count();
        $lastMonthAppointments = Appointment::whereRaw("DATE_FORMAT(created_at, '%Y-%m') = ?", [$lastMonth])->count();
        $appointmentsGrowth = $lastMonthAppointments > 0 ? (($monthlyAppointments - $lastMonthAppointments) / $lastMonthAppointments * 100) : 0;

        // Revenue statistics
        $totalRevenue = Quote::whereIn('status', ['accepted', 'completed'])->sum('estimated_cost') ?? 0;
        $monthlyRevenue = Quote::whereIn('status', ['accepted', 'completed'])
            ->whereRaw("DATE_FORMAT(created_at, '%Y-%m') = ?", [$currentMonth])
            ->sum('estimated_cost') ?? 0;
        $lastMonthRevenue = Quote::whereIn('status', ['accepted', 'completed'])
            ->whereRaw("DATE_FORMAT(created_at, '%Y-%m') = ?", [$lastMonth])
            ->sum('estimated_cost') ?? 0;
        $revenueGrowth = $lastMonthRevenue > 0 ? (($monthlyRevenue - $lastMonthRevenue) / $lastMonthRevenue * 100) : 0;

        // Conversion rate
        $acceptedQuotes = Quote::where('status', 'accepted')->count();
        $conversionRate = $totalQuotes > 0 ? ($acceptedQuotes / $totalQuotes * 100) : 0;

        // Pending items
        $pendingQuotes = Quote::where('status', 'pending')->count();
        $pendingAppointments = Appointment::where('status', 'pending')->count();

        return [
            Stat::make('Total Quotes', $totalQuotes)
                ->description($quotesGrowth >= 0 ? "+{$quotesGrowth}% from last month" : "{$quotesGrowth}% from last month")
                ->descriptionIcon($quotesGrowth >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($quotesGrowth >= 0 ? 'success' : 'danger')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3]),

            Stat::make('Total Appointments', $totalAppointments)
                ->description($appointmentsGrowth >= 0 ? "+{$appointmentsGrowth}% from last month" : "{$appointmentsGrowth}% from last month")
                ->descriptionIcon($appointmentsGrowth >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($appointmentsGrowth >= 0 ? 'success' : 'danger')
                ->chart([4, 6, 2, 8, 1, 5, 3, 2]),

            Stat::make('Monthly Revenue', '$' . number_format($monthlyRevenue, 2))
                ->description($revenueGrowth >= 0 ? "+{$revenueGrowth}% from last month" : "{$revenueGrowth}% from last month")
                ->descriptionIcon($revenueGrowth >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($revenueGrowth >= 0 ? 'success' : 'danger')
                ->chart([15, 4, 10, 2, 12, 4, 12, 8]),

            Stat::make('Conversion Rate', number_format($conversionRate, 1) . '%')
                ->description('Quotes to accepted ratio')
                ->descriptionIcon('heroicon-m-chart-bar-square')
                ->color('info'),

            Stat::make('Pending Quotes', $pendingQuotes)
                ->description('Requiring attention')
                ->descriptionIcon('heroicon-m-clock')
                ->color($pendingQuotes > 10 ? 'warning' : 'success'),

            Stat::make('Pending Appointments', $pendingAppointments)
                ->description('Awaiting confirmation')
                ->descriptionIcon('heroicon-m-calendar')
                ->color($pendingAppointments > 5 ? 'warning' : 'success'),
        ];
    }

    protected function getColumns(): int
    {
        return 3;
    }
}
