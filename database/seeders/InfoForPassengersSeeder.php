<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoForPassengersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'name' => "Способы покупки билетов",
                'created_at' => now(),
                ],
            [
                'name' => "Правила возврата билетов",
                'created_at' => now(),
                ],
            [
                'name' => "Правила пользования услугами автостанции",
                'created_at' => now(),
                ]
        ]);
    }
}
