<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $number = 1;

        return [
            'title' => $this->faker->name(),
            'slug' => $this->faker->name(),
            'short_description' => Str::random(10),
            'content' => $this->faker->sentence(300),
            'picture' => 'no-picture',
            'user_id' => $number++,
            'random' => 'https://source.unsplash.com/random',
        ];
    }


    
}
