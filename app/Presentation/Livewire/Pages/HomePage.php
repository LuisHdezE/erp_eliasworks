<?php

namespace App\Presentation\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.pages.home-page', [
            'caseStudies' => config('portfolio.case_studies', []),
        ]);
    }
}
