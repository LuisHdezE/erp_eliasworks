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
            ->assertSee('R3 full-product release · v0.3.0')
            ->assertSee('90 operaciones REST sobre 76 paths y 16 familias')
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
            ->assertSee('R3 full-product release · v0.3.0')
            ->assertSee('22 superficies web productizadas')
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

    public function test_contact_page_renders_professional_identity_without_placeholder_contact_data(): void
    {
        $response = $this->get('/contacto');

        $response
            ->assertOk()
            ->assertSee('Hablemos de software que necesita funcionar de verdad.')
            ->assertSee('Software Engineering · Uruguay')
            ->assertSee('Backend y APIs para aplicaciones de negocio.')
            ->assertSee('github.com/LuisHdezE')
            ->assertDontSee('Buenos Aires, Argentina')
            ->assertDontSee('+54 11 1234-5678')
            ->assertDontSee('contacto@eliasworks.com')
            ->assertDontSee('+54 11 ...')
            ->assertDontSee('+54 9 11 ...');
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
