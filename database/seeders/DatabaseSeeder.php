<?php

namespace Database\Seeders;

use App\Models\Cruise;
use App\Models\Driver;
use App\Models\News;
use App\Models\User;
use App\Models\Route;
use App\Models\Ticket;
use App\Models\Admin;
use Database\Factories\NewsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //Cals
        $this->call(DestinationSeeder::class);
        Route::factory(12)->create();
        $this->call(StopSeeder::class);
        $this->call(MarkSeeder::class);
        Driver::factory(7)->create();
        $this->call(BusSeeder::class);
        User::factory(20)->create();
        Cruise::factory(50)->create();
        Ticket::factory(20)->create();
        Admin::factory(3)->create();
        $this->call(NewsSeeder::class);
        $this->call(InfoForPassengersSeeder::class);

    }
}
