<?php
    namespace Database\Factories;

    use App\Models\Client;
    use App\Models\User;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Factories\Factory;
    
    class ClientFactory extends Factory
    {
        /**
         * The name of the factory's corresponding model.
         *
         * @var string
         */
        protected $model = Client::class;
    
        /**
         * Define the model's default state.
         *
         * @return array<string, mixed>
         */
        public function definition(): array
        {
            // Créez un utilisateur
            $user = User::factory()->create();
            
    
            return [
                'user_id' => $user->id, // Utilisez l'ID de l'utilisateur créé
                'name' => $this->faker->firstName,
                'prenoms' => $this->faker->lastName,
                'telephone' => $this->faker->phoneNumber,
                'date_naissance' => $this->faker->date,
                'photo' => 'logo.png',
            ];
        }

        
    }
    
?>