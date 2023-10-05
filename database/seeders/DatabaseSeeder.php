<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $janrs = \App\Models\Janr::factory(5)->create();
        $films = \App\Models\Film::factory(100)->create();

        foreach($films as $film) {
            $janrsIds = $janrs->random(2)->pluck('id');
            $film->janrs()->attach($janrsIds);
        }
    }
}
