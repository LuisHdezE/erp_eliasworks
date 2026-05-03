<?php

namespace Tests\Feature\Presentation\Livewire;

use App\Events\ContactRequestSubmitted;
use App\Presentation\Livewire\Components\ContactForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_renders_successfully(): void
    {
        Livewire::test(ContactForm::class)
            ->assertStatus(200);
    }

    public function test_it_validates_required_fields(): void
    {
        Livewire::test(ContactForm::class)
            ->call('submit')
            ->assertHasErrors(['name', 'email', 'message']);
    }

    public function test_it_validates_email_format(): void
    {
        Livewire::test(ContactForm::class)
            ->set('name', 'John Doe')
            ->set('email', 'not-an-email')
            ->set('message', 'Test message')
            ->call('submit')
            ->assertHasErrors(['email' => 'email']);
    }

    public function test_it_submits_successfully_and_dispatches_event(): void
    {
        Event::fake();

        Livewire::test(ContactForm::class)
            ->set('name', 'Jane Doe')
            ->set('email', 'jane@example.com')
            ->set('company', 'Tech Co')
            ->set('message', 'I am interested in your services.')
            ->call('submit')
            ->assertHasNoErrors()
            ->assertSet('isSubmitted', true)
            ->assertSee('Gracias por contactarnos');

        $this->assertDatabaseHas('contact_requests', [
            'email' => 'jane@example.com',
            'company' => 'Tech Co',
        ]);

        Event::assertDispatched(ContactRequestSubmitted::class);
    }
}
