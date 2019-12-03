<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKQHTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KQ_HT', function (Blueprint $table) {
            $table->increments('id');
            $table->float('Diem_QT');
            $table->float('Diem_CK');
            $table->integer('SV_id')->unsigned();
            $table->integer('MH_id')->unsigned();
            $table->tinyInteger('trang_thai')->unsigned();
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
        Schema::dropIfExists('KQ_HT');
    }
}
