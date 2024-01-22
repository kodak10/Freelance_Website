<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Entreprise;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // Mot de passe par défaut : 'password'
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (User $user) {
            $role = $this->faker->randomElement(['compagny', 'client']);

            // Assigne le rôle au nouvel utilisateur
            $user->assignRole($role);

            // Si l'utilisateur a le rôle "compagny", crée automatiquement une entreprise associée
            if ($role === 'compagny') {
                $typeEntreprise = $this->faker->randomElement(['Nationale', 'Multinationale']);
                Entreprise::factory()->create([
                    'user_id' => $user->id,
                    'type_entreprise' => $typeEntreprise,
                    'name' => $this->faker->company(),
                    'nationalite' => $this->faker->locale(),
                    'telephone' => $this->faker->phoneNumber(),
                    'photo' => 'logo.png',
                    'email' => $user->email,
                    'regime' => $this->faker->uuid,
                    'localisation' => $this->faker->address,
                    'approve' => 1, // Si c'est un booléen, ne le mettez pas entre guillemets
                    'num_inscription' => $this->faker->numberBetween(1, 999990),
                    'couverture' => 'couverture.jpg',
                    'site_web' => $this->faker->url(),
                    // Ajoutez d'autres attributs d'entreprise ici
                ]);
            }
            if ($role === 'client') {
                Client::factory()->create([
                    'user_id' => $user->id,
                    'name' => $this->faker->firstName,
                    'prenoms' => $this->faker->lastName,
                    'telephone' => $this->faker->phoneNumber,
                    'photo' => 'logo.png',
                ]);
            }
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
