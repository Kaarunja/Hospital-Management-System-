<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     //   Schema::disableForeignKeyConstraints();
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->String('Pres_No');
            $table->String('Pat_id');
            $table->String('Diagnosis');
            $table->String('Doctor_ID');
            $table->String('Med_Name');
            $table->String('Description');
            $table->primary('Pres_No');
            $table->foreign('Pat_id')->references('Pat_id')->on('patients');
            $table->foreign('Doctor_ID')->references('Doctor_ID')->on('doctors');


            $table->timestamps();
        });
      //  Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
}
