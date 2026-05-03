<?php

namespace App\Infrastructure\Persistence\Eloquent\Repositories;

use App\Domain\ApplicationCatalog\Contracts\ApplicationRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\Models\Application;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class EloquentApplicationRepository implements ApplicationRepositoryInterface
{
    public function findBySlug(string $slug): ?Application
    {
        return Application::published()->where('slug', $slug)->with(['category', 'images'])->first();
    }

    public function getPublished(
        ?string $categorySlug = null,
        ?string $search = null,
        int $perPage = 12
    ): LengthAwarePaginator {
        $query = Application::published()
            ->with(['category'])
            ->ordered();

        if ($categorySlug) {
            $query->whereHas('category', fn ($q) => $q->where('slug', $categorySlug));
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('short_description', 'like', "%{$search}%");
            });
        }

        return $query->paginate($perPage);
    }

    public function getFeatured(int $limit = 6): Collection
    {
        return Application::featured()
            ->with(['category'])
            ->ordered()
            ->limit($limit)
            ->get();
    }

    public function getAll(): Collection
    {
        return Application::with(['category'])->ordered()->get();
    }

    public function create(array $data): Application
    {
        return Application::create($data);
    }

    public function update(Application $application, array $data): Application
    {
        $application->update($data);

        return $application->fresh();
    }

    public function publish(Application $application): Application
    {
        $application->update([
            'is_published' => true,
            'published_at' => $application->published_at ?? now(),
        ]);

        return $application->fresh();
    }

    public function unpublish(Application $application): Application
    {
        $application->update(['is_published' => false]);

        return $application->fresh();
    }
}
