<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 20);
            $table->string('departures', 30);
            $table->string('arrives', 30);
            $table->string('departure_time', 30);
            $table->string('arrive_time', 30);
            $table->string('train_code', 15);
            $table->smallInteger('train_carriages')->unsigned();
            $table->boolean('late', 15)->default(2);
            $table->boolean('deleted', 15)->default(2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
