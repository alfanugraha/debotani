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
        DepositoBadanUsaha::create($request->all());

        return redirect('/')->with('status' ,'Data berhasil ditambah.');
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
