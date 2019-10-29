<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatKepangkatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_kepangkatans', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nip_nrp',20)->index();
            $table->foreign('nip_nrp')->references('nip_nrp')->on('users')->onDelete('cascade');
            $table->unsignedInteger('id_pangkat');
            $table->foreign('id_pangkat')->references('id')->on('pangkats')->onDelete('cascade');
            $table->date('tmt');
            $table->string('nomor_sk',50);
            $table->string('pejabat',50);
            $table->date('tanggal_sk');
            $table->string('dasar_peraturan',150);
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
        Schema::dropIfExists('riwayat_kepangkatans');
    }
}
