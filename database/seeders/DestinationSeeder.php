<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinations')->insert([
            ['destination'=>"Абдырово"],
            ['destination'=>"Агаповка"],
            ['destination'=>"Айбатова"],
            ['destination'=>"Айлино"],
            ['destination'=>"Акуля"],
            ['destination'=>"Алакуль(Село)"],
            ['destination'=>"Алтын-таш"],
            ['destination'=>"Альменево"],
            ['destination'=>"Анчугово"],
            ['destination'=>"Аргаяш"],
            ['destination'=>"Аркаим"],
            ['destination'=>"Арси"],
            ['destination'=>"Горняк"],

        ]);
    }
}
