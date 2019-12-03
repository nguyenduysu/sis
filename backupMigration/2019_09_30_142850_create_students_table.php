<?php
//
//use Illuminate\Support\Facades\Schema;
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Database\Migrations\Migration;
//
//class CreateStudentsTable extends Migration
//{
//    /**
//     * Run the migrations.
//     *
//     * @return void
//     */
//    public function up()
//    {
//        Schema::create('students', function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->string('name');
//            $table->string('mssv');
//            $table->integer('DateOfBirth')->nullable();;
//            $table->string('class');
//            $table->integer('course');
//            $table->bigInteger('idInstitute')->unsigned();
//            $table->foreign('idInstitute')->references('id')->on('institutes');
//            $table->timestamps();
//        });
//    }
//
//    /**
//     * Reverse the migrations.
//     *
//     * @return void
//     */
//    public function down()
//    {
//        Schema::dropIfExists('students');
//    }
//}
