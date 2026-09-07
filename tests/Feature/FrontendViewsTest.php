<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FrontendViewsTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_home_page_renders_professional_portfolio_positioning(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('Construyo y modernizo software de negocio')
            ->assertSee('Insurance Claims Legacy Modernization')
            ->assertSee('eFactura')
            ->assertSee('ZoFloridane');
    }

    public function test_catalog_page_renders_successfully(): void
    {
        $this->get('/catalogo')->assertOk();
    }

    public function test_services_page_renders_successfully(): void
    {
        $this->get('/servicios')->assertOk();
    }

    public function test_projects_page_renders_selected_case_studies(): void
    {
        $response = $this->get('/proyectos');

        $response
            ->assertOk()
            ->assertSee('Proyectos seleccionados')
            ->assertSee('Insurance Claims Legacy Modernization')
            ->assertSee('eFactura')
            ->assertSee('ZoFloridane');
    }

    public function test_process_page_renders_successfully(): void
    {
        $this->get('/proceso')->assertOk();
    }

    public function test_about_page_renders_successfully(): void
    {
        $this->get('/nosotros')->assertOk();
    }

    public function test_contact_page_renders_successfully(): void
    {
        $this->get('/contacto')->assertOk();
    }

    public function test_privacy_page_renders_successfully(): void
    {
        $this->get('/privacidad')->assertOk();
    }

    public function test_terms_page_renders_successfully(): void
    {
        $this->get('/terminos')->assertOk();
    }
}
