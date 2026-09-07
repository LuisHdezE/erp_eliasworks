<?php

namespace App\Presentation\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class ProjectsPage extends Component
{
    public function render()
    {
        return view('livewire.pages.projects-page', [
            'projects' => config('portfolio.case_studies', []),
        ]);
    }
}
