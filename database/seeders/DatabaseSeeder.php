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

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'hobbies' => [
                [
                    'hobby' => 'Test Hobby 1',
                ],
                [
                    'hobby' => 'Test Hobby 2',
                ]
            ]
        ]);
    }
}
