<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_periods', function (Blueprint $table) {
            $table->string('Period_ID');
            $table->string('Doctor_ID');
            $table->date('Date');
            $table->integer('No_of_Patients');
            $table->primary(['Period_ID','Doctor_ID']);
            $table->foreign('Doctor_ID')->references('Doctor_ID')->on('doctors');
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
        Schema::dropIfExists('working_periods');
    }
}
