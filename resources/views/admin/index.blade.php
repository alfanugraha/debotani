@extends('layout.admin')

@section('container')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="metismenu-icon pe-7s-display2 icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Selamat Datang
                        <div class="page-title-subheading">Ini adalah halaman admin deBotani
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            {{-- </div> --}}
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Tabungan Rahmah</div>
                <div class="card-body text-dark">
                  <p class="card-text">Total Nasabah hari ini: <span class="badge bg-primary">{{ $rahmah_all }}</span> </p>
                  <p class="card-text">Total Nasabah (LK): <span class="badge bg-primary">{{ $rahmah_lk }}</span> </p>
                  <p class="card-text">Total Nasabah (PR): <span class="badge bg-primary">{{ $rahmah_pr }}</span> </p>
                </div>
            </div>&nbsp;&nbsp;
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Tabungan Amanah</div>
                <div class="card-body text-dark">
                  <p class="card-text">Total Nasabah hari ini: <span class="badge bg-primary">{{ $amanah_all }}</span> </p>
                  <p class="card-text">Total Nasabah (LK): <span class="badge bg-primary">{{ $amanah_lk }}</span> </p>
                  <p class="card-text">Total Nasabah (PR): <span class="badge bg-primary">{{ $amanah_pr }}</span> </p>
                </div>
            </div>&nbsp;&nbsp;
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Tabungan Bimapan</div>
                <div class="card-body text-dark">
                  <p class="card-text">Total Nasabah hari ini: <span class="badge bg-primary">{{ $bimapan_all }}</span> </p>
                  <p class="card-text">Total Nasabah (LK): <span class="badge bg-primary">{{ $bimapan_lk }}</span> </p>
                  <p class="card-text">Total Nasabah (PR): <span class="badge bg-primary">{{ $bimapan_pr }}</span> </p>
                </div>
            </div>&nbsp;&nbsp;
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">SIMAPAN</div>
                <div class="card-body text-dark">
                  <p class="card-text">Total Nasabah hari ini: <span class="badge bg-primary">{{ $simapan_all }}</span> </p>
                  <p class="card-text">Total Nasabah (LK): <span class="badge bg-primary">{{ $simapan_lk }}</span> </p>
                  <p class="card-text">Total Nasabah (PR): <span class="badge bg-primary">{{ $simapan_pr }}</span> </p>
                </div>
            </div>&nbsp;&nbsp;
        </div>
        <div class="row">
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Deposito Rahmah</div>
                <div class="card-body text-dark">
                  <p class="card-text">Total Nasabah hari ini: <span class="badge bg-primary">{{ $ind_all }}</span> </p>
                  <p class="card-text">Total Nasabah (LK): <span class="badge bg-primary">{{ $ind_lk }}</span> </p>
                  <p class="card-text">Total Nasabah (PR): <span class="badge bg-primary">{{ $ind_pr }}</span> </p>
                </div>
            </div>&nbsp;&nbsp;
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Deposito Prima</div>
                <div class="card-body text-dark">
                  <p class="card-text">Total Deposito hari ini: <span class="badge bg-primary">{{ $deposito_all }}</span> </p>
                </div>
            </div>&nbsp;&nbsp;
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
