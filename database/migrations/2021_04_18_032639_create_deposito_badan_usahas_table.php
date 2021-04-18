<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositoBadanUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposito_badan_usahas', function (Blueprint $table) {
            $table->id();
            $table->string('no_cif_no_rekening')->nullable();
            $table->string('nama_usaha')->nullable();
            $table->string('jenis_usaha')->nullable();
            $table->string('telp')->nullable();
            $table->string('fax')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('izin')->nullable();
            $table->string('no_izin')->nullable();
            $table->string('npwp')->nullable();
            $table->string('lap_keuangan')->nullable();
            $table->string('lap_keuangan_status')->nullable();
            $table->string('pengurus')->nullable();
            $table->string('pemangan_ttd')->nullable();
            $table->string('penghasilan_usaha')->nullable();

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
        Schema::dropIfExists('deposito_badan_usahas');
    }
}
