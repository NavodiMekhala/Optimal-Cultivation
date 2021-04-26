<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClimatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('climates', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->double('rainfall', 10)->nullable();
            $table->double('temperature', 10)->nullable();
            $table->double('pressure', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('climates');
    }
}
