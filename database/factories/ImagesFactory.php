<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Images>
 */
class ImagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Create Factory for images, with column id, description, path, created_at, updated_at
        return [
            'description' => $this->faker->sentence(), // description
            'path' => $this->faker->imageUrl(), // path
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'), // created_at
            'updated_at' => $this->faker->dateTimeBetween('-1 years', 'now'), // updated_at
        ];
    }
}
