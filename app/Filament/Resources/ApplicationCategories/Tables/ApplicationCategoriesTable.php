<?php

namespace App\Filament\Resources\ApplicationCategories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class ApplicationCategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('icon')
                    ->label('Icono')
                    ->searchable(),
                TextColumn::make('sort_order')
                    ->label('Orden')
                    ->sortable(),
                ToggleColumn::make('is_active')
                    ->label('Activo')
                    ->sortable(),
                TextColumn::make('applications_count')
                    ->counts('applications')
                    ->label('Aplicaciones'),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->filters([
                //
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
