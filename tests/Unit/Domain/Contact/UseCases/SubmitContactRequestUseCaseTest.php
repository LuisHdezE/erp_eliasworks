<?php

namespace Tests\Unit\Domain\Contact\UseCases;

use App\Domain\Contact\UseCases\SubmitContactRequestUseCase;
use App\Domain\Leads\Enums\ContactStatus;
use App\Events\ContactRequestSubmitted;
use App\Infrastructure\Persistence\Eloquent\Models\ContactRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class SubmitContactRequestUseCaseTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_creates_a_contact_request_and_dispatches_event(): void
    {
        Event::fake();

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'company' => 'Acme Corp',
            'message' => 'This is a test message.',
        ];

        $useCase = new SubmitContactRequestUseCase;
        $contactRequest = $useCase->execute($data);

        $this->assertInstanceOf(ContactRequest::class, $contactRequest);
        $this->assertEquals('John Doe', $contactRequest->name);
        $this->assertEquals(ContactStatus::New, $contactRequest->status);

        $this->assertDatabaseHas('contact_requests', [
            'email' => 'john@example.com',
        ]);

        Event::assertDispatched(ContactRequestSubmitted::class, function ($event) use ($contactRequest) {
            return $event->contactRequest->id === $contactRequest->id;
        });
    }
}
