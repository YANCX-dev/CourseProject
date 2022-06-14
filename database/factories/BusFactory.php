<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bus>
 */
class BusFactory extends Factory
{
    /**
     * Define the model's default state.
     * @return array<string, mixed>
     */
    public function definition()
    {
        return
            [
                ["busRegNum"=>"A172PC174","countOfPlaces"=>25],
                ["busRegNum"=>"B444CK174","countOfPlaces"=>25],
                ["busRegNum"=>"A319ЕУ174","countOfPlaces"=>25],
                ["busRegNum"=>"Е231КХ174","countOfPlaces"=>25],
                ["busRegNum"=>"А002МР174","countOfPlaces"=>25],
                ["busRegNum"=>"В282РО174","countOfPlaces"=>25],
                ["busRegNum"=>"В666АН174","countOfPlaces"=>25],
            ];
    }
}
