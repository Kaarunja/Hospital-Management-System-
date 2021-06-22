<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //  Schema::disableForeignKeyConstraints();
        Schema::create('periods', function (Blueprint $table) {
            $table->id('Period_ID');
            $table->string('Time_Period');

            $table->timestamps();
            $table->string('Doctor_ID');
            $table->string('Specialization');
            $table->string('Doctor_Name');
            $table->date('Date');
            $table->string('day');
            $table->integer('No_of_Patients');
           // $table->foreign('Doctor_ID')->references('Doctor_ID')->on('doctors');
        });
        //Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periods');
    }
}
