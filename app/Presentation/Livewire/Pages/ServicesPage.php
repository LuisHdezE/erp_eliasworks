<?php

namespace App\Presentation\Livewire\Pages;

use App\Infrastructure\Persistence\Eloquent\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class ServicesPage extends Component
{
    public function render()
    {
        $services = Service::where('is_published', true)->orderBy('sort_order')->get();

        return view('livewire.pages.services-page', compact('services'));
    }
}
