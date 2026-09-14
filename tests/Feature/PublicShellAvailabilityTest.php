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
            ->assertSee('Desarrollo de software')
            ->assertSee('Portfolio de desarrollo de software de Luis A. Hernández Elias');
    }
}
