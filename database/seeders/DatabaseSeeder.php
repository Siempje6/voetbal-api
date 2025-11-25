<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Club;
use App\Models\Voetballer;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $clubs = Club::factory()->count(5)->create();
        $voetballers = Voetballer::factory()->count(20)->create();

        foreach ($voetballers as $voetballer) {
            $voetballer->clubs()->attach($clubs->random(rand(1,2))->pluck('id')->toArray());
        }
    }
}
