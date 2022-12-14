<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => '$2y$10$DK1zf/0q.Vj4ZM6qDiCn7.4ku0E6dWqCmclTqew.OcmRHpcw6LFsa',
            'role' => 1,
            'active' => 1
        ]);
    }
}
