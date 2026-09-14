<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class PublicShellAvailabilityTest extends TestCase
{
    public function test_home_page_does_not_require_database_for_global_seo_metadata(): void
    {
        config([
            'database.default' => 'sqlite',
            'database.connections.sqlite.database' => '/path/that/does/not/exist/eliasworks.sqlite',
        ]);

        DB::purge('sqlite');

        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('<title>EliasWorks</title>', false)
            ->assertSee('Construyo y modernizo software de negocio')
            ->assertSee('Portfolio de software engineering de Luis A. Hernández Elias');
    }
}
