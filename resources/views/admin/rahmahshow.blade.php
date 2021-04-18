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
                    <div>Tabungan Rahmah Detail
                        <div class="page-title-subheading">Ini daftar nasabah tabungan rahmah
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
                        <h5 class="card-title">{{ $id->nama_nasabah }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $id->tempat_lahir }}</h6>
                        <p class="card-text">{{ $id->tanggal_lahir }}</p>
                        <p class="card-text">{{ $id->jenis_kelamin }}</p>
                        <p class="card-text">{{ $id->status }}</p>
                        <p class="card-text">{{ $id->nama_ibu_kandung }}</p>
                        <p class="card-text">{{ $id->identitas }}</p>
                        <p class="card-text">{{ $id->no_id }}</p>
                        <p class="card-text">{{ $id->tanggal_berlaku_id }}</p>
                        <p class="card-text">{{ $id->agama }}</p>
                        <p class="card-text">{{ $id->npwp }}</p>
                        <p class="card-text">{{ $id->alamat_1 }}</p>
                        <p class="card-text">{{ $id->alamat_2 }}</p>
                        <p class="card-text">{{ $id->status_rumah }}</p>
                        <p class="card-text">{{ $id->telp_rumah }}</p>
                        <p class="card-text">{{ $id->telp_hp }}</p>
                        <p class="card-text">{{ $id->email }}</p>
                        <p class="card-text">{{ $id->pendidikan }}</p>
                        <p class="card-text">{{ $id->pekerjaan }}</p>
                        <p class="card-text">{{ $id->nama_kantor }}</p>
                        <p class="card-text">{{ $id->alamat_kantor }}</p>
                        <p class="card-text">{{ $id->telp_kantor }}</p>
                        <p class="card-text">{{ $id->pendapatan }}</p>
                        <p class="card-text">{{ $id->sumber_dana }}</p>
                        <p class="card-text">{{ $id->tujuan_buka_rek }}</p>
                        <p class="card-text">{{ $id->setoran_1 }}</p>
                        <p class="card-text">{{ $id->nama_ahli_waris }}</p>
                        <p class="card-text">{{ $id->tempat_lahir_ahli_waris }}</p>
                        <p class="card-text">{{ $id->tanggal_lahir_ahli_waris }}</p>
                        <p class="card-text">{{ $id->alamat_ahli_waris }}</p>
                        <p class="card-text">{{ $id->telp_rumah_ahli_waris }}</p>
                        <p class="card-text">{{ $id->telp_hp_ahli_waris }}</p>
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
