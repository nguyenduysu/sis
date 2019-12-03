<?php
//
//use Illuminate\Support\Facades\Schema;
//use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Database\Migrations\Migration;
//
//class CreateSubjectsTable extends Migration
//{
//    /**
//     * Run the migrations.
//     *
//     * @return void
//     */
//    public function up()
//    {
//        Schema::create('subjects', function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->string('name');
//            $table->integer('tc');
//            $table->integer('semester');
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
//        Schema::dropIfExists('subjects');
//    }
//}
