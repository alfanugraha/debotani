<?php

namespace App\Http\Controllers;

use App\Models\DepositoBadanUsaha;
use Illuminate\Http\Request;

class DepositoBadanUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deposito.createbusaha');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_cif_no_rekening' => 'required',
            'nama_usaha' => 'required',
            'jenis_usaha' => 'required',
            'telp' => 'required',
            'fax' => 'required',
            'alamat' => 'required',
            'kode_pos' => 'required',
            'izin' => 'required',
            'no_izin' => 'required',
            'npwp' => 'required',
            'file_npwp' => 'required|file|image|mimes:jpeg,png,jpg,pdf|max:2048',
            'lap_keuangan' => 'required',
            'file_lap_keuangan' => 'required|file|image|mimes:jpeg,png,jpg,pdf|max:2048',
            'pengurus' => 'required',
            'pemangan_ttd' => 'required',
            'penghasilan_usaha' => 'required',
            'nama_ahli_waris' => 'required',
            'alamat_ahli_waris' => 'required',
            'hub_keluarga' => 'required',
            'nominal_deposito' => 'required',
            'terbilang' => 'required',
            'jangka_waktu' => 'required',
            'tanggal_valuta' => 'required',
            'tanggal_jatuh_tempo_valuta' => 'required',
            'nisbah_maal' => 'required',
            'nisbah_mudharib' => 'required',
            'pencairan_deposito' => 'required',
            'pendapatan' => 'required',
            'tujuan_buka_rek' => 'required',
            'pencucian_uang' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file_npwp = $request->file_npwp;
        $file_lap_keuangan = $request->file_lap_keuangan;

        $nama_file_npwp = time()."_".$file_npwp->getClientOriginalName();
        $nama_file_keuangan = time()."_".$file_lap_keuangan->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file_npwp->move($tujuan_upload, $nama_file_npwp);
        $file_lap_keuangan->move($tujuan_upload, $nama_file_keuangan);

        DepositoBadanUsaha::create([
            'no_cif_no_rekening' => $request->no_cif_no_rekening,
            'nama_usaha' => $request->nama_usaha,
            'jenis_usaha' => $request->jenis_usaha,
            'telp' => $request->telp,
            'fax' => $request->fax,
            'alamat' => $request->alamat,
            'kode_pos' => $request->kode_pos,
            'izin' => $request->izin,
            'no_izin' => $request->no_izin,
            'npwp' => $request->npwp,
            'file_npwp' => $request->nama_file_npwp,
            'lap_keuangan' => $request->lap_keuangan,
            'file_lap_keuangan' => $request->nama_file_keuangan,
            'pengurus' => $request->pengurus,
            'pemangan_ttd' => $request->pemangan_ttd,
            'penghasilan_usaha' => $request->penghasilan_usaha,
            'nama_ahli_waris' => $request->nama_ahli_waris,
            'alamat_ahli_waris' => $request->alamat_ahli_waris,
            'hub_keluarga' => $request->hub_keluarga,
            'nominal_deposito' => $request->nominal_deposito,
            'terbilang' => $request->terbilang,
            'jangka_waktu' => $request->jangka_waktu,
            'tanggal_valuta' => $request->tanggal_valuta,
            'tanggal_jatuh_tempo_valuta' => $request->tanggal_jatuh_tempo_valuta,
            'nisbah_maal' => $request->nisbah_maal,
            'nisbah_mudharib' => $request->nisbah_mudharib,
            'pencairan_deposito' => $request->pencairan_deposito,
            'pendapatan' => $request->pendapatan,
            'tujuan_buka_rek' => $request->tujuan_buka_rek,
            'pencucian_uang' => $request->pencucian_uang,
            'verified' => 0,
        ]);
        // DepositoBadanUsaha::create($request->all());

        return redirect('/')->with('status' ,'Data deposito badan usaha berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DepositoBadanUsaha  $depositoBadanUsaha
     * @return \Illuminate\Http\Response
     */
    public function show(DepositoBadanUsaha $depositoBadanUsaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DepositoBadanUsaha  $depositoBadanUsaha
     * @return \Illuminate\Http\Response
     */
    public function edit(DepositoBadanUsaha $depositoBadanUsaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DepositoBadanUsaha  $depositoBadanUsaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DepositoBadanUsaha $depositoBadanUsaha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DepositoBadanUsaha  $depositoBadanUsaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(DepositoBadanUsaha $depositoBadanUsaha)
    {
        //
    }
}
