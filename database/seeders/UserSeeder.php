<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Kijk eerst of de admin gebruiker al bestaat
        $user = User::firstOrCreate(
            ['email' => 'admin@local.com'], // Unieke key
            [
                'name' => 'Admin',
                'password' => Hash::make('wachtwoord123'), // standaard wachtwoord
            ]
        );

        // Check of er al een token is voor deze gebruiker
        $existingTokens = $user->tokens()->count();

        if($existingTokens === 0) {
            $token = $user->createToken('API Token')->plainTextToken;
            echo "API Token aangemaakt: " . $token . "\n";
        } else {
            echo "Gebruiker bestaat al, token niet opnieuw aangemaakt.\n";
        }
    }
}
