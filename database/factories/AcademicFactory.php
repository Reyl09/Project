<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Academic>
 */
class AcademicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            // 'course' => $this->faker->sentence(), foreign id
            'semester' => $this->faker->numberBetween(1, 2),
            'year' => $this->faker->year(),
            'BegStat' => $this->faker->randomElement(['New', 'Regular', 'Transferee', 'Returnee']),
            'EndStat' => $this->faker->randomElement(['Completed', 'Dropout', 'Transfered Out', 'Failed', 'Transferee']),

        ];
    }
}
