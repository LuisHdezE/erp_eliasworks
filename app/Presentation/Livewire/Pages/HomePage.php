<?php

namespace App\Presentation\Livewire\Pages;

use App\Domain\ApplicationCatalog\Contracts\ApplicationRepositoryInterface;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class HomePage extends Component
{
    public function render(ApplicationRepositoryInterface $appRepository)
    {
        $featuredApps = $appRepository->getFeatured(6);

        return view('livewire.pages.home-page', [
            'featuredApps' => $featuredApps,
        ]);
    }
}
