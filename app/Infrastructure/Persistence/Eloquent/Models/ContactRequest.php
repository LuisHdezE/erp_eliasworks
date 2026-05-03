<?php

namespace App\Infrastructure\Persistence\Eloquent\Models;

use App\Domain\Leads\Enums\ContactStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContactRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'whatsapp',
        'company',
        'need_type',
        'budget_range',
        'message',
        'application_id',
        'status',
        'internal_notes',
        'responsible_id',
        'priority',
        'contacted_at',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'status' => ContactStatus::class,
        'contacted_at' => 'datetime',
    ];

    // — Relations —

    public function responsible(): BelongsTo
    {
        return $this->belongsTo(User::class, 'responsible_id');
    }

    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class);
    }

    // — Scopes —

    public function scopeNew($query)
    {
        return $query->where('status', ContactStatus::New);
    }

    public function scopeOpen($query)
    {
        return $query->whereNotIn('status', [
            ContactStatus::Won,
            ContactStatus::Lost,
            ContactStatus::Spam,
        ]);
    }
}
