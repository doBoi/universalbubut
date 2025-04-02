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
            'title' => "-",
            'image' => "https://drive.google.com/thumbnail?id=1MqXUmPU6szZMKt5bSBcmbNyuh-LQ-juk",
            'description' => fake()->text(50),
        ]);

        Project::create([
            'title' => "-",
            'image' => "https://drive.google.com/thumbnail?id=1aOo-XNcsDl3QhS2CYp5vq5GLMautBj1m",
            'description' => fake()->text(50),
        ]);

        Project::create([
            'title' => "-",
            'image' => "https://drive.google.com/thumbnail?id=1COPdF4vgi0EnxQBW915O7WvO5IPS2ex9",
            'description' => fake()->text(50),
        ]);

        Project::create([
            'title' => "-",
            'image' => "https://drive.google.com/thumbnail?id=1ngTEAU2bMy7YXzcuLxF11_VlwaunXEo1",
            'description' => fake()->text(50),
        ]);

        Project::create([
            'title' => "-",
            'image' => "https://drive.google.com/thumbnail?id=1BKCERsPzu0Z2EyUDPcPi1uF1JuYx-HMl",
            'description' => fake()->text(50),
        ]);

        Project::create([
            'title' => "-",
            'image' => "https://drive.google.com/thumbnail?id=1ALytz5YK3EM13bd80Fd5Ec86R2LeQAnj",
            'description' => fake()->text(50),
        ]);

        Project::create([
            'title' => "-",
            'image' => "https://drive.google.com/thumbnail?id=1p7ZSraPe74xm1hoDufp32Ru6L5pt7riJ",
            'description' => fake()->text(50),
        ]);
    }
}
