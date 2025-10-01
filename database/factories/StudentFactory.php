<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'classroom_id' => Classroom::factory(),
            'adress' => fake()->address(),
            'birthday' => fake()->date(),
            'score' => fake()->numberBetween(0, 100),
        ];
    }
}
