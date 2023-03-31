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
        \App\Models\User::factory(10)->create();
        \App\Models\Software::factory(10)->create();
        \App\Models\BusinessCategory::factory(10)->create();
        \App\Models\OrderStatus::factory(10)->create();
        \App\Models\Gateway::factory(10)->create();
        \App\Models\KeyStatus::factory(10)->create();
        \App\Models\Server::factory(10)->create();
        \App\Models\Licence::factory(10)->create();
        \App\Models\Order::factory(10)->create();
        \App\Models\Key::factory(10)->create();
        \App\Models\Invoice::factory(10)->create();
        \App\Models\Payment::factory(10)->create();





        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
