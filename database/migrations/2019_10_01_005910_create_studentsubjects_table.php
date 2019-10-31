<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentsubjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idStudent')->unsigned();
            $table->bigInteger('idSubject')->unsigned();
            $table->float('scoreMid');
            $table->float('scoreFinal');
            $table->boolean('status');
            // $table->foreign('idStudent')->references('id')->on('students');
            // $table->foreign('idSubject')->references('id')->on('subjects');
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
        Schema::dropIfExists('studentsubjects');
    }
}
