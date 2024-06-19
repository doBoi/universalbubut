<?php

namespace Database\Seeders;

use App\Models\Project;
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
        // User::factory(10)->create();
        // Project::factory()->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Project::create([
            'title' => "Drat Pipa 5Inch",
            'image' => " https://drive.google.com/file/d/1BKFLk_4QbRRs-s56gnGNVt13jBD0bEG9/view?usp=drive_link",
            'description' => fake()->text(50),
        ]);

        Project::create([
            'title' => "Drat Pipa 4Inch",
            'image' => "https://drive.google.com/file/d/1AMdmywOwHX5UULCETnjCFbC5YaNL4uwN/view?usp=drive_link",
            'description' => fake()->text(50),
        ]);
    }
}
