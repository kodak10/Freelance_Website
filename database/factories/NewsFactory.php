<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => fake()->imageUrl(),
            'titre' => fake()->streetName(),
            'sous_titre' => fake()->name(),
            'id_user' => fake()->numberBetween(1, 50),
            'id_categorie' => fake()->numberBetween(1, 50),
        ];
    }
}
