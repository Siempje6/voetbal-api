<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('clubs')->insert([
            ['naam' => 'Feyenoord', 'stad' => 'Rotterdam', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'PSV', 'stad' => 'Eindhoven', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Ajax', 'stad' => 'Amsterdam', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'AZ Alkmaar', 'stad' => 'Alkmaar', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'FC Twente', 'stad' => 'Enschede', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
