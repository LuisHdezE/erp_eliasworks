<?php

namespace App\Presentation\Livewire\Pages;

use App\Domain\ApplicationCatalog\Contracts\ApplicationRepositoryInterface;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class ApplicationDetailPage extends Component
{
    public $application;

    public function mount($slug, ApplicationRepositoryInterface $appRepository)
    {
        $this->application = $appRepository->findBySlug($slug);

        if (! $this->application || (! $this->application->is_published && ! auth()->check())) {
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.pages.application-detail-page', [
            'app' => $this->application,
        ])->title($this->application->meta_title ?? $this->application->name.' | EliasWorks')
            ->layoutData(['description' => $this->application->meta_description]);
    }
}
