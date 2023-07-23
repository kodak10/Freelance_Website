<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'photo' => fake()->imageUrl(),
            'nom' => fake()->firstName(),
            'prenoms' => fake()->lastName(),
            'site_web' => fake()->url(),
            'type_societe' => fake()->lastName(),
            'telephone' => fake()->phoneNumber(),
            'description' => fake()->paragraph(),
            'diplome' => json_encode([fake()->numberBetween(1,50), fake()->numberBetween(1, 50), fake()->numberBetween(1, 50)]),
            'date_naissance' => fake()->date(),
            'id_type_client' => fake()->numberBetween(1, 50),

        ];
    }
}
