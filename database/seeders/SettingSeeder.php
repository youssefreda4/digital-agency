<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'site_name' => env('SETTING_SITE_NAME'),
            'address' => env('SETTING_ADDRESS'),
            'phone' => env('SETTING_PHONE'),
            'email' => env('SETTING_EMAIL'),
            'facebook' => env('SETTING_FACEBOOK'),
            'instagram' => env('SETTING_INSTAGRAM'),
            'x' => env('SETTING_X'),
            'linkedin' => env('SETTING_LINKEDIN'),
        ]);
    }
}
