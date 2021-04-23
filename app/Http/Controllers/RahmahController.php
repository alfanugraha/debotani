<?php

namespace App\Http\Controllers;

use App\Models\Rahmah;
use Illuminate\Http\Request;

class RahmahController extends Controller
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
        return view('tabungan.rahmah');
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
            'nama_nasabah' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'status' => 'required',
            'nama_ibu_kandung' => 'required',
            'identitas' => 'required',
            'no_id' => 'required',
            'tanggal_berlaku_id' => 'required',
            'file_id' => 'required|file|image|mimes:jpeg,png,jpg,pdf|max:2048',
            'agama' => 'required',
            'npwp' => 'required',
            'alamat_1' => 'required',
            'alamat_2' => 'required',
            'status_rumah' => 'required',
            'telp_rumah' => 'required',
            'telp_hp' => 'required',
            'email' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'nama_kantor' => 'required',
            'alamat_kantor' => 'required',
            'telp_kantor' => 'required',
            'pendapatan' => 'required',
            'sumber_dana' => 'required',
            'tujuan_buka_rek' => 'required',
            'setoran_1' => 'required',
            'setoran_2' => 'required',
            'jangka_waktu' => 'required',
            'nama_ahli_waris' => 'required',
            'tempat_lahir_ahli_waris' => 'required',
            'tanggal_lahir_ahli_waris' => 'required',
            'alamat_ahli_waris' => 'required',
            'telp_rumah_ahli_waris' => 'required',
            'telp_hp_ahli_waris' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file_id;

		$nama_file = time()."_".$file->getClientOriginalName();

      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload, $nama_file);

        Rahmah::create([
            'nama_nasabah' => $request->nama_nasabah,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'status' => $request->status,
            'nama_ibu_kandung' => $request->nama_ibu_kandung,
            'identitas' => $request->identitas,
            'no_id' => $request->no_id,
            'tanggal_berlaku_id' => $request->tanggal_berlaku_id,
            'file_id' => $nama_file,
            'agama' => $request->agama,
            'npwp' => $request->npwp,
            'alamat_1' => $request->alamat_1,
            'alamat_2' => $request->alamat_2,
            'status_rumah' => $request->status_rumah,
            'telp_rumah' => $request->telp_rumah,
            'telp_hp' => $request->telp_hp,
            'email' => $request->email,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'nama_kantor' => $request->nama_kantor,
            'alamat_kantor' => $request->alamat_kantor,
            'telp_kantor' => $request->telp_kantor,
            'pendapatan' => $request->pendapatan,
            'sumber_dana' => $request->sumber_dana,
            'tujuan_buka_rek' => $request->tujuan_buka_rek,
            'setoran_1' => $request->setoran_1,
            'setoran_2' => $request->setoran_2,
            'jangka_waktu' => $request->jangka_waktu,
            'nama_ahli_waris' => $request->nama_ahli_waris,
            'tempat_lahir_ahli_waris' => $request->tempat_lahir_ahli_waris,
            'tanggal_lahir_ahli_waris' => $request->tanggal_lahir_ahli_waris,
            'alamat_ahli_waris' => $request->alamat_ahli_waris,
            'telp_rumah_ahli_waris' => $request->telp_rumah_ahli_waris,
            'telp_hp_ahli_waris' => $request->telp_hp_ahli_waris,
            'verified' => 0,
        ]);


        // Rahmah::create($request->all());

        return redirect('/')->with('status' ,'Data nasabah Rahmah berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rahmah  $rahmah
     * @return \Illuminate\Http\Response
     */
    public function show(Rahmah $rahmah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rahmah  $rahmah
     * @return \Illuminate\Http\Response
     */
    public function edit(Rahmah $rahmah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rahmah  $rahmah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rahmah $rahmah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rahmah  $rahmah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rahmah $rahmah)
    {
        //
    }
}
