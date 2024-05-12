<?php

namespace Database\Seeders;

use App\Models\town;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        town::create([
            'name'=>'Damascus halls',
            ]);
        town::create([
            'name'=>'Homs halls',
            ]);
        town::create([
            'name'=>'Hama halls',
             ]);
        town::create([
            'name'=>'Latakia halls',
             ]);
        town::create([
            'name'=>'Alepo halls',
            ]);
        town::create([
            'name'=>'Deer AlZour halls',
            ]);
        town::create([
            'name'=>'Suwayda halls',
             ]);
        town::create([
            'name'=>'Daraa halls',
             ]);
        town::create([
            'name'=>'Tartous halls',
            ]);
        town::create([
            'name'=>'Hassaka halls',
            ]);
            

    }
}
