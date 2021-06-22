<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // Schema::disableForeignKeyConstraints();
        Schema::create('patients', function (Blueprint $table) {
            $table->String('Pat_id');
            $table->String('Pat_name');
            $table->String('Pat_MobileNo');
            $table->String('Pat_Email')->unique();
            $table->String('Pat_password');
            $table->String('Pat_address');
            $table->date('Pat_DateOfBirth');
            $table->String('Pat_Gender');
            $table->String('Pat_Nic');
            $table->primary('Pat_id');
            $table->String('patim')->nullable();
            $table->timestamps();
        });
       // Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
