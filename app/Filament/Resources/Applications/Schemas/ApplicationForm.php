<?php

namespace App\Filament\Resources\Applications\Schemas;

use App\Domain\ApplicationCatalog\Enums\ApplicationStatus;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ApplicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)->schema([
                    Section::make('Información Básica')
                        ->schema([
                            TextInput::make('name')
                                ->label('Nombre')
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                            TextInput::make('slug')
                                ->required()
                                ->unique(ignoreRecord: true),

                            Select::make('application_category_id')
                                ->relationship('category', 'name')
                                ->label('Categoría')
                                ->required()
                                ->searchable()
                                ->preload(),

                            Textarea::make('short_description')
                                ->label('Descripción Corta')
                                ->required()
                                ->columnSpanFull()
                                ->maxLength(255),

                            MarkdownEditor::make('description')
                                ->label('Descripción Detallada')
                                ->required()
                                ->columnSpanFull(),

                            TagsInput::make('features')
                                ->label('Características')
                                ->columnSpanFull(),
                        ])->columnSpan(2),

                    Grid::make(1)->schema([
                        Section::make('Estado y Publicación')
                            ->schema([
                                Select::make('status')
                                    ->label('Estado')
                                    ->options(ApplicationStatus::class)
                                    ->required()
                                    ->default(ApplicationStatus::Prototype),

                                Toggle::make('is_published')
                                    ->label('Publicado')
                                    ->default(false),

                                Toggle::make('is_featured')
                                    ->label('Destacado')
                                    ->default(false),
                            ]),

                        Section::make('Multimedia')
                            ->schema([
                                FileUpload::make('main_image')
                                    ->label('Imagen Principal')
                                    ->image()
                                    ->directory('applications/main')
                                    ->imageEditor(),
                            ]),

                        Section::make('SEO')
                            ->schema([
                                TextInput::make('meta_title')
                                    ->label('Meta Título'),

                                Textarea::make('meta_description')
                                    ->label('Meta Descripción'),
                            ]),
                    ])->columnSpan(1),
                ]),
            ]);
    }
}
