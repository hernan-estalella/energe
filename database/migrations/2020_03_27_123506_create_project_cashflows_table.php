<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectCashflowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_cashflows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->integer('row');
            $table->string('label');
            for ($i=0; $i <= 25; $i++) { 
                $table->decimal('value_'.$i,12,2)->nullable();
            }
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
        Schema::dropIfExists('project_cashflows');
    }
}
