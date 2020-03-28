<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
            for ($i=1; $i <= 12; $i++) { 
                $table->integer('consumption_'.$i);
                $table->integer('value_'.$i);
            }
            $table->integer('annual_consumption');
            $table->integer('average_consumption');
            $table->decimal('kwh_cost',5,2);
            $table->integer('hired_potency');
            $table->integer('actual_kg_co2');
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
        Schema::dropIfExists('project_invoices');
    }
}
