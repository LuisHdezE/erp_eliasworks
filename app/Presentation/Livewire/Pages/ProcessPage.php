<?php

namespace App\Presentation\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class ProcessPage extends Component
{
    public function render()
    {
        return view('livewire.pages.process-page');
    }
}
