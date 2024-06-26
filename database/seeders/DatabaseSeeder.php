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
        \App\Models\Subscriber::factory(1000)->create();

        \App\Models\User::factory()->create([
            "name" => "Test User",
            "email" => "a@b.com",
            "password" => "password",
        ]);
    }
}
