<?php

namespace App\Presentation\Livewire\Components;

use App\Domain\Contact\UseCases\SubmitContactRequestUseCase;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';

    public string $email = '';

    public string $company = '';

    public string $message = '';

    public bool $isSubmitted = false;

    public string $successMessage = '';

    protected array $rules = [
        'name' => 'required|min:3|max:100',
        'email' => 'required|email|max:150',
        'company' => 'nullable|max:100',
        'message' => 'required|min:10|max:1000',
    ];

    protected array $messages = [
        'name.required' => 'El nombre es obligatorio.',
        'email.required' => 'El correo electrónico es obligatorio.',
        'email.email' => 'El formato del correo es inválido.',
        'message.required' => 'El mensaje es obligatorio.',
        'message.min' => 'El mensaje debe tener al menos 10 caracteres.',
    ];

    public function submit()
    {
        $this->validate();

        $executed = RateLimiter::attempt(
            'contact-form:'.request()->ip(),
            3, // Max 3 requests
            function () {
                app(SubmitContactRequestUseCase::class)->execute([
                    'name' => $this->name,
                    'email' => $this->email,
                    'company' => $this->company,
                    'message' => $this->message,
                ]);

                $this->isSubmitted = true;
                $this->successMessage = '¡Gracias por contactarnos! Hemos recibido tu mensaje y te responderemos a la brevedad.';

                $this->reset(['name', 'email', 'company', 'message']);
            },
            60 * 60 // 1 hour block if they exceed
        );

        if (! $executed) {
            $this->addError('email', 'Has enviado demasiados mensajes. Por favor, intenta más tarde.');
        }
    }

    public function render()
    {
        return view('livewire.components.contact-form');
    }
}
