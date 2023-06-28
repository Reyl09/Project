<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course' => $this->faker->randomElement(['BSIT', 'BSHM', 'BEED', 'BSED']),
            'description' => $this->faker->randomElement(['Bachelor of Science in Information Technology',
            'Bachelor of Hospitality and Management', 'Bachelor of Elementary Education', 'Bachelor of Secondary Education'])


        ];
    }
}
