<?php

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Cast;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
         Genre::factory(2)->create();
         Genre::factory()->create([
             'name' => 'Action'
         ]);

         Film::factory(10)->create();

            Review::factory(3)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'admin'
        ]);
        Cast::factory(5)->create();

        Actor::factory(20)->create();
    }
}
