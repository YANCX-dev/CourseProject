<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cruise>
 */
class CruiseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'arrivalTime'=>$this->faker->time(),
            'route_id'=>rand(1,12),
            'bus_id'=>rand(1,7),
            'ticketPrice'=>250,
            'departureDate'=>now(),
            'departureTime'=>now()->addHours(6),
            'arrivalDate'=>now()
        ];
    }
}
