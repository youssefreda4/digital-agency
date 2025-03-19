<?php

namespace Database\Seeders;

use App\Models\Counter;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\Subscriber;
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
        $this->call([
            AdminSeeder::class,
            SettingSeeder::class,
            SkillSeeder::class,
            SubscriberSeeder::class,
            CounterSeeder::class,
            ServiceSeeder::class,
            MessageSeeder::class,
            CategorySeeder::class,
            ProjectSeeder::class,
        ]);
        
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
