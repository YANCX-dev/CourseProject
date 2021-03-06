<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mark>
 */
class MarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $marks = ['Mercedes',"ЛиАз","Паз","Peugeot","Ford"];
        $randkey = array_rand($marks,2);
        return [
            'mark'=>$randkey,
        ];
    }
}
