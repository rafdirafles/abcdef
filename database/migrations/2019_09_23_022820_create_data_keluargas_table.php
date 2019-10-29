<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_keluargas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip_nrp',20)->index();
            $table->foreign('nip_nrp')->references('nip_nrp')->on('users')->onDelete('cascade');
            $table->string('nama',70);
            $table->enum('jk',['L','P']);
            $table->enum('hubungan_keluarga',['Ayah','Ibu','Anak kandung','Anak tiri','Saudara kandung','Saudara tiri']);
            $table->string('tempat_lahir',50);
            $table->date('tanggal_lahir');
            $table->enum('status_hidup',['Hidup','Meninggal']);
            $table->string('pekerjaan',50);
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
        Schema::dropIfExists('data_keluargas');
    }
}
