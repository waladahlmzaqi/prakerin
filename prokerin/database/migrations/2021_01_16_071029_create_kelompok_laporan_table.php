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
            $table->bigInteger('id_siswa')->unsigned();
            $table->bigInteger('id_perusahaan')->unsigned();
            $table->longText('judul_laporan');
            $table->timestamps();
        });
        Schema::table('kelompok_laporan', function (Blueprint $table) {
            $table->foreign('id_perusahaan')->references('id')->on('perusahaan')->onDelete('cascade')->onUpdate("cascade");
        });
        Schema::table('kelompok_laporan', function (Blueprint $table) {
            $table->foreign('id_siswa')->references('id')->on('siswa')->onDelete('cascade')->onUpdate("cascade");
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
