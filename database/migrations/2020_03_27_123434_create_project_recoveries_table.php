<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectRecoveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_recoveries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->integer('potency');
            $table->integer('investment');
            $table->integer('fiscal_bonus');
            $table->decimal('inflation_1',5,2);
            $table->decimal('inflation_8',5,2);
            $table->decimal('inflation_rest',5,2);
            $table->decimal('discount_rate',5,2);
            $table->integer('van');
            $table->decimal('tir',5,2);
            $table->integer('recovery_years');
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
        Schema::dropIfExists('project_recoveries');
    }
}
