<?php

namespace App\Presentation\Livewire\Pages;

use App\Domain\ApplicationCatalog\Contracts\ApplicationRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\Models\ApplicationCategory;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.app')]
class ApplicationsPage extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public $search = '';

    #[Url(history: true)]
    public $category = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function setCategory($slug)
    {
        $this->category = $slug;
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->category = '';
        $this->resetPage();
    }

    public function render(ApplicationRepositoryInterface $appRepository)
    {
        $categories = ApplicationCategory::active()->ordered()->get();

        $applications = $appRepository->getPublished(
            categorySlug: $this->category ?: null,
            search: $this->search ?: null,
            perPage: 12
        );

        return view('livewire.pages.applications-page', [
            'categories' => $categories,
            'applications' => $applications,
        ]);
    }
}
