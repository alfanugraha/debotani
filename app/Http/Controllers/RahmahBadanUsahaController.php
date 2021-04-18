<?php

namespace App\Http\Controllers;

use App\Models\RahmahBadanUsaha;
use Illuminate\Http\Request;

class RahmahBadanUsahaController extends Controller
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
        return view('tabungan.rahmahbu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RahmahBadanUsaha::create($request->all());

        return redirect('/')->with('status' ,'Data berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RahmahBadanUsaha  $rahmahBadanUsaha
     * @return \Illuminate\Http\Response
     */
    public function show(RahmahBadanUsaha $rahmahBadanUsaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RahmahBadanUsaha  $rahmahBadanUsaha
     * @return \Illuminate\Http\Response
     */
    public function edit(RahmahBadanUsaha $rahmahBadanUsaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RahmahBadanUsaha  $rahmahBadanUsaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RahmahBadanUsaha $rahmahBadanUsaha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RahmahBadanUsaha  $rahmahBadanUsaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(RahmahBadanUsaha $rahmahBadanUsaha)
    {
        //
    }
}
