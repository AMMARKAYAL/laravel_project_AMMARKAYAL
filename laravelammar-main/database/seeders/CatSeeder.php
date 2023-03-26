<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cat;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Cat::create([
            'name'=>'midcen',
            
        ]);
        Cat::create([
            'name'=>'chimstry',
            
        ]);
        Cat::create([
            'name'=>'sport',
            
        ]);
        Cat::create([
            'name'=>'programming',
            
        ]);
    }
}
