<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName('male'),
            'surname' => $this->faker->lastName(),
            'age' => rand(25, 45),
            'exp' => rand(5, 6),
            'driverLicense' => $this->faker->isbn13(),
        ];
    }
}
