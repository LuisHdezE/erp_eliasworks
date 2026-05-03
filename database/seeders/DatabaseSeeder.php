<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin user if it doesn't exist
        User::firstOrCreate(
            ['email' => 'admin@eliasworks.com'],
            [
                'name' => 'Administrador',
                'password' => bcrypt('admin123456'),
            ]
        );

        $this->call([
            ApplicationCategorySeeder::class,
            ApplicationSeeder::class,
        ]);
    }
}
