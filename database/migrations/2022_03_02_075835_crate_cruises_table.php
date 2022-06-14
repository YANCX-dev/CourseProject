<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruises', function (Blueprint $table) {
            $table->id();
            $table->time("arrivalTime");
            $table->foreignId("route_id")->constrained("routes")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("bus_id")->constrained("buses")->cascadeOnDelete()->cascadeOnUpdate();
            $table->decimal("ticketPrice");
            $table->date("departureDate");
            $table->time('departureTime');
            $table->date('arrivalDate');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cruises');
    }
};
