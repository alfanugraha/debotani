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
        Rahmah::create($request->all());

        return redirect('/')->with('status' ,'Data berhasil ditambah.');
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
