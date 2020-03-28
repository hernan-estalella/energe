<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->string('client_name');
            $table->string('client_address');
            $table->bigInteger('zone_id')->unsigned();
            $table->foreign('zone_id')->references('id')->on('zones');
            $table->string('zone_name');
            $table->bigInteger('assessor_id')->unsigned();
            $table->foreign('assessor_id')->references('id')->on('assessors');
            $table->string('assessor_name');
            $table->string('assessor_email')->nullable();
            $table->string('assessor_telephone')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
