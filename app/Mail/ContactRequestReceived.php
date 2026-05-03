<?php

namespace App\Mail;

use App\Infrastructure\Persistence\Eloquent\Models\ContactRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactRequestReceived extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public ContactRequest $contactRequest
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nueva Solicitud de Contacto - EliasWorks',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact-request',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
