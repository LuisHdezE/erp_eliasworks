<?php

namespace App\Filament\Resources\ContactRequests\Pages;

use App\Filament\Resources\ContactRequests\ContactRequestResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactRequests extends ListRecords
{
    protected static string $resource = ContactRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\Action::make('kanban')
                ->label('Ver Embudo')
                ->icon(\Filament\Support\Icons\Heroicon::OutlinedViewColumns)
                ->color('gray')
                ->url(ContactRequestResource::getUrl('kanban')),
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'todos' => \Filament\Schemas\Components\Tabs\Tab::make('Todos'),
            'nuevos' => \Filament\Schemas\Components\Tabs\Tab::make('Nuevos')
                ->modifyQueryUsing(fn ($query) => $query->where('status', \App\Domain\Leads\Enums\ContactStatus::New)),
            'en_proceso' => \Filament\Schemas\Components\Tabs\Tab::make('En Seguimiento')
                ->modifyQueryUsing(fn ($query) => $query->whereIn('status', [
                    \App\Domain\Leads\Enums\ContactStatus::Contacted,
                    \App\Domain\Leads\Enums\ContactStatus::InAnalysis,
                    \App\Domain\Leads\Enums\ContactStatus::ProposalSent,
                ])),
            'ganados' => \Filament\Schemas\Components\Tabs\Tab::make('Ganados')
                ->modifyQueryUsing(fn ($query) => $query->where('status', \App\Domain\Leads\Enums\ContactStatus::Won)),
            'perdidos' => \Filament\Schemas\Components\Tabs\Tab::make('Perdidos')
                ->modifyQueryUsing(fn ($query) => $query->where('status', \App\Domain\Leads\Enums\ContactStatus::Lost)),
        ];
    }
}
