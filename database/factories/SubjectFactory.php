<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //(id, name, description, timestamps)

        return [
            'name' => fake()->unique()->randomElement(['Web Dev', 'Game Dev', 'Mobile Dev', 'PKK', 'Mathematics']),
            'description' => fake()->sentence(),
        ];
    }
}
