<?php

namespace Tests\Feature\Presentation\Livewire;

use App\Infrastructure\Persistence\Eloquent\Models\Application;
use App\Infrastructure\Persistence\Eloquent\Models\ApplicationCategory;
use App\Presentation\Livewire\Pages\ApplicationsPage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ApplicationsPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_renders_successfully(): void
    {
        Livewire::test(ApplicationsPage::class)
            ->assertStatus(200);
    }

    public function test_it_displays_applications_and_filters_by_search(): void
    {
        $category = ApplicationCategory::create([
            'name' => 'CRM',
            'slug' => 'crm',
            'description' => 'CRM Apps',
        ]);

        Application::create([
            'application_category_id' => $category->id,
            'name' => 'SalesForce Clone',
            'slug' => 'salesforce-clone',
            'short_description' => 'A CRM',
            'status' => 'prototype',
            'is_published' => true,
        ]);

        Application::create([
            'application_category_id' => $category->id,
            'name' => 'Another App',
            'slug' => 'another-app',
            'short_description' => 'Not a CRM',
            'status' => 'prototype',
            'is_published' => true,
        ]);

        Livewire::test(ApplicationsPage::class)
            ->assertSee('SalesForce Clone')
            ->assertSee('Another App')
            ->set('search', 'SalesForce')
            ->assertSee('SalesForce Clone')
            ->assertDontSee('Another App');
    }

    public function test_it_filters_by_category(): void
    {
        $category1 = ApplicationCategory::create([
            'name' => 'CRM',
            'slug' => 'crm',
            'description' => 'CRM Apps',
        ]);

        $category2 = ApplicationCategory::create([
            'name' => 'ERP',
            'slug' => 'erp',
            'description' => 'ERP Apps',
        ]);

        Application::create([
            'application_category_id' => $category1->id,
            'name' => 'SalesForce Clone',
            'slug' => 'salesforce-clone',
            'short_description' => 'A CRM',
            'is_published' => true,
        ]);

        Application::create([
            'application_category_id' => $category2->id,
            'name' => 'SAP Clone',
            'slug' => 'sap-clone',
            'short_description' => 'An ERP',
            'is_published' => true,
        ]);

        Livewire::test(ApplicationsPage::class)
            ->set('category', 'crm')
            ->assertSee('SalesForce Clone')
            ->assertDontSee('SAP Clone');
    }
}
