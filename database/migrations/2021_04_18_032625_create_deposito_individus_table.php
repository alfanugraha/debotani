<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositoIndividusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposito_individus', function (Blueprint $table) {
            $table->id();
            $table->string('no_cif_no_rekening')->nullable();
            $table->string('nama_nasabah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('agama')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('alamat_1')->nullable();
            $table->string('alamat_2')->nullable();
            $table->string('identitas')->nullable();
            $table->string('file_id')->nullable();
            $table->string('tanggal_terbit')->nullable();
            $table->string('tanggal_jatuh_tempo')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('status')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('alamat_kantor')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('telp_kantor')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('email')->nullable();
            $table->string('nama_ahli_waris')->nullable();
            $table->string('alamat_ahli_waris')->nullable();
            $table->string('hub_keluarga')->nullable();
            $table->string('nominal_deposito')->nullable();
            $table->string('terbilang')->nullable();
            $table->string('jangka_waktu')->nullable();
            $table->string('tanggal_valuta')->nullable();
            $table->string('tanggal_jatuh_tempo_valuta')->nullable();
            $table->string('nisbah_maal')->nullable();
            $table->string('nisbah_mudharib')->nullable();
            $table->string('pencairan_deposito')->nullable();
            $table->string('pendapatan')->nullable();
            $table->string('tujuan_buka_rek')->nullable();
            $table->string('pencucian_uang')->nullable();
            $table->boolean('verified')->default(0);
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
        Schema::dropIfExists('deposito_individus');
    }
}
