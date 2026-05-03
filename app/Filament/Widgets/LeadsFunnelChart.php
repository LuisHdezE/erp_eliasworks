<?php

namespace App\Filament\Widgets;

use App\Domain\Leads\Enums\ContactStatus;
use App\Infrastructure\Persistence\Eloquent\Models\ContactRequest;
use Filament\Widgets\ChartWidget;

class LeadsFunnelChart extends ChartWidget
{
    protected ?string $heading = 'Embudo de Ventas';

    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = 1;

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getData(): array
    {
        $statuses = ContactStatus::cases();
        $labels = [];
        $values = [];
        $colors = [];

        $colorMap = [
            'info'    => 'rgba(59, 130, 246, 0.8)',
            'primary' => 'rgba(99, 102, 241, 0.8)',
            'warning' => 'rgba(245, 158, 11, 0.8)',
            'success' => 'rgba(34, 197, 94, 0.8)',
            'danger'  => 'rgba(239, 68, 68, 0.8)',
            'gray'    => 'rgba(107, 114, 128, 0.8)',
        ];

        foreach ($statuses as $status) {
            $labels[] = $status->getLabel();
            $values[] = ContactRequest::where('status', $status)->count();
            $colors[] = $colorMap[$status->getColor()] ?? 'rgba(99, 102, 241, 0.8)';
        }

        return [
            'datasets' => [
                [
                    'label' => 'Solicitudes',
                    'data' => $values,
                    'backgroundColor' => $colors,
                    'borderRadius' => 6,
                ],
            ],
            'labels' => $labels,
        ];
    }
}
