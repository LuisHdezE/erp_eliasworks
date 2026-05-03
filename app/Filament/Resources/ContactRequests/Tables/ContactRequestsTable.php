<?php

namespace App\Filament\Resources\ContactRequests\Tables;

use App\Domain\Leads\Enums\ContactStatus;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ContactRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Correo')
                    ->searchable(),
                TextColumn::make('whatsapp')
                    ->label('WhatsApp')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('application.name')
                    ->label('Interés')
                    ->badge()
                    ->color('primary')
                    ->placeholder('General'),
                SelectColumn::make('status')
                    ->label('Estado')
                    ->options(ContactStatus::class)
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Fecha')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options(ContactStatus::class),
                SelectFilter::make('application_id')
                    ->relationship('application', 'name')
                    ->label('Por Aplicación'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
