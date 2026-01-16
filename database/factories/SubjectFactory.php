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
            'name' => fake()->unique()->randomElement([
                'Web Development',
                'Game Development',
                'Mobile Development',
                'PKK',
                'Mathematics',
                'Cloud Computing',
                'Cyber Security',
                'Database Management',
                'UI/UX Design',
                'Artificial Intelligence',
                'Internet of Things',
                'Graphic Design',
                'Network Engineering',
                'Software Testing',
                'Data Science',
                'Machine Learning',
                'English for IT',
                'Indonesian Language',
                'Civic Education',
                'Physical Education',
                'Physics',
                'Chemistry',
                'Biology',
                'History',
                'Geography',
                'Economics',
                'Sociology',
                'Digital Marketing',
                'Entrepreneurship',
                'Photography',
                'Videography',
                'Animation 2D/3D',
                'Computer Systems',
                'Basic Programming',
                'Object Oriented Programming',
                'Project Management',
                'Agile Methodology',
                'Quality Assurance',
                'Embedded Systems',
                'Big Data'
            ]),
            'description' => fake()->sentence(),
        ];
    }
}
