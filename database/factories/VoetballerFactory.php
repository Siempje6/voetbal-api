<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Voetballer;

class VoetballerFactory extends Factory
{
    protected $model = Voetballer::class;

    public function definition()
    {
        return [
            'naam' => $this->faker->name(),
            'leeftijd' => $this->faker->numberBetween(16, 40),
            'positie' => $this->faker->randomElement(['Aanvaller', 'Middenvelder', 'Verdediger', 'Keeper']),
        ];
    }
}
