<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compte>
 */
class CompteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numero_compte'=>rand(23457899, 93457899),
            'RIB'=>rand(23423457899, 98693457899),
            'type'=>fake()->name(),
            'date_ouverture'=>now(),
            'solde'=>rand(1000, 458990),
            'id_user'=>1,
            'id_agence'=>rand(1, 10),
        ];
    }
}
