<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\ContactRequests\ContactRequestResource;
use App\Infrastructure\Persistence\Eloquent\Models\ContactRequest;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class LatestLeads extends TableWidget
{
    protected static ?string $heading = 'Últimas Solicitudes';

    protected static ?int $sort = 4;

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                ContactRequest::query()
                    ->with('application')
                    ->latest()
                    ->limit(5)
            )
            ->columns([
                TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Correo'),
                TextColumn::make('company')
                    ->label('Empresa')
                    ->placeholder('—'),
                TextColumn::make('application.name')
                    ->label('Interés')
                    ->badge()
                    ->color('primary')
                    ->placeholder('General'),
                TextColumn::make('status')
                    ->label('Estado')
                    ->badge(),
                TextColumn::make('created_at')
                    ->label('Fecha')
                    ->since(),
            ])
            ->recordUrl(fn (ContactRequest $record) => ContactRequestResource::getUrl('edit', ['record' => $record]))
            ->paginated(false);
    }
}
