<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stops')->insert([
            ['stop'=>"Example","route_id"=>rand(1,12)],
            ['stop'=>"Example2","route_id"=>rand(1,12)],
            ['stop'=>"Example3","route_id"=>rand(1,12)],
            ['stop'=>"Example4","route_id"=>rand(1,12)],
            ['stop'=>"Example5","route_id"=>rand(1,12)],
            ['stop'=>"Example6","route_id"=>rand(1,12)],
        ]);
    }
}
