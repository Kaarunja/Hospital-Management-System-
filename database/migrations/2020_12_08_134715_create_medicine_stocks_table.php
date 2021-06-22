<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_stocks', function (Blueprint $table) {
            // $table->id();
             $table->String('Med_No');
             $table->String('Med_Name');
             $table->String('Dosage');
             $table->String('Consumption_time');
             $table->float('Unit_Price');
             $table->date('Exp_Date');
             $table->date('Manu_Date');
             $table->integer('Quantity');
             $table->integer('AlertStock');
            $table->primary('Med_No');
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
        Schema::dropIfExists('medicine_stocks');
    }
}
