<?php

namespace App\Http\Controllers;

use App\Models\AmanahBadanUsaha;
use Illuminate\Http\Request;

class AmanahBadanUsahaController extends Controller
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
        return view('tabungan.amanahbu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AmanahBadanUsaha::create($request->all());

        return redirect('/')->with('status' ,'Data berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AmanahBadanUsaha  $amanahBadanUsaha
     * @return \Illuminate\Http\Response
     */
    public function show(AmanahBadanUsaha $amanahBadanUsaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AmanahBadanUsaha  $amanahBadanUsaha
     * @return \Illuminate\Http\Response
     */
    public function edit(AmanahBadanUsaha $amanahBadanUsaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AmanahBadanUsaha  $amanahBadanUsaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AmanahBadanUsaha $amanahBadanUsaha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AmanahBadanUsaha  $amanahBadanUsaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(AmanahBadanUsaha $amanahBadanUsaha)
    {
        //
    }
}
