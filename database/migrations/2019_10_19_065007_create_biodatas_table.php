<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip_nrp',20)->index();
            $table->foreign('nip_nrp')->references('nip_nrp')->on('users')->onDelete('cascade');
            $table->enum('status_menikah', ['Belum Kawin', 'Kawin','Janda','Duda']);
            $table->string('no_kk',16);
            $table->string('hobi',100);
            $table->string('no_tlp',20);
            $table->float('tinggi_badan');
            $table->float('berat_badan');
            $table->string('warna_rambut',50);
            $table->string('bentuk_muka',50);
            $table->string('warna_kulit',50);
            $table->text('ciri_khas');
            $table->string('cacat_tubuh',50);
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
        Schema::dropIfExists('biodatas');
    }
}
