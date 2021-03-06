<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelompokLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelompok_laporan', function (Blueprint $table) {
            $table->id();
            $table->integer('no')->unsigned();
            $table->bigInteger('id_guru')->unsigned();
            $table->bigInteger('id_data_prakerin')->unsigned();
            $table->foreign('id_data_prakerin')->references('id')->on('data_prakerin')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('kelompok_laporan');
    }
}
