<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceEntreprise>
 */
class ServiceEntrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'service_id' => $this->faker->numberBetween(1, 43), // IDs de 1 à 43
                // Sauter l'ID 44
                'service_id' => $this->faker->numberBetween(45, 77), // IDs de 45 à 77
                'entreprise_id' => fake()->numberBetween(1, 140),
                'libelle' => fake()->realText(maxNbChars:50),
                'description' => fake()->realText(maxNbChars: 150),
                'delais_execution' => fake()->numberBetween(1, 10),
                'image' => fake()->imageUrl(),

            ];
    }
}
