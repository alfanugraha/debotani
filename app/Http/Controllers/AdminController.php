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
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // $rahmah_all = DB::table('rahmahs')
        $rahmah_all = Rahmah::whereDate('created_at', date('Y-m-d'))->get()->count();
        $rahmah_lk = DB::table('rahmahs')->where('jenis_kelamin', '=', 'Laki-laki')->count();
        $rahmah_pr = DB::table('rahmahs')->where('jenis_kelamin', '=', 'Perempuan')->count();

        $amanahs_all = Amanah::whereDate('created_at', date('Y-m-d'))->get()->count();
        $amanahs_lk = DB::table('amanahs')->where('jenis_kelamin', '=', 'Laki-laki')->count();
        $amanahs_pr = DB::table('amanahs')->where('jenis_kelamin', '=', 'Perempuan')->count();

        $bimapan_all = Bimapan::whereDate('created_at', date('Y-m-d'))->get()->count();
        $bimapan_lk = DB::table('bimapans')->where('jenis_kelamin', '=', 'Laki-laki')->count();
        $bimapan_pr = DB::table('bimapans')->where('jenis_kelamin', '=', 'Perempuan')->count();

        $simapan_all = Simapan::whereDate('created_at', date('Y-m-d'))->get()->count();
        $simapan_lk = DB::table('simapans')->where('jenis_kelamin', '=', 'Laki-laki')->count();
        $simapan_pr = DB::table('simapans')->where('jenis_kelamin', '=', 'Perempuan')->count();

        $ind_all = DepositoIndividu::whereDate('created_at', date('Y-m-d'))->get()->count();
        $ind_lk = DB::table('deposito_individus')->where('jenis_kelamin', '=', 'Laki-laki')->count();
        $ind_pr = DB::table('deposito_individus')->where('jenis_kelamin', '=', 'Perempuan')->count();

        $deposito_all = DepositoBadanUsaha::whereDate('created_at', date('Y-m-d'))->get()->count();

        return view('admin.index',
            [
                'rahmah_all' => $rahmah_all, 'rahmah_pr' => $rahmah_pr, 'rahmah_lk' => $rahmah_lk,
                'amanah_all' => $amanahs_all, 'amanah_lk' => $amanahs_lk, 'amanah_pr' => $amanahs_pr,
                'bimapan_all' => $bimapan_all, 'bimapan_lk' => $bimapan_lk, 'bimapan_pr' => $bimapan_pr,
                'simapan_all' => $simapan_all, 'simapan_lk' => $simapan_lk, 'simapan_pr' => $simapan_pr,
                'ind_all' => $ind_all, 'ind_lk' => $ind_lk, 'ind_pr' => $ind_pr,
                'deposito_all' => $deposito_all,
            ]
        );
    }

    public function rahmahAll()
    {
        // $rahmah = Rahmah::all();

        $rahmah = DB::table('rahmahs')->orderBy('created_at', 'desc')->paginate(10);
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

    public function rahmahSearch(Request $request)
    {
        $cari = $request->search;
        $rahmah = DB::table('rahmahs')
            ->where('nama_nasabah', 'like', "%".$cari."%")
            ->paginate();

        return view('admin.rahmah', ['rahmah' => $rahmah]);
    }

    public function rahmahVerified(Request $request)
    {
        $rhm = Rahmah::find($request->id);
        $rhm->verified = $request->verified;
        $rhm->verified_by = $request->verified_by;
        $rhm->save();

        return response()->json(['success' => 'Verifikasi sudah diganti.']);
    }

    public function rahmahDestroy(Rahmah $id)
    {
        Rahmah::destroy($id->id);
        return redirect('/admin/rahmah')->with('status' ,'Data berhasil dihapus.');
    }

    public function amanahAll()
    {
        $amanah = DB::table('amanahs')->orderBy('created_at', 'desc')->paginate(10);
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

    public function amanahSearch(Request $request)
    {
        $cari = $request->search;
        $amanah = DB::table('amanahs')
            ->where('nama_nasabah', 'like', "%".$cari."%")
            ->paginate();

        return view('admin.amanah', ['amanah' => $amanah]);
    }

    public function amanahVerified(Request $request)
    {
        $rhm = Amanah::find($request->id);
        $rhm->verified = $request->verified;
        $rhm->verified_by = $request->verified_by;
        $rhm->save();

        return response()->json(['success' => 'Verifikasi sudah diganti.']);
    }

    public function amanahDestroy(Amanah $id)
    {
        Amanah::destroy($id->id);
        return redirect('/admin/amanah')->with('status' ,'Data berhasil dihapus.');
    }

    public function bimapanAll()
    {
        $bimapan = DB::table('bimapans')->orderBy('created_at', 'desc')->paginate(10);
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

    public function bimapanSearch(Request $request)
    {
        $cari = $request->search;
        $bimapan = DB::table('bimapans')
            ->where('nama_nasabah', 'like', "%".$cari."%")
            ->paginate();

        return view('admin.bimapan', ['bimapan' => $bimapan]);
    }

    public function bimapanVerified(Request $request)
    {
        $rhm = Bimapan::find($request->id);
        $rhm->verified = $request->verified;
        $rhm->verified_by = $request->verified_by;
        $rhm->save();

        return response()->json(['success' => 'Verifikasi sudah diganti.']);
    }

    public function bimapanDestroy(Bimapan $id)
    {
        Bimapan::destroy($id->id);
        return redirect('/admin/bimapan')->with('status' ,'Data berhasil dihapus.');
    }

    public function simapanAll()
    {
        $simapan = DB::table('simapans')->orderBy('created_at', 'desc')->paginate(10);
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

    public function simapanSearch(Request $request)
    {
        $cari = $request->search;
        $simapan = DB::table('simapans')
            ->where('nama_nasabah', 'like', "%".$cari."%")
            ->paginate();

        return view('admin.simapan', ['simapan' => $simapan]);
    }

    public function simapanVerified(Request $request)
    {
        $rhm = Simapan::find($request->id);
        $rhm->verified = $request->verified;
        $rhm->verified_by = $request->verified_by;
        $rhm->save();

        return response()->json(['success' => 'Verifikasi sudah diganti.']);
    }

    public function simapanDestroy(Simapan $id)
    {
        Simapan::destroy($id->id);
        return redirect('/admin/simapan')->with('status' ,'Data berhasil dihapus.');
    }

    public function depositoRahmahAll()
    {
        $rahmahdepo = DB::table('deposito_individus')->paginate(10);
        // $rahmahdepo = DepositoIndividu::all();
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

    public function depositoRahmahSearch(Request $request)
    {
        $cari = $request->search;
        $rahmahdepo = DB::table('deposito_individus')
            ->where('nama_nasabah', 'like', "%".$cari."%")
            ->paginate();

        return view('admin.rahmahdeposhow', ['rahmahdepo' => $rahmahdepo]);
    }

    public function depositoRahmahVerified(Request $request)
    {
        $rhm = DepositoIndividu::find($request->id);
        $rhm->verified = $request->verified;
        $rhm->verified_by = $request->verified_by;
        $rhm->save();

        return response()->json(['success' => 'Verifikasi sudah diganti.']);
    }

    public function depositoRahmahDestroy(DepositoIndividu $id)
    {
        DepositoIndividu::destroy($id->id);
        return redirect('/admin/individu')->with('status' ,'Data berhasil dihapus.');
    }

    public function depositoPrimaAll()
    {
        $primadepo = DB::table('deposito_badan_usahas')->paginate(10);
        // $primadepo = DepositoBadanUsaha::all();
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

    public function depositoPrimaSearch(Request $request)
    {
        $cari = $request->search;
        $primadepo = DB::table('deposito_badan_usahas')
            ->where('nama_usaha', 'like', "%".$cari."%")
            ->paginate();

        return view('admin.primadeposhow', ['primadepo' => $primadepo]);
    }

    public function depositoPrimaVerified(Request $request)
    {
        $rhm = DepositoBadanUsaha::find($request->id);
        $rhm->verified = $request->verified;
        $rhm->verified_by = $request->verified_by;
        $rhm->save();

        return response()->json(['success' => 'Verifikasi sudah diganti.']);
    }

    public function depositoPrimaDestroy(DepositoBadanUsaha $id)
    {
        DepositoBadanUsaha::destroy($id->id);
        return redirect('/admin/prima')->with('status' ,'Data berhasil dihapus.');
    }

    public function verifikasi()
    {
        $rahmah_v = DB::table('rahmahs')->where('verified', 1)->count();
        $amanah_v = DB::table('amanahs')->where('verified', 1)->count();
        $bimapan_v = DB::table('bimapans')->where('verified', 1)->count();
        $simapan_v = DB::table('simapans')->where('verified', 1)->count();
        $di_v = DB::table('deposito_individus')->where('verified', 1)->count();
        $dbd_v = DB::table('deposito_badan_usahas')->where('verified', 1)->count();

        return view('admin.verifikasi',
            [
                'rahmah_v' => $rahmah_v,
                'amanah_v' => $amanah_v,
                'bimapan_v' => $bimapan_v,
                'simapan_v' => $simapan_v,
                'di_v' => $di_v,
                'dbd_v' => $dbd_v,
            ]
        );
    }

}
