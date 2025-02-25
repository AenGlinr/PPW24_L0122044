<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Character::factory()->count(50)->create();
    }
}
