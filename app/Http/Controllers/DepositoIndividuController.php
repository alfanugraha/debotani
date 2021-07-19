<?php

namespace App\Http\Controllers;

use App\Models\DepositoIndividu;
use Illuminate\Http\Request;

class DepositoIndividuController extends Controller
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
        return view('deposito.createind');
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
            'nama_nasabah' => 'required',
            'nama_ibu' => 'required',
            'agama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date_format:Y-m-d|before:2021-01-01',
            'pendidikan' => 'required',
            'alamat_1' => 'required',
            'alamat_2' => 'required',
            'identitas' => 'required',
            'file_id' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
            'tanggal_terbit' => 'required',
            'tanggal_jatuh_tempo' => 'required',
            'jenis_kelamin' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'alamat_kantor' => 'required',
            'kode_pos' => 'required',
            'telp_kantor' => 'required',
            'jabatan' => 'required',
            'email' => 'required',
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
        $file = $request->file_id;

        $nama_file = time()."_".$file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        DepositoIndividu::create([
            'no_cif_no_rekening' => $request->no_cif_no_rekening,
            'nama_nasabah' => $request->nama_nasabah,
            'nama_ibu' => $request->nama_ibu,
            'agama' => $request->agama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pendidikan' => $request->pendidikan,
            'alamat_1' => $request->alamat_1,
            'alamat_2' => $request->alamat_2,
            'identitas' => $request->identitas,
            'file_id' => $nama_file,
            'tanggal_terbit' => $request->tanggal_terbit,
            'tanggal_jatuh_tempo' => $request->tanggal_jatuh_tempo,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status' => $request->status,
            'pekerjaan' => $request->pekerjaan,
            'alamat_kantor' => $request->alamat_kantor,
            'kode_pos' => $request->kode_pos,
            'telp_kantor' => $request->telp_kantor,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
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
            'verified' => 0
        ]);

        // DepositoIndividu::create($request->all());

        return redirect('/')->with('status' ,'Data deposito individu berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DepositoIndividu  $depositoIndividu
     * @return \Illuminate\Http\Response
     */
    public function show(DepositoIndividu $depositoIndividu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DepositoIndividu  $depositoIndividu
     * @return \Illuminate\Http\Response
     */
    public function edit(DepositoIndividu $depositoIndividu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DepositoIndividu  $depositoIndividu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DepositoIndividu $depositoIndividu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DepositoIndividu  $depositoIndividu
     * @return \Illuminate\Http\Response
     */
    public function destroy(DepositoIndividu $depositoIndividu)
    {
        //
    }
}
