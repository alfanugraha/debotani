<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositoIndividu extends Model
{
    protected $table = "deposito_individus";

    protected $fillable = [
        'no_cif_no_rekening',
        'nama_nasabah',
        'nama_ibu',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'pendidikan',
        'alamat_1',
        'alamat_2',
        'identitas',
        'file_id',
        'tanggal_terbit',
        'tanggal_jatuh_tempo',
        'jenis_kelamin',
        'status',
        'pekerjaan',
        'alamat_kantor',
        'kode_pos',
        'telp_kantor',
        'jabatan',
        'email',
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
    ];
}
