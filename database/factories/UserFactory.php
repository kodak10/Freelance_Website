<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $factory->define(User::class, function (Faker $faker) {
            // Ajoute le trait HasRoles pour pouvoir utiliser assignRole
            User::mixin(new HasRoles);
        
            $role = $faker->randomElement(['compagny', 'client']);
        
            $user = factory(User::class)->create();
        
            // Assigne le rôle au nouvel utilisateur
            $user->assignRole($role);
        
            return [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Mot de passe par défaut : 'password'
                'remember_token' => Str::random(10),
            ];
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
