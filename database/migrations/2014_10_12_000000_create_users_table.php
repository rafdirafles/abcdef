<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('nip_nrp',90)->primary()->unique();
            $table->string('nama_pegawai',50);
            $table->enum('jenis_pegawai', ['Polri','PNS','Dosen Eksternal']);
            $table->string('nidn',30);
            $table->string('no_kta_pegawai',30)->unique();
            $table->string('no_kep_jabatan',30);
            $table->unsignedinteger('pangkat');
            $table->foreign('pangkat')->references('id')->on('pangkats');
            $table->unsignedinteger('id_satker');
            $table->foreign('id_satker')->references('id')->on('satkers');
            $table->unsignedinteger('jabatan');
            $table->foreign('jabatan')->references('id')->on('jabatans');
            $table->unsignedinteger('id_kompartemen');
            $table->foreign('id_kompartemen')->references('id')->on('kompartemens');
            $table->unsignedinteger('id_divisi');
            $table->foreign('id_divisi')->references('id')->on('divisis');
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',255);
            $table->text('alamat');
            $table->string('tempat_lahir',50);
            $table->date('tanggal_lahir');
            $table->enum('jk', ['L', 'P']);
            $table->enum('agama', ['Islam', 'Kristen','Katolik','Hindu','Budha','Konghucu']);
            $table->string('no_hp',12);
            $table->string('nik')->unique();
            $table->date('tgl_masuk');
            $table->string('foto',200);
            $table->boolean('is_status');
            $table->integer('level');

            // $table->string('gelar_depan',20);
            // $table->string('gelar_belakang',20);
            // $table->enum('status_menikah', ['Belum Kawin', 'Kawin','Janda','Duda']);
            // $table->string('no_kk',16);
            // $table->string('hobi',100);
            //
            //     $table->string('no_tlp',20);
            // $table->float('tinggi_badan');
            // $table->float('berat_badan');
            // $table->string('warna_rambut',50);
            // $table->string('bentuk_muka',50);
            // $table->string('warna_kulit',50);
            // $table->text('ciri_khas');
            // $table->string('cacat_tubuh',50);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
