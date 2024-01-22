<?php
    namespace Database\Factories;

    use App\Models\Entreprise;
    use App\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;
    
    class EntrepriseFactory extends Factory
    {
        /**
         * The name of the factory's corresponding model.
         *
         * @var string
         */
        protected $model = Entreprise::class;
    
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition(): array
        {
            $typeEntreprise = $this->faker->randomElement(['Nationale', 'Multinationale']);
            $user = User::factory()->create(); // Créez un utilisateur associé à l'entreprise
    
            return [
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
                'user_id' => $user->id,
                'couverture' => 'couverture.jpg',
                'site_web' => $this->faker->url(),
                // Ajoutez d'autres attributs d'entreprise ici
            ];
        }
    }
    
?>