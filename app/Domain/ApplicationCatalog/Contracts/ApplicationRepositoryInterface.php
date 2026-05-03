<?php

namespace App\Domain\ApplicationCatalog\Contracts;

use App\Infrastructure\Persistence\Eloquent\Models\Application;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface ApplicationRepositoryInterface
{
    public function findBySlug(string $slug): ?Application;

    public function getPublished(
        ?string $categorySlug = null,
        ?string $search = null,
        int $perPage = 12
    ): LengthAwarePaginator;

    public function getFeatured(int $limit = 6): Collection;

    public function getAll(): Collection;

    public function create(array $data): Application;

    public function update(Application $application, array $data): Application;

    public function publish(Application $application): Application;

    public function unpublish(Application $application): Application;
}
