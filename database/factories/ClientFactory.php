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
        $factory->define(App\Models\Client::class, function (Faker $faker) {
            // Créez un utilisateur
            $user = factory(App\Models\User::class)->create();
        
            return [
                'name' => $faker->firstName,
                'prenoms' => $faker->lastName,
                'telephone' => $faker->phoneNumber,
                'photo' => "logo.png",
                'user_id' => $user->id, // Utilisez l'ID de l'utilisateur créé
            ];
        });
        
    }
}
