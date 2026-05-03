<?php

namespace App\Domain\Contact\UseCases;

use App\Events\ContactRequestSubmitted;
use App\Infrastructure\Persistence\Eloquent\Models\ContactRequest;
use Illuminate\Support\Facades\Event;

class SubmitContactRequestUseCase
{
    public function execute(array $data): ContactRequest
    {
        $contactRequest = ContactRequest::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'company' => $data['company'] ?? null,
            'phone' => $data['phone'] ?? null,
            'whatsapp' => $data['whatsapp'] ?? null,
            'message' => $data['message'],
            'application_id' => $data['application_id'] ?? null,
            'status' => 'new',
        ]);

        // Disparar evento para notificaciones asíncronas
        Event::dispatch(new ContactRequestSubmitted($contactRequest));

        return $contactRequest;
    }
}
