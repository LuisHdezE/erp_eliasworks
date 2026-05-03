<?php

namespace App\Filament\Widgets;

use App\Domain\Leads\Enums\ContactStatus;
use App\Infrastructure\Persistence\Eloquent\Models\Application;
use App\Infrastructure\Persistence\Eloquent\Models\ContactRequest;
use App\Infrastructure\Persistence\Eloquent\Models\Project;
use App\Infrastructure\Persistence\Eloquent\Models\Service;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $totalLeads = ContactRequest::count();
        $newLeads = ContactRequest::where('status', ContactStatus::New)->count();
        $wonLeads = ContactRequest::where('status', ContactStatus::Won)->count();
        $totalApps = Application::count();

        // Simple conversion rate
        $conversionRate = $totalLeads > 0 ? round(($wonLeads / $totalLeads) * 100, 1) : 0;

        // Leads last 7 days for chart
        $leadsPerDay = [];
        for ($i = 6; $i >= 0; $i--) {
            $leadsPerDay[] = ContactRequest::whereDate('created_at', now()->subDays($i))->count();
        }

        return [
            Stat::make('Solicitudes Nuevas', $newLeads)
                ->description('Pendientes de atención')
                ->descriptionIcon(Heroicon::OutlinedEnvelope)
                ->color('info')
                ->chart($leadsPerDay),

            Stat::make('Total Solicitudes', $totalLeads)
                ->description('Desde el inicio')
                ->descriptionIcon(Heroicon::OutlinedUsers)
                ->color('primary'),

            Stat::make('Tasa de Conversión', $conversionRate . '%')
                ->description($wonLeads . ' clientes ganados')
                ->descriptionIcon(Heroicon::OutlinedTrophy)
                ->descriptionColor($conversionRate > 20 ? 'success' : 'warning')
                ->color('success'),

            Stat::make('Aplicaciones', $totalApps)
                ->description('En catálogo')
                ->descriptionIcon(Heroicon::OutlinedRectangleStack)
                ->color('warning'),
        ];
    }
}
