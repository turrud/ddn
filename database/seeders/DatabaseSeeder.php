<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Psy\Readline\Hoa\Event;
use Illuminate\Database\Seeder;
use Database\Seeders\HomeSeeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\AboutSeeder;
use Database\Seeders\EventSeeder;
use Database\Seeders\ClientSeeder;

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

        $this->call(HomeSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(EventSeeder::class);
    }
}