<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    protected $table = "tabungan";


    protected $fillable = [
        'nama_nasabah',
        'agama',
        'gol_cust',
        'gol_cust_bi',
        'jnsnsbah',
        'npwp',
        'stcust',
        'jns_id',
        'no_id',
        'tgl_id',
        'tgl_jth_tempo_id',
        'sts_kwn',
        'sex',
        'tempat_lahir',
        'tgl_lahir',
        'email',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kota',
        'kode_pos',
        'telp_rumah',
        'telp_kantor',
        'fax',
        'hp',
        'sandi_dati',
        'nama_ibu_kandung',
        'nama_versi_slik',
        'ao_hand',        
    ];
}
