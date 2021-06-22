<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
          
            $table->id('Appointment_No');
            $table->String('Period_ID')->nullable();
            $table->String('Doctor_ID')->nullable();
            $table->String('Pat_id')->nullable();
            $table->date('Date');
            $table->String('Time');
            $table->String('NIC_No')->nullable();            ;
            $table->String('Doctor_Name');
            $table->String('Specialization');
           
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
        Schema::dropIfExists('appointments');
    }
}
