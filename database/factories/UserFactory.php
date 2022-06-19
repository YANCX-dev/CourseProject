<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->firstName(),
            'surname'=>$this->faker->lastName(),
            'phone_number'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email(),
            'passport'=>$this->faker->postcode(),
            'whereIssued'=>" "
        ];
    }
}
