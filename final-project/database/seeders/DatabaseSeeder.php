<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Genre;
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
             'name' => 'action'
         ]);

         Film::factory(10)->create();


//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
