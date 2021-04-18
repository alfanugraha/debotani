<?php

namespace App\Exports;

use App\Models\Simapan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SimapanExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Simapan::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'nama_nasabah',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'status',
            'nama_ibu_kandung',
            'identitas',
            'no_id',
            'tanggal_berlaku_id',
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
            'nama_ahli_waris',
            'tempat_lahir_ahli_waris',
            'tanggal_lahir_ahli_waris',
            'alamat_ahli_waris',
            'telp_rumah_ahli_waris',
            'telp_hp_ahli_waris',
            'created_at',
            'updated_at'
        ];
    }
}
