<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_proposals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->string('name');
            $table->decimal('usd_w', 5, 2);
            for ($i=1; $i <= 3; $i++) { 
                $table->bigInteger('inverter_'.$i.'_id')->unsigned()->nullable();
                $table->foreign('inverter_'.$i.'_id')->references('id')->on('inverters');
                $table->string('inverter_'.$i.'_name')->nullable();
                $table->integer('inverter_'.$i.'_q')->nullable();
            }
            $table->integer('panels_q');
            $table->integer('usd_iva');
            $table->decimal('kw',5,2);
            $table->integer('benefit');
            $table->integer('porc_price');
            $table->integer('m2');
            $table->integer('generation');
            $table->integer('solar_fraction');
            $table->integer('co2');
            $table->integer('trees');
            $table->integer('specific_gener');
            $table->boolean('main');
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
        Schema::dropIfExists('project_proposals');
    }
}
