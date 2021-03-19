<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tabungan;

class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $student = DB::table('students')->get();
        // dd($student);
        $tabungan = Tabungan::all();
        return view('tabungan.index', ['tabungan' => $tabungan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tabungan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'nrp' => 'required|size:9',
        //     'email' => 'required',
        //     'jurusan' => 'required',
        // ]);

        Tabungan::create($request->all());

        return redirect('/tabungan')->with('status' ,'Data berhasil ditambah.');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tabungan $id)
    {
        return view('tabungan.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabungan $id)
    {
        return view('tabungan.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabungan $id)
    {
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:9',
            'email' => 'required',
            'jurusan' => 'required',
        ]);

        Tabungan::where('id', $id->id)
                ->update([
                    'nama' => $request->nama,
                    'nrp' => $request->nrp,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan
                ]);
        return redirect('/tabungan')->with('status' ,'Data berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabungan $id)
    {
        Tabungan::destroy($id->id);
        return redirect('/tabungan')->with('status' ,'Data berhasil dihapus.');
    }
}
