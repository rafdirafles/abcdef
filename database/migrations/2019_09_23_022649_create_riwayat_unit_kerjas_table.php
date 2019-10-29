<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatUnitKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_unit_kerjas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip_nrp',20)->index();
            $table->foreign('nip_nrp')->references('nip_nrp')->on('users')->onDelete('cascade');
            $table->enum('jenis_mutasi',['Keluar','Masuk','Internal']);
            $table->unsignedinteger('unit_kerja');
            $table->foreign('unit_kerja')->references('id')->on('unit_kerjas')->onDelete('cascade');
            $table->text('no_sk');
            $table->string('pejabat',50);
            $table->date('tgl_sk');
            $table->string('keterangan',255);
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
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
        Schema::dropIfExists('riwayat_unit_kerjas');
    }
}
