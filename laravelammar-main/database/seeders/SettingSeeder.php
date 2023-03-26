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
            'name'=>'midcen',
            'logo'=>'logo',
            'city'=>'city',
            'favicon'=>'favicon',
            'address'=>'address',
            'phone'=>'phone',
            'work_hours'=>'work_hours',
            'email'=>'email',
            'fb'=>'fb',
            'twitter'=>'twitter',
            'insta'=>'insta',
            'map'=>'map',
            
        ]);
    }
}
