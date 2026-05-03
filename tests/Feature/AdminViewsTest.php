<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminViewsTest extends TestCase
{
    use RefreshDatabase;

    protected $adminUser;

    /**
     * Define initial setup for the tests.
     */
    protected function setUp(): void
    {
        parent::setUp();
        
        // Seed the database to ensure we have necessary categories, etc.
        $this->seed();

        // Admin user should be created by seeder, but we can just fetch it
        $this->adminUser = User::firstOrCreate(
            ['email' => 'admin@eliasworks.com'],
            [
                'name' => 'Administrador',
                'password' => bcrypt('password'), // password is not important for actingAs
            ]
        );
    }

    /**
     * Test the admin dashboard renders.
     */
    public function test_admin_dashboard_renders()
    {
        $response = $this->actingAs($this->adminUser)->get('/admin');
        $response->assertStatus(200);
    }

    /**
     * Test the applications index renders.
     */
    public function test_admin_applications_index_renders()
    {
        $response = $this->actingAs($this->adminUser)->get('/admin/applications');
        $response->assertStatus(200);
    }

    /**
     * Test the application categories index renders.
     */
    public function test_admin_application_categories_index_renders()
    {
        $response = $this->actingAs($this->adminUser)->get('/admin/application-categories');
        $response->assertStatus(200);
    }

    /**
     * Test the contact requests index renders.
     */
    public function test_admin_contact_requests_index_renders()
    {
        $response = $this->actingAs($this->adminUser)->get('/admin/contact-requests');
        $response->assertStatus(200);
    }

    /**
     * Test the projects index renders.
     */
    public function test_admin_projects_index_renders()
    {
        $response = $this->actingAs($this->adminUser)->get('/admin/projects');
        $response->assertStatus(200);
    }

    /**
     * Test the services index renders.
     */
    public function test_admin_services_index_renders()
    {
        $response = $this->actingAs($this->adminUser)->get('/admin/services');
        $response->assertStatus(200);
    }

    /**
     * Test the site settings index renders.
     */
    public function test_admin_site_settings_index_renders()
    {
        $response = $this->actingAs($this->adminUser)->get('/admin/site-settings');
        $response->assertStatus(200);
    }
}
