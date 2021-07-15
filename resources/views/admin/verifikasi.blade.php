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
                        <div class="page-title-subheading">Ini adalah halaman status verifikasi deBotani
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
                  <p class="card-text">Total Nasabah terverifikasi: <span class="badge bg-primary">{{ $rahmah_v }}</span> </p>
                </div>
            </div>&nbsp;&nbsp;
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Tabungan Amanah</div>
                <div class="card-body text-dark">
                    <p class="card-text">Total Nasabah terverifikasi: <span class="badge bg-primary">{{ $amanah_v }}</span> </p>
                </div>
            </div>&nbsp;&nbsp;
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Tabungan Bimapan</div>
                <div class="card-body text-dark">
                    <p class="card-text">Total Nasabah terverifikasi: <span class="badge bg-primary">{{ $bimapan_v }}</span> </p>
                </div>
            </div>&nbsp;&nbsp;
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">SIMAPAN</div>
                <div class="card-body text-dark">
                    <p class="card-text">Total Nasabah terverifikasi: <span class="badge bg-primary">{{ $simapan_v }}</span> </p>
                </div>
            </div>&nbsp;&nbsp;
        </div>
        <div class="row">
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Deposito Rahmah</div>
                <div class="card-body text-dark">
                    <p class="card-text">Total Nasabah terverifikasi: <span class="badge bg-primary">{{ $di_v }}</span> </p>
                </div>
            </div>&nbsp;&nbsp;
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Deposito Prima</div>
                <div class="card-body text-dark">
                    <p class="card-text">Total Nasabah terverifikasi: <span class="badge bg-primary">{{ $dbd_v }}</span> </p>
                </div>
            </div>&nbsp;&nbsp;
        </div>
    </div>
</div>
@endsection
