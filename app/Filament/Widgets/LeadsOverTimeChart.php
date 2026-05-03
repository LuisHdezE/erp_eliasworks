<?php

namespace App\Filament\Widgets;

use App\Infrastructure\Persistence\Eloquent\Models\ContactRequest;
use Filament\Widgets\ChartWidget;

class LeadsOverTimeChart extends ChartWidget
{
    protected ?string $heading = 'Solicitudes por Semana';

    protected static ?int $sort = 3;

    protected int | string | array $columnSpan = 1;

    protected function getType(): string
    {
        return 'line';
    }

    protected function getData(): array
    {
        $weeks = [];
        $counts = [];

        for ($i = 11; $i >= 0; $i--) {
            $start = now()->subWeeks($i)->startOfWeek();
            $end = now()->subWeeks($i)->endOfWeek();
            $weeks[] = $start->format('d M');
            $counts[] = ContactRequest::whereBetween('created_at', [$start, $end])->count();
        }

        return [
            'datasets' => [
                [
                    'label' => 'Solicitudes',
                    'data' => $counts,
                    'fill' => true,
                    'borderColor' => 'rgba(99, 102, 241, 1)',
                    'backgroundColor' => 'rgba(99, 102, 241, 0.1)',
                    'tension' => 0.4,
                ],
            ],
            'labels' => $weeks,
        ];
    }
}
