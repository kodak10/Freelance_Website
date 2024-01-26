<?php

namespace Database\Factories;

use App\Models\ImageBlog;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageBlogFactory extends Factory
{
    protected $model = ImageBlog::class;

    public function definition()
    {
        return [
            'file_path' => $this->faker->imageUrl(),
            'blog_id' => Blog::factory(),
        ];
    }
}
