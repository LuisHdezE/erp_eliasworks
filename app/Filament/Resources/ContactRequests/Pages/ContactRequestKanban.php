<?php

namespace App\Filament\Resources\ContactRequests\Pages;

use App\Domain\Leads\Enums\ContactStatus;
use App\Filament\Resources\ContactRequests\ContactRequestResource;
use App\Infrastructure\Persistence\Eloquent\Models\ContactRequest;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Collection;

class ContactRequestKanban extends Page
{
    protected static string $resource = ContactRequestResource::class;

    protected string $view = 'filament.resources.contact-requests.pages.contact-request-kanban';

    protected static ?string $title = 'Embudo de Clientes';

    protected static ?string $navigationLabel = 'Embudo (Kanban)';

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\Action::make('list')
                ->label('Ver Listado')
                ->icon(\Filament\Support\Icons\Heroicon::OutlinedTableCells)
                ->color('gray')
                ->url(ContactRequestResource::getUrl('index')),
        ];
    }

    public function getStatuses(): array
    {
        return ContactStatus::cases();
    }

    public function getRecords(): Collection
    {
        return ContactRequest::with('application')->get();
    }

    public function updateRecordStatus(int $recordId, string $status): void
    {
        $record = ContactRequest::find($recordId);
        $record->update(['status' => $status]);

        $this->dispatch('record-updated');
    }
}
