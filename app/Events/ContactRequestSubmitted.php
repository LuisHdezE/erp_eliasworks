<?php

namespace App\Events;

use App\Infrastructure\Persistence\Eloquent\Models\ContactRequest;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ContactRequestSubmitted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public ContactRequest $contactRequest
    ) {}
}
