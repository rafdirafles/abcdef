<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendidikanKejuruansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_kejuruans', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nip_nrp',20)->index();
            $table->foreign('nip_nrp')->references('nip_nrp')->on('users')->onDelete('cascade');
            $table->string('nama_pendidikan',50);
            $table->string('kota',50);
            $table->integer('tahun_lulus');
            $table->integer('lama_bulan');
            $table->integer('rangking');
            $table->enum('is_lulus_tidak',['Lulus','Tidak']);
            $table->string('keterangan',100);
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
        Schema::dropIfExists('pendidikan_kejuruans');
    }
}
