<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceRunnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_runners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('runner_id');
            $table->unsignedBigInteger('race_id');
            $table->timestamps();
            $table->index(['race_id', 'runner_id', 'created_at']);
            $table->foreign('runner_id')->references('id')->on('runners');
            $table->foreign('race_id')->references('id')->on('races');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('race_runners');
    }
}
