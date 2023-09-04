<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tasks>
 */
class TasksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Create Factory for tasks, with column id, user_id, image_id, status_id, title, description, note, published_at, created_at, updated_at, deleted_at
        return [
            'user_id' => $this->faker->numberBetween(1, 10), // user_id
            'image_id' => $this->faker->numberBetween(1, 10), // image_id
            'status_id' => $this->faker->numberBetween(1, 4), // status_id
            'title' => $this->faker->sentence(), // title
            'description' => $this->faker->paragraph(), // description
            'note' => $this->faker->paragraph(), // note
            'published_at' => $this->faker->dateTimeBetween('-1 years', 'now'), // published_at
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'), // created_at
            'updated_at' => $this->faker->dateTimeBetween('-1 years', 'now'), // updated_at
            'deleted_at' => $this->faker->dateTimeBetween('-1 years', 'now'), // deleted_at
        ];
    }
}
