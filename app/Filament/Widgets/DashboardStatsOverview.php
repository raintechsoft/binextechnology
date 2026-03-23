<?php

namespace App\Filament\Widgets;

use App\Models\Client;
use App\Models\Service;
use App\Models\ContactMessage;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Clients', Client::count())
                ->description('Total clients recorded')
                ->descriptionIcon('heroicon-m-users')
                ->color('primary'),
            Stat::make('Active Clients', Client::where('is_active', true)->count())
                ->description('Clients active on frontend')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),
            Stat::make('Total Services', Service::count())
                ->description('Active services provided')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('info'),
            Stat::make('Contact Messages', ContactMessage::count())
                ->description('Messages from website forms')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('warning'),
        ];
    }
}
