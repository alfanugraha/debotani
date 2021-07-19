<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositoBadanUsaha extends Model
{
    protected $table = "deposito_badan_usahas";

    protected $fillable = [
        'no_cif_no_rekening',
        'nama_usaha',
        'jenis_usaha',
        'telp',
        'fax',
        'alamat',
        'kode_pos',
        'izin',
        'no_izin',
        'npwp',
        'file_npwp',
        'lap_keuangan',
        'file_lap_keuangan',
        'pengurus',
        'pemangan_ttd',
        'penghasilan_usaha',
        'nama_ahli_waris',
        'alamat_ahli_waris',
        'hub_keluarga',
        'nominal_deposito',
        'terbilang',
        'jangka_waktu',
        'tanggal_valuta',
        'tanggal_jatuh_tempo_valuta',
        'nisbah_maal',
        'nisbah_mudharib',
        'pencairan_deposito',
        'pendapatan',
        'tujuan_buka_rek',
        'pencucian_uang',
        'verified',
        'verified_by'
    ];
}
