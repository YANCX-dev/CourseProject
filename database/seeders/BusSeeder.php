<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buses')->insert([
            ["busRegNum"=>"A172PC174","countOfPlaces"=>25,"driver_id"=>rand(1,7),"mark_id"=>rand(1,5)],
            ["busRegNum"=>"B444CK174","countOfPlaces"=>25,"driver_id"=>rand(1,7),"mark_id"=>rand(1,5)],
            ["busRegNum"=>"A319ЕУ174","countOfPlaces"=>25,"driver_id"=>rand(1,7),"mark_id"=>rand(1,5)],
            ["busRegNum"=>"Е231КХ174","countOfPlaces"=>25,"driver_id"=>rand(1,7),"mark_id"=>rand(1,5)],
            ["busRegNum"=>"А002МР174","countOfPlaces"=>25,"driver_id"=>rand(1,7),"mark_id"=>rand(1,5)],
            ["busRegNum"=>"В282РО174","countOfPlaces"=>25,"driver_id"=>rand(1,7),"mark_id"=>rand(1,5)],
            ["busRegNum"=>"В666АН174","countOfPlaces"=>25,"driver_id"=>rand(1,7),"mark_id"=>rand(1,5)],
        ]);
    }
}
