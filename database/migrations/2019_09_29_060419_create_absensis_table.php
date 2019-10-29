<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nip_nrp',20)->index();
            $table->foreign('nip_nrp')->references('nip_nrp')->on('users')->onDelete('cascade');
            $table->integer('status_absensi');
            $table->date('tgl_absensi');
            $table->string('keterangan',100);

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
        Schema::dropIfExists('absensis');
    }
}
