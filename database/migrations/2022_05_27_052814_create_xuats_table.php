<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXuatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SoLuong');
            $table->string('NgayXuat');
            $table->string('GiaXuat');
            $table->string('TongTien');
            $table->string('GhiChu');
            $table->integer('Caytrong_ID')->unsigned();
            $table->integer('Khu_ID')->unsigned();
            $table->integer('Nhanvien_ID')->unsigned();
            $table->foreign('Caytrong_ID')->references('id')->on('caytrongs');
            $table->foreign('Khu_ID')->references('id')->on('khus');
            $table->foreign('Nhanvien_ID')->references('id')->on('nhanviens');

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
        Schema::dropIfExists('xuats');
    }
}