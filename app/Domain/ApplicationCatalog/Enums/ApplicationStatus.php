<?php

namespace App\Domain\ApplicationCatalog\Enums;

enum ApplicationStatus: string
{
    case Idea = 'idea';
    case Prototype = 'prototype';
    case InDevelopment = 'in_development';
    case Available = 'available';
    case Archived = 'archived';

    public function label(): string
    {
        return match ($this) {
            self::Idea => 'Idea',
            self::Prototype => 'Prototipo',
            self::InDevelopment => 'En desarrollo',
            self::Available => 'Disponible',
            self::Archived => 'Archivada',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::Idea => 'gray',
            self::Prototype => 'warning',
            self::InDevelopment => 'info',
            self::Available => 'success',
            self::Archived => 'danger',
        };
    }
}
