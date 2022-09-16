<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => fake()->title,
            'content' => fake()->sentence,
        ];
    }
}
