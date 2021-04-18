<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amanahs', function (Blueprint $table) {
            $table->id();
            $table->string('no_cif_no_rekening')->nullable();
            $table->string('nama_nasabah')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('status')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('identitas')->nullable();
            $table->string('no_id')->nullable();
            $table->string('tanggal_berlaku_id')->nullable();
            $table->string('agama')->nullable();
            $table->string('npwp')->nullable();
            $table->string('alamat_1')->nullable();
            $table->string('alamat_2')->nullable();
            $table->string('status_rumah')->nullable();
            $table->string('telp_rumah')->nullable();
            $table->string('telp_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('nama_kantor')->nullable();
            $table->string('alamat_kantor')->nullable();
            $table->string('telp_kantor')->nullable();
            $table->string('pendapatan')->nullable();
            $table->string('sumber_dana')->nullable();
            $table->string('tujuan_buka_rek')->nullable();
            $table->string('setoran_1')->nullable();
            $table->string('nama_ahli_waris')->nullable();
            $table->string('tempat_lahir_ahli_waris')->nullable();
            $table->string('tanggal_lahir_ahli_waris')->nullable();
            $table->string('alamat_ahli_waris')->nullable();
            $table->string('telp_rumah_ahli_waris')->nullable();
            $table->string('telp_hp_ahli_waris')->nullable();
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
        Schema::dropIfExists('amanahs');
    }
}
