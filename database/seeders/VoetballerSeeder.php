<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoetballerSeeder extends Seeder
{
    public function run(): void
    {
        $clubs = DB::table('clubs')->pluck('id', 'naam');

        $spelers = [
            // Feyenoord
            ['naam' => 'Santiago Giménez', 'leeftijd' => 24, 'positie' => 'Spits', 'club' => 'Feyenoord'],
            ['naam' => 'Mats Wieffer', 'leeftijd' => 25, 'positie' => 'Middenvelder', 'club' => 'Feyenoord'],
            ['naam' => 'Quilindschy Hartman', 'leeftijd' => 24, 'positie' => 'Linksback', 'club' => 'Feyenoord'],
            ['naam' => 'Lutsharel Geertruida', 'leeftijd' => 25, 'positie' => 'Verdediger', 'club' => 'Feyenoord'],
            ['naam' => 'Calvin Stengs', 'leeftijd' => 27, 'positie' => 'Aanvaller', 'club' => 'Feyenoord'],

            // PSV
            ['naam' => 'Luuk de Jong', 'leeftijd' => 35, 'positie' => 'Spits', 'club' => 'PSV'],
            ['naam' => 'Johan Bakayoko', 'leeftijd' => 22, 'positie' => 'Rechtsbuiten', 'club' => 'PSV'],
            ['naam' => 'Malik Tillman', 'leeftijd' => 24, 'positie' => 'Middenvelder', 'club' => 'PSV'],
            ['naam' => 'Sergiño Dest', 'leeftijd' => 25, 'positie' => 'Rechtsback', 'club' => 'PSV'],
            ['naam' => 'Walter Benítez', 'leeftijd' => 32, 'positie' => 'Keeper', 'club' => 'PSV'],

            // Ajax
            ['naam' => 'Brian Brobbey', 'leeftijd' => 23, 'positie' => 'Spits', 'club' => 'Ajax'],
            ['naam' => 'Kenneth Taylor', 'leeftijd' => 23, 'positie' => 'Middenvelder', 'club' => 'Ajax'],
            ['naam' => 'Steven Bergwijn', 'leeftijd' => 28, 'positie' => 'Vleugelspeler', 'club' => 'Ajax'],
            ['naam' => 'Jorrel Hato', 'leeftijd' => 19, 'positie' => 'Verdediger', 'club' => 'Ajax'],
            ['naam' => 'Diant Ramaj', 'leeftijd' => 24, 'positie' => 'Keeper', 'club' => 'Ajax'],

            // AZ
            ['naam' => 'Vangelis Pavlidis', 'leeftijd' => 27, 'positie' => 'Spits', 'club' => 'AZ Alkmaar'],
            ['naam' => 'Dani de Wit', 'leeftijd' => 27, 'positie' => 'Middenvelder', 'club' => 'AZ Alkmaar'],
            ['naam' => 'Yukinari Sugawara', 'leeftijd' => 25, 'positie' => 'Rechtsback', 'club' => 'AZ Alkmaar'],
            ['naam' => 'Jens Odgaard', 'leeftijd' => 26, 'positie' => 'Aanvaller', 'club' => 'AZ Alkmaar'],
            ['naam' => 'Matthew Ryan', 'leeftijd' => 33, 'positie' => 'Keeper', 'club' => 'AZ Alkmaar'],

            // Twente
            ['naam' => 'Ricky van Wolfswinkel', 'leeftijd' => 36, 'positie' => 'Spits', 'club' => 'FC Twente'],
            ['naam' => 'Sem Steijn', 'leeftijd' => 24, 'positie' => 'Middenvelder', 'club' => 'FC Twente'],
            ['naam' => 'Michal Sadílek', 'leeftijd' => 27, 'positie' => 'Middenvelder', 'club' => 'FC Twente'],
            ['naam' => 'Robin Pröpper', 'leeftijd' => 31, 'positie' => 'Verdediger', 'club' => 'FC Twente'],
            ['naam' => 'Lars Unnerstall', 'leeftijd' => 35, 'positie' => 'Keeper', 'club' => 'FC Twente'],
        ];

        foreach ($spelers as $speler) {
            $voetballerId = DB::table('voetballers')->insertGetId([
                'naam' => $speler['naam'],
                'leeftijd' => $speler['leeftijd'],
                'positie' => $speler['positie'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            DB::table('club_voetballer')->insert([
                'club_id' => $clubs[$speler['club']],
                'voetballer_id' => $voetballerId,
            ]);
        }
    }
}
