<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index(){
        // mengambil data pegawai
        $pegawai = Pegawai::paginate(5);

        return view('pegawai', ['pegawai' => $pegawai]);
    }
}
