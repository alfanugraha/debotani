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
                    <div>Deposito Rahmah
                        <div class="page-title-subheading">Ini daftar nasabah deposito rahmah
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
                                    <a href="/individu/exportpdf" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            PDF
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/individu/exportxls" class="nav-link">
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

                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Table Tabungan</h5>
                        <div class="table-responsive">
                            <table class="mb-0 table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status</th>
                                        <th>Nama Ibu Kandung</th>
                                        <th>Identitas</th>
                                        <th>No. id</th>
                                        <th>Tanggal Berlaku ID</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rahmahdepo as $rhm)
                                    <tr>
                                        <th scope="row">{{ $rhm->id }}</th>
                                        <td>{{ $rhm->nama_nasabah }}</td>
                                        <td>{{ $rhm->tempat_lahir }}</td>
                                        <td>{{ $rhm->tanggal_lahir }}</td>
                                        <td>{{ $rhm->jenis_kelamin }}</td>
                                        <td>{{ $rhm->status }}</td>
                                        <td>{{ $rhm->nama_ibu_kandung }}</td>
                                        <td>{{ $rhm->identitas }}</td>
                                        <td>{{ $rhm->no_id }}</td>
                                        <td>{{ $rhm->tanggal_berlaku_id }}</td>
                                        <td><a href="/admin/individu/{{$rhm->id}}"><button type="button" class="btn btn-success">detail</button></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
