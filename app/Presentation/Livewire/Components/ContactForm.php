<?php

namespace App\Presentation\Livewire\Components;

use App\Domain\Contact\UseCases\SubmitContactRequestUseCase;
use App\Infrastructure\Persistence\Eloquent\Models\Application;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Url;
use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';

    public string $email = '';

    public string $company = '';
    public string $phone = '';
    public string $whatsapp = '';
    public string $message = '';

    #[Url(as: 'app')]
    public string $appSlug = '';

    public ?int $application_id = null;

    public ?Application $selectedApp = null;

    public bool $isSubmitted = false;

    public string $successMessage = '';

    protected array $rules = [
        'name' => 'required|min:3|max:100',
        'email' => 'required|email|max:150',
        'company' => 'nullable|max:100',
        'phone' => 'nullable|max:20',
        'whatsapp' => 'nullable|max:20',
        'message' => 'required|min:10|max:1000',
    ];

    protected array $messages = [
        'name.required' => 'El nombre es obligatorio.',
        'email.required' => 'El correo electrónico es obligatorio.',
        'email.email' => 'El formato del correo es inválido.',
        'message.required' => 'El mensaje es obligatorio.',
        'message.min' => 'El mensaje debe tener al menos 10 caracteres.',
    ];

    public function mount()
    {
        if ($this->appSlug) {
            $this->selectedApp = Application::where('slug', $this->appSlug)->first();
            if ($this->selectedApp) {
                $this->application_id = $this->selectedApp->id;
                $this->message = "Estoy interesado en conversar sobre: " . $this->selectedApp->name . ".\n\n";
            }
        }
    }

    public function submit()
    {
        $this->validate();

        $executed = RateLimiter::attempt(
            'contact-form:'.request()->ip(),
            3,
            function () {
                app(SubmitContactRequestUseCase::class)->execute([
                    'name' => $this->name,
                    'email' => $this->email,
                    'company' => $this->company,
                    'phone' => $this->phone,
                    'whatsapp' => $this->whatsapp,
                    'message' => $this->message,
                    'application_id' => $this->application_id,
                ]);

                $this->isSubmitted = true;
                $this->successMessage = 'Gracias por escribir. Recibí tu mensaje correctamente.';

                $this->reset(['name', 'email', 'company', 'phone', 'whatsapp', 'message']);
            },
            60 * 60
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
