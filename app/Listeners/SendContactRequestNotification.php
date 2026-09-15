<?php

namespace App\Listeners;

use App\Events\ContactRequestSubmitted;
use App\Mail\ContactRequestReceived;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendContactRequestNotification implements ShouldQueue
{
    public function handle(ContactRequestSubmitted $event): void
    {
        Mail::to(config('portfolio.contact.email'))->send(
            new ContactRequestReceived($event->contactRequest)
        );
    }
}
