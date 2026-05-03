<?php

namespace App\Providers;

use App\Domain\ApplicationCatalog\Contracts\ApplicationRepositoryInterface;
use App\Infrastructure\Persistence\Eloquent\Repositories\EloquentApplicationRepository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind repository interfaces to their Eloquent implementations
        $this->app->bind(
            ApplicationRepositoryInterface::class,
            EloquentApplicationRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });
    }
}
