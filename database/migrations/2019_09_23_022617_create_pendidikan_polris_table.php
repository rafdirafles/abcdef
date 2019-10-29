<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendidikanPolrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_polris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip_nrp',90)->index();
            $table->foreign('nip_nrp')->references('nip_nrp')->on('users')->onDelete('cascade');
            $table->string('nama_pendidikan',50);
            $table->integer('tahun');
            $table->enum('lulus_tidak',['Lulus',['Tidak']]);
            $table->integer('lama_bulan');
            $table->integer('rangking');
            $table->string('file',100);
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
        Schema::dropIfExists('pendidikan_polris');
    }
}
