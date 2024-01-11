<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entreprise>
 */
class EntrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $typeEntreprise = $faker->randomElement(['Nationale', 'Multinationale']);
        return [
            'type_entreprise' => $typeEntreprise,
            'name' => fake()->compagny(),
            'nationalite' => fake()->locale(),
            'telephone' => fake()->phoneNumber(),
            'photo' => "logo.png",
            'email' => $user->email,
            'regime' => fake()->uuid,
            'localisation' => fake()->address,
            'approve' => "1",
            'num_inscription' => fake()->numberBetween(1, 999990),
            'user_id' => $user->id,
            'couverture' => "couverture.png",
            'site_web' => fake()->url(),
        ];
    }
}
