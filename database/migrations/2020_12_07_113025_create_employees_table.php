<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name', 256);
            $table->date('date_of_employment');
            $table->char('phone',9);
            $table->string('email','320');
            $table->integer('salary');
            $table->string('photo');
            $table->BigInteger('position_id')->unsigned();
            $table->foreign('position_id')->references('id')->on('positions');
            $table->integer('head_id')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
