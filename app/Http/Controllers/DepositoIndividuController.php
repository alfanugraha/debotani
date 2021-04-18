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
        DepositoIndividu::create($request->all());

        return redirect('/')->with('status' ,'Data berhasil ditambah.');
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
