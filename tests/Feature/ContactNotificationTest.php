<?php

namespace Tests\Feature;

use App\Events\ContactRequestSubmitted;
use App\Infrastructure\Persistence\Eloquent\Models\ContactRequest;
use App\Listeners\SendContactRequestNotification;
use App\Mail\ContactRequestReceived;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactNotificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_notification_targets_configured_real_email(): void
    {
        Mail::fake();

        $contactRequest = ContactRequest::create([
            'name' => 'Test Contact',
            'email' => 'visitor@example.com',
            'company' => null,
            'phone' => null,
            'whatsapp' => null,
            'message' => 'Necesito información sobre un proyecto de software.',
            'application_id' => null,
            'status' => 'new',
        ]);

        (new SendContactRequestNotification())->handle(
            new ContactRequestSubmitted($contactRequest)
        );

        Mail::assertSent(ContactRequestReceived::class, function (ContactRequestReceived $mail): bool {
            return $mail->hasTo(config('portfolio.contact.email'))
                && config('portfolio.contact.email') === 'luisitohe@gmail.com';
        });
    }
}
