<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('id_siswa')->foreign('id_siswa')->references('id')->on('siswa');
            $table->string('umur')->nullable();
            $table->string('tempat')->nullable();
            $table->date('tangal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nama_bapa')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nomor_orangtua')->nullable();
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
        Schema::dropIfExists('detail_siswa');
    }
}
