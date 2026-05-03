<?php

namespace App\Domain\Leads\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum ContactStatus: string implements HasLabel, HasColor
{
    case New = 'new';
    case Contacted = 'contacted';
    case InAnalysis = 'in_analysis';
    case ProposalSent = 'proposal_sent';
    case Won = 'won';
    case Lost = 'lost';
    case Spam = 'spam';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::New => 'Nuevo',
            self::Contacted => 'Contactado',
            self::InAnalysis => 'En análisis',
            self::ProposalSent => 'Propuesta enviada',
            self::Won => 'Ganado',
            self::Lost => 'Perdido',
            self::Spam => 'Spam',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::New => 'info',
            self::Contacted => 'primary',
            self::InAnalysis => 'warning',
            self::ProposalSent => 'warning',
            self::Won => 'success',
            self::Lost => 'danger',
            self::Spam => 'gray',
        };
    }
}
