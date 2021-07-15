<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimapan extends Model
{
    protected $table = "bimapans";

    protected $fillable = [
        'no_cif_no_rekening',
        'nama_nasabah',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'status',
        'nama_ibu_kandung',
        'identitas',
        'no_id',
        'tanggal_berlaku_id',
        'file_id',
        'agama',
        'npwp',
        'alamat_1',
        'alamat_2',
        'status_rumah',
        'telp_rumah',
        'telp_hp',
        'email',
        'pendidikan',
        'pekerjaan',
        'nama_kantor',
        'alamat_kantor',
        'telp_kantor',
        'pendapatan',
        'sumber_dana',
        'tujuan_buka_rek',
        'setoran_1',
        'setoran_2',
        'jangka_waktu',
        'nama_ahli_waris',
        'tempat_lahir_ahli_waris',
        'tanggal_lahir_ahli_waris',
        'alamat_ahli_waris',
        'telp_rumah_ahli_waris',
        'telp_hp_ahli_waris',
        'verified',
        'verified_by'
    ];
}
