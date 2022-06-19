<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "place"=>rand(0,25),
            'cruise_id'=>rand(1,12),
            "user_id"=>rand(1,20),
            'totalPrice'=>rand(225,250),
        ];
    }
}
