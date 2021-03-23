<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabungans', function (Blueprint $table) {
            $table->string('no_urut')->primary();
            $table->string('nama_nasabah')->nullable();
            $table->string('agama')->nullable();
            $table->string('gol_cust')->nullable();
            $table->string('gol_cust_bi')->nullable();
            $table->string('jnsnsbah')->nullable();
            $table->string('npwp')->nullable();
            $table->string('stcust')->nullable();
            $table->string('jns_id')->nullable();
            $table->string('no_id')->nullable();
            $table->string('tgl_id')->nullable();
            $table->string('tgl_jth_tempo_id')->nullable();
            $table->string('sts_kwn')->nullable();
            $table->string('sex')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('telp_rumah')->nullable();
            $table->string('telp_kantor')->nullable();
            $table->string('fax')->nullable();
            $table->string('hp')->nullable();
            $table->string('sandi_dati')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('nama_versi_slik')->nullable();
            $table->string('ao_hand')->nullable();
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
        Schema::dropIfExists('tabungans');
    }
}
