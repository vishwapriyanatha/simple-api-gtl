<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('runner_id');
            $table->string('place');
            $table->string('marks');
            $table->timestamps();
            $table->index(['runner_id', 'created_at']);
            $table->foreign('runner_id')->references('id')->on('runners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_data');
    }
}
