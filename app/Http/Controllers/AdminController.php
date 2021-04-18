<?php

namespace App\Http\Controllers;

use App\Exports\AmanahExport;
use App\Exports\BimapanExport;
use App\Exports\DepositoBadanUsahaExport;
use App\Exports\DepositoIndividuExport;
use App\Models\Amanah;
use App\Models\Bimapan;
use App\Models\DepositoBadanUsaha;
use App\Models\DepositoIndividu;
use App\Models\Rahmah;
use App\Models\Simapan;

use App\Exports\RahmahExport;
use App\Exports\SimapanExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function rahmahAll()
    {
        $rahmah = Rahmah::all();
        return view('admin.rahmah', ['rahmah' => $rahmah]);
    }

    public function rahmahShow(Rahmah $id)
    {
        return view('admin.rahmahshow', compact('id'));
    }

    public function rahmahXls()
    {
        return Excel::download(new RahmahExport, 'rahmah.xlsx');
    }

    public function rahmahPdf()
    {
        return Excel::download(new RahmahExport, 'rahmah.pdf');
    }

    public function amanahAll()
    {
        $amanah = Amanah::all();
        return view('admin.amanah', ['amanah' => $amanah]);
    }

    public function amanahShow(Amanah $id)
    {
        return view('admin.amanahshow', compact('id'));
    }

    public function amanahXls()
    {
        return Excel::download(new AmanahExport, 'amanah.xlsx');
    }

    public function amanahPdf()
    {
        return Excel::download(new AmanahExport, 'amanah.pdf');
    }

    public function bimapanAll()
    {
        $bimapan = Bimapan::all();
        return view('admin.bimapan', ['bimapan' => $bimapan]);
    }

    public function bimapanShow(Bimapan $id)
    {
        return view('admin.bimapanshow', compact('id'));
    }

    public function bimapanXls()
    {
        return Excel::download(new BimapanExport, 'bimapan.xlsx');
    }

    public function bimapanPdf()
    {
        return Excel::download(new BimapanExport, 'bimapan.pdf');
    }

    public function simapanAll()
    {
        $simapan = Simapan::all();
        return view('admin.simapan', ['simapan' => $simapan]);
    }

    public function simapanShow(Simapan $id)
    {
        return view('admin.simapanshow', compact('id'));
    }

    public function simapanXls()
    {
        return Excel::download(new SimapanExport, 'simapan.xlsx');
    }

    public function simapanPdf()
    {
        return Excel::download(new SimapanExport, 'simapan.pdf');
    }

    public function depositoRahmahAll()
    {
        $rahmahdepo = DepositoIndividu::all();
        return view('admin.rahmahdepo', ['rahmahdepo' => $rahmahdepo]);
    }

    public function depositoRahmahShow(DepositoIndividu $id)
    {
        return view('admin.rahmahdeposhow', compact('id'));
    }

    public function depositoRahmahXls()
    {
        return Excel::download(new DepositoIndividuExport, 'deposito-rahmah.xlsx');
    }

    public function depositoRahmahPdf()
    {
        return Excel::download(new DepositoIndividuExport, 'deposito-rahmah.pdf');
    }

    public function depositoPrimaAll()
    {
        $primadepo = DepositoBadanUsaha::all();
        return view('admin.primadepo', ['primadepo' => $primadepo]);
    }

    public function depositoPrimaShow(DepositoBadanUsaha $id)
    {
        return view('admin.primadeposhow', compact('id'));
    }

    public function depositoPrimaXls()
    {
        return Excel::download(new DepositoBadanUsahaExport, 'deposito-prima.xlsx');
    }

    public function depositoPrimaPdf()
    {
        return Excel::download(new DepositoBadanUsahaExport, 'deposito-prima.pdf');
    }

}
