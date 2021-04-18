<?php

namespace App\Exports;

use App\Models\DepositoIndividu;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DepositoIndividuExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DepositoIndividu::all();
    }

    public function headings(): array
    {
        return [
            'id',
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
            'created_at',
            'updated_at'
        ];
    }
}
