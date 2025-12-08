<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


// php artisan db:seed
//php artisan make:seeder JobSeeder
//php artisan migrate:fresh --seed

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([JobSeeder::class, TagSeeder::class, JobTagSeeder::class, EmployerSeeder::class]);
// php artisan migrate:fresh --seed
        User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
        ]);
    }
}
