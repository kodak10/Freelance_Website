<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\User;
use App\Models\ImageBlog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'libelle' => $this->faker->sentence(10),
            'image_path' => $this->faker->randomElement(['blog-1', 'blog-2', 'blog-3', 'blog-4', 'blog-5', 'blog-6', 'blog-7', 'blog-8']) . '.jpg',            
            'description' => $this->faker->text(1000),
            ];
    }
}
