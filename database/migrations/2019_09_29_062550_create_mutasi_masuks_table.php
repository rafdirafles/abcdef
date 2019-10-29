<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutasiMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutasi_masuks', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('id_riwayat_unit_kerja');
            $table->foreign('id_riwayat_unit_kerja')->references('id')->on('riwayat_unit_kerjas')->onDelete('cascade');
            $table->string('tempat_asal',50);
            $table->unsignedInteger('tempat_bekerja');
            $table->foreign('tempat_bekerja')->references('id')->on('unit_kerjas');
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
        Schema::dropIfExists('mutasi_masuks');
    }
}
