<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinhViensTable extends Migration
{
    public function up()
    {
        Schema::create('SV', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('mssv')->unique();
            $table->integer('CTDT_id')->unsigned();
            $table->string('Muc_canh_cao');
            $table->tinyInteger('trang_thai')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('SV');
    }
}
