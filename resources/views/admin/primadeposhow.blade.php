@extends('layout.admin')

@section('container')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Deposito Prima Detail
                        <div class="page-title-subheading">Ini daftar nasabah deposito prima
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="pe-7s-download"></i>
                            </span>
                            Unduh
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            PDF
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Excel(Semua)
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>
                                            Excel(Perorang)
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-lg-6"> --}}

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $id->nama_usaha }}</h5>
                        <p class="card-text">{{ $id->jenis_usaha }}</p>
                        <p class="card-text">{{ $id->telp }}</p>
                        <p class="card-text">{{ $id->fax }}</p>
                        <p class="card-text">{{ $id->alamat }}</p>
                        <p class="card-text">{{ $id->kode_pos }}</p>
                        <p class="card-text">{{ $id->izin }}</p>
                        <p class="card-text">{{ $id->no_izin }}</p>
                        <p class="card-text">{{ $id->npwp }}</p>
                        <p class="card-text">{{ $id->lap_keuangan }}</p>
                        <p class="card-text">{{ $id->lap_keuangan_status }}</p>
                        <p class="card-text">{{ $id->pengurus }}</p>
                        <p class="card-text">{{ $id->pemangan_ttd }}</p>
                        <p class="card-text">{{ $id->penghasilan_usaha }}</p>
                        <p class="card-text">{{ $id->nama_ahli_waris }}</p>
                        <p class="card-text">{{ $id->alamat_ahli_waris }}</p>
                        <p class="card-text">{{ $id->hub_keluarga }}</p>
                        <p class="card-text">{{ $id->nominal_deposito }}</p>
                        <p class="card-text">{{ $id->terbilang }}</p>
                        <p class="card-text">{{ $id->jangka_waktu }}</p>
                        <p class="card-text">{{ $id->tanggal_valuta }}</p>
                        <p class="card-text">{{ $id->tanggal_jatuh_tempo_valuta }}</p>
                        <p class="card-text">{{ $id->nisbah_maal }}</p>
                        <p class="card-text">{{ $id->nisbah_mudharib }}</p>
                        <p class="card-text">{{ $id->pencairan_deposito }}</p>
                        <p class="card-text">{{ $id->pendapatan }}</p>
                        <p class="card-text">{{ $id->tujuan_buka_rek }}</p>
                        <p class="card-text">{{ $id->pencucian_uang }}</p>
                        {{-- <button type="submit" class="btn btn-primary">Edit</button> --}}
                        {{-- <a href="{{ $id->id }}/edit" class="btn btn-primary">Edit</a> --}}
                        {{-- <form action="{{ $id->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> --}}
                        <a href="/admin/rahmah" class="card-link">Back</a>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>
    {{-- <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="app-footer-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                Footer Link 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                Footer Link 2
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app-footer-right">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                Footer Link 3
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <div class="badge badge-success mr-1 ml-0">
                                    <small>NEW</small>
                                </div>
                                Footer Link 4
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
