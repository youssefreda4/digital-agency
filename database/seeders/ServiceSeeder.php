<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'App Development',
            'icon' => 'fab fa-android fa-2x',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus temporibus voluptatibus, culpa tenetur tempore vel ut iure commodi?',
        ]);
        Service::create([
            'name' => 'PPC Advertising',
            'icon' => 'fa fa-thumbs-up fa-2x',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus temporibus voluptatibus, culpa tenetur tempore vel ut iure commodi?',
        ]);
        Service::create([
            'name' => 'Email Marketing',
            'icon' => 'fa fa-mail-bulk fa-2x',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus temporibus voluptatibus, culpa tenetur tempore vel ut iure commodi?',
        ]);
        Service::create([
            'name' => 'Social Media Marketing',
            'icon' => 'fab fa-facebook-f fa-2x',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus temporibus voluptatibus, culpa tenetur tempore vel ut iure commodi?',
        ]);
        Service::create([
            'name' => 'Web Design',
            'icon' => 'fa fa-laptop-code fa-2x',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus temporibus voluptatibus, culpa tenetur tempore vel ut iure commodi?',
        ]);
        Service::create([
            'name' => 'SEO Optimization',
            'icon' => 'fa fa-search fa-2x',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus temporibus voluptatibus, culpa tenetur tempore vel ut iure commodi?',
        ]);
    }
}
