<?php

namespace App\Filament\Widgets;

use App\Models\ContactMessage;
use Filament\Widgets\ChartWidget;
use Carbon\Carbon;

class ContactMessagesChart extends ChartWidget
{
    protected ?string $heading = 'Messages Received (Last 6 Months)';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $data = [];
        $labels = [];
        
        for ($i = 5; $i >= 0; $i--) {
            $month = Carbon::now()->subMonths($i);
            $labels[] = $month->format('M Y');
            $data[] = ContactMessage::whereYear('created_at', $month->year)
                                    ->whereMonth('created_at', $month->month)
                                    ->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Contact Messages',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
