<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonHocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MonHoc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->integer('tc');
            $table->integer('ky_hoc_chuan');
            $table->integer('LoaiHP_id');
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
        Schema::dropIfExists('MonHoc');
    }
}
