<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // create factory for users, with column id, name, email, email_verified_at, password, remember_token, created_at, updated_at
        return [
            'name' => $this->faker->name(), // name
            'email' => $this->faker->unique()->safeEmail(), // email
            'email_verified_at' => $this->faker->dateTimeBetween('-1 years', 'now'), // email_verified_at
            'password' => $this->faker->password(), // password
            'remember_token' => $this->faker->password(), // remember_token
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'), // created_at
            'updated_at' => $this->faker->dateTimeBetween('-1 years', 'now'), // updated_at
        ];
    }
}
