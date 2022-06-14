<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marks')->insert([
            ["mark"=>"Паз"],
            ["mark"=>"Марз"],
            ["mark"=>"Урал"],
            ["mark"=>"Лиаз"],
            ["mark"=>"Hyundai"],
        ]);
    }
}
