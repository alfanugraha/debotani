<?php

namespace App\Exports;

use App\Models\DepositoBadanUsaha;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DepositoBadanUsahaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DepositoBadanUsaha::all();
    }

    public function headings(): array
    {
        return [
            'id',
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
            'lap_keuangan',
            'lap_keuangan_status',
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
            'created_at',
            'updated_at'
        ];
    }
}
