<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => $this->faker->numberBetween(10000000, 99999999),
            'firstname' => $this->faker->name(),
            'middlename' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'birthday' => $this->faker->dateTimeThisCentury()->format('Y-m-d'),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
        ];
    }
}
