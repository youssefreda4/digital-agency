<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Counter::factory()->count(20)->create();
        Counter::create([
            'name' => 'Years Experience',
            'icon' => 'fa fa-certificate fa-3x text-secondary mb-3',
            'count' => 25,
        ]);
         Counter::create([
            'name' => 'Team Members',
            'icon' => 'fa fa-users-cog fa-3x text-secondary mb-3',
            'count' => 2544,
        ]);
         Counter::create([
            'name' => 'Satisfied Clients',
            'icon' => 'fa fa-users fa-3x text-secondary mb-3',
            'count' => 2687,
        ]);
         Counter::create([
            'name' => 'Compleate Projects',
            'icon' => 'fa fa-check fa-3x text-secondary mb-3',
            'count' => 3646,
        ]);
    }
}
