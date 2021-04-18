<?php

namespace App\Http\Controllers;

use App\Models\Amanah;
use Illuminate\Http\Request;

class AmanahController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('tabungan.amanah');
    }

    public function store(Request $request)
    {
        Amanah::create($request->all());

        return redirect('/')->with('status' ,'Data berhasil ditambah.');
    }

    public function show(Amanah $rahmah)
    {
        //
    }

    public function edit(Amanah $rahmah)
    {
        //
    }

    public function update(Request $request, Amanah $rahmah)
    {
        //
    }

    public function destroy(Amanah $rahmah)
    {
        //
    }
}
