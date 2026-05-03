<?php

namespace App\Filament\Resources\ContactRequests\Schemas;

use App\Domain\Leads\Enums\ContactStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)->schema([
                    Section::make('Información del Cliente')
                        ->schema([
                            TextInput::make('name')
                                ->label('Nombre')
                                ->required(),
                            TextInput::make('email')
                                ->label('Correo')
                                ->email()
                                ->required(),
                            TextInput::make('phone')
                                ->label('Teléfono'),
                            TextInput::make('whatsapp')
                                ->label('WhatsApp'),
                            TextInput::make('company')
                                ->label('Empresa'),
                        ])->columnSpan(2),
                    
                    Section::make('Estado y Seguimiento')
                        ->schema([
                            Select::make('status')
                                ->label('Estado')
                                ->options(ContactStatus::class)
                                ->required()
                                ->default(ContactStatus::New),
                            Select::make('application_id')
                                ->relationship('application', 'name')
                                ->label('Aplicación Interesada')
                                ->placeholder('Ninguna en específico')
                                ->searchable()
                                ->preload(),
                            Select::make('responsible_id')
                                ->relationship('responsible', 'name')
                                ->label('Responsable')
                                ->searchable()
                                ->preload(),
                        ])->columnSpan(1),

                    Section::make('Mensaje y Notas')
                        ->schema([
                            Textarea::make('message')
                                ->label('Mensaje del Cliente')
                                ->rows(5)
                                ->readOnly(),
                            Textarea::make('internal_notes')
                                ->label('Notas Internas')
                                ->rows(5)
                                ->placeholder('Añade notas sobre el seguimiento...'),
                        ])->columnSpanFull(),
                ]),
            ]);
    }
}
