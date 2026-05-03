<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FrontendViewsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Define initial setup for the tests if needed.
     */
    protected function setUp(): void
    {
        parent::setUp();
        // Here you might want to seed basic data if some views require it.
        // The homepage and other views might fail if there's no data or they query the DB.
        $this->seed();
    }

    /**
     * Test the home page renders.
     */
    public function test_home_page_renders_successfully()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * Test the catalog page renders.
     */
    public function test_catalog_page_renders_successfully()
    {
        $response = $this->get('/catalogo');
        $response->assertStatus(200);
    }

    /**
     * Test the services page renders.
     */
    public function test_services_page_renders_successfully()
    {
        $response = $this->get('/servicios');
        $response->assertStatus(200);
    }

    /**
     * Test the projects page renders.
     */
    public function test_projects_page_renders_successfully()
    {
        $response = $this->get('/proyectos');
        $response->assertStatus(200);
    }

    /**
     * Test the processes page renders.
     */
    public function test_process_page_renders_successfully()
    {
        $response = $this->get('/proceso');
        $response->assertStatus(200);
    }

    /**
     * Test the about us page renders.
     */
    public function test_about_page_renders_successfully()
    {
        $response = $this->get('/nosotros');
        $response->assertStatus(200);
    }

    /**
     * Test the contact page renders.
     */
    public function test_contact_page_renders_successfully()
    {
        $response = $this->get('/contacto');
        $response->assertStatus(200);
    }

    /**
     * Test the privacy policy page renders.
     */
    public function test_privacy_page_renders_successfully()
    {
        $response = $this->get('/privacidad');
        $response->assertStatus(200);
    }

    /**
     * Test the terms and conditions page renders.
     */
    public function test_terms_page_renders_successfully()
    {
        $response = $this->get('/terminos');
        $response->assertStatus(200);
    }
}
