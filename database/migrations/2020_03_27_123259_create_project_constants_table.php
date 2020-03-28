<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectConstantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_constants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->decimal('exchange_rate',13,3);
            $table->decimal('panel_potency',13,3);
            $table->decimal('kg_co2',13,3);
            $table->decimal('trees',13,3);
            $table->decimal('benefit',13,3);
            $table->decimal('benefit_usd',13,3);
            $table->decimal('limit_kwp',13,3);
            $table->decimal('limit_usd_kwp',13,3);
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
        Schema::dropIfExists('project_constants');
    }
}
