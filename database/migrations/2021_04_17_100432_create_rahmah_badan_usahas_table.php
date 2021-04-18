<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRahmahBadanUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rahmah_badan_usahas', function (Blueprint $table) {
            $table->id();
            $table->string('no_cif_no_rekening')->nullable();
            $table->string('bentuk_usaha')->nullable();
            $table->string('nama_usaha')->nullable();
            $table->string('bidang_usaha')->nullable();
            $table->string('akta_usaha')->nullable();
            $table->string('alamat_usaha')->nullable();
            $table->string('tempat_berdiri')->nullable();
            $table->string('tanggal_berdiri')->nullable();
            $table->string('npwp')->nullable();
            $table->string('telp')->nullable();
            $table->string('fax')->nullable();
            $table->string('email_usaha')->nullable();
            $table->string('pendapatan')->nullable();
            $table->string('tujuan_buka_rek')->nullable();
            $table->string('sumber_dana')->nullable();

            $table->string('status_kepemilikan_1')->nullable();
            $table->string('jabatan_1')->nullable();
            $table->string('nama_1')->nullable();
            $table->string('tempat_lahir_1')->nullable();
            $table->string('tanggal_lahir_1')->nullable();
            $table->string('jenis_kelamin_1')->nullable();
            $table->string('identitas_1')->nullable();
            $table->string('no_id_1')->nullable();
            $table->string('tanggal_berlaku_id_1')->nullable();
            $table->string('alamat_11')->nullable();
            $table->string('alamat_21')->nullable();
            $table->string('status_rumah_1')->nullable();
            $table->string('telp_rumah_1')->nullable();
            $table->string('telp_hp_1')->nullable();
            $table->string('email_1')->nullable();

            $table->string('status_kepemilikan_2')->nullable();
            $table->string('jabatan_2')->nullable();
            $table->string('nama_2')->nullable();
            $table->string('tempat_lahir_2')->nullable();
            $table->string('tanggal_lahir_2')->nullable();
            $table->string('jenis_kelamin_2')->nullable();
            $table->string('identitas_2')->nullable();
            $table->string('no_id_2')->nullable();
            $table->string('tanggal_berlaku_id_2')->nullable();
            $table->string('alamat_12')->nullable();
            $table->string('alamat_22')->nullable();
            $table->string('status_rumah_2')->nullable();
            $table->string('telp_rumah_2')->nullable();
            $table->string('telp_hp_2')->nullable();
            $table->string('email_2')->nullable();

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
        Schema::dropIfExists('rahmah_badan_usahas');
    }
}
