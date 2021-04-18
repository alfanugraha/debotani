<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmanahBadanUsaha extends Model
{
    protected $table = "amanah_badan_usahas";

    protected $fillable = [
        'no_cif_no_rekening',
        'bentuk_usaha',
        'nama_usaha',
        'bidang_usaha',
        'akta_usaha',
        'alamat_usaha',
        'tempat_berdiri',
        'tanggal_berdiri',
        'npwp',
        'telp',
        'fax',
        'email_usaha',
        'pendapatan',
        'tujuan_buka_rek',
        'sumber_dana',

        'status_kepemilikan_1',
        'jabatan_1',
        'nama_1',
        'tempat_lahir_1',
        'tanggal_lahir_1',
        'jenis_kelamin_1',
        'identitas_1',
        'no_id_1',
        'tanggal_berlaku_id_1',
        'alamat_11',
        'alamat_21',
        'status_rumah_1',
        'telp_rumah_1',
        'telp_hp_1',
        'email_1',

        'status_kepemilikan_2',
        'jabatan_2',
        'nama_2',
        'tempat_lahir_2',
        'tanggal_lahir_2',
        'jenis_kelamin_2',
        'identitas_2',
        'no_id_2',
        'tanggal_berlaku_id_2',
        'alamat_12',
        'alamat_22',
        'status_rumah_2',
        'telp_rumah_2',
        'telp_hp_2',
        'email_2',
    ];
}
