<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */
class FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contenu' => fake()->text(),
            'image' => fake()->imageUrl(),
            'video' => fake()->imageUrl(),
            'id_secteur' => fake()->numberBetween(1, 10),
            'id_categorie' => fake()->numberBetween(1, 10),
        ];
    }
}
