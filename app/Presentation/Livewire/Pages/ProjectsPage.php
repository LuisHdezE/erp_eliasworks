<?php

namespace App\Presentation\Livewire\Pages;

use App\Infrastructure\Persistence\Eloquent\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class ProjectsPage extends Component
{
    public function render()
    {
        $projects = Project::where('is_published', true)->orderBy('sort_order', 'asc')->get();

        return view('livewire.pages.projects-page', compact('projects'));
    }
}
