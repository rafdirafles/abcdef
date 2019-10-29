<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendidikanUmumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_umums', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nip_nrp',20)->index();
            $table->foreign('nip_nrp')->references('nip_nrp')->on('users')->onDelete('cascade');
            $table->enum('jenjang_pendidikan',['SD','SLTP','SLTA','S1','S2','S3']);
            $table->string('nama_sekolah',50);
            $table->string('jurusan',50);
            $table->string('kota',50);
            $table->integer('tahun_lulus');
            $table->string('no_ijazah',30);
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
        Schema::dropIfExists('pendidikan_umums');
    }
}
