<?php

namespace App\Filament\Resources\ApplicationCategories\Schemas;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ApplicationCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)->schema([
                    Section::make('Información')
                        ->schema([
                            TextInput::make('name')
                                ->label('Nombre')
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                            TextInput::make('slug')
                                ->required()
                                ->unique(ignoreRecord: true),

                            TextInput::make('icon')
                                ->label('Icono (Heroicon)')
                                ->default('heroicon-o-cube'),

                            Textarea::make('description')
                                ->label('Descripción')
                                ->columnSpanFull(),

                            TextInput::make('sort_order')
                                ->label('Orden')
                                ->numeric()
                                ->default(0),

                            Toggle::make('is_active')
                                ->label('Activo')
                                ->default(true),
                        ])->columnSpan(2),

                    Section::make('SEO')
                        ->schema([
                            TextInput::make('meta_title')
                                ->label('Meta Título'),

                            Textarea::make('meta_description')
                                ->label('Meta Descripción'),
                        ])->columnSpan(1),
                ]),
            ]);
    }
}
