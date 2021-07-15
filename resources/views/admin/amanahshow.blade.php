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
                    <div>Tabungan Amanah Detail
                        <div class="page-title-subheading">Ini daftar nasabah tabungan amanah
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                        <a href="/rahmah/exportxls">
                        <button type="button" class="btn-shadow btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="pe-7s-download"></i>
                            </span>
                            Unduh
                        </button>
                        </a>
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
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nama Nasabah: {{ $id->nama_nasabah }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Tempat Lahir: {{ $id->tempat_lahir }}</h6>
                        <p class="card-text">Tanggal Lahir: {{ $id->tanggal_lahir }}</p>
                        <p class="card-text">Jenis Kelamin: {{ $id->jenis_kelamin }}</p>
                        <p class="card-text">Status: {{ $id->status }}</p>
                        <p class="card-text">Nama Ibu Kandung: {{ $id->nama_ibu_kandung }}</p>
                        <p class="card-text">Identitas: {{ $id->identitas }}</p>
                        <p class="card-text">No. ID: {{ $id->no_id }}</p>
                        <p class="card-text">Tanggal berlaku ID: {{ $id->tanggal_berlaku_id }}</p>
                        <p class="card-text">Agama: {{ $id->agama }}</p>
                        <p class="card-text">NPWP: {{ $id->npwp }}</p>
                        <p class="card-text">Alamat 1: {{ $id->alamat_1 }}</p>
                        <p class="card-text">Alamat 2: {{ $id->alamat_2 }}</p>
                        <p class="card-text">Status Rumah: {{ $id->status_rumah }}</p>
                        <p class="card-text">Telp Rumah: {{ $id->telp_rumah }}</p>
                        <p class="card-text">Telp HP: {{ $id->telp_hp }}</p>
                        <p class="card-text">Email: {{ $id->email }}</p>
                        <p class="card-text">Pendidikan: {{ $id->pendidikan }}</p>
                        <p class="card-text">Pekerjaan: {{ $id->pekerjaan }}</p>
                        <p class="card-text">Nama Kantor: {{ $id->nama_kantor }}</p>
                        <p class="card-text">Alamat Kantor: {{ $id->alamat_kantor }}</p>
                        <p class="card-text">Telp Kantor: {{ $id->telp_kantor }}</p>
                        <p class="card-text">Pendapatan: {{ $id->pendapatan }}</p>
                        <p class="card-text">Sumber Dana: {{ $id->sumber_dana }}</p>
                        <p class="card-text">Tujuan Buka Rekening: {{ $id->tujuan_buka_rek }}</p>
                        <p class="card-text">Setoran Awal: {{ $id->setoran_1 }}</p>
                        <p class="card-text">Setoran Selanjutnya: {{ $id->setoran_2 }}</p>
                        <p class="card-text">Jangka Waktu: {{ $id->jangka_waktu }}</p>
                        <p class="card-text">Nama Ahli Waris: {{ $id->nama_ahli_waris }}</p>
                        <p class="card-text">Tempat Lahir Ahli Waris: {{ $id->tempat_lahir_ahli_waris }}</p>
                        <p class="card-text">Tanggal Lahir Ahli Waris: {{ $id->tanggal_lahir_ahli_waris }}</p>
                        <p class="card-text">Alamat Ahli Waris: {{ $id->alamat_ahli_waris }}</p>
                        <p class="card-text">Telp Rumah Ahli Waris: {{ $id->telp_rumah_ahli_waris }}</p>
                        <p class="card-text">Telp HP Ahli Waris: {{ $id->telp_hp_ahli_waris }}</p>
                        {{-- <button type="submit" class="btn btn-primary">Edit</button> --}}
                        {{-- <a href="{{ $id->id }}/edit" class="btn btn-primary">Edit</a> --}}
                        <form action="{{ $id->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini??');">Delete</button>
                        </form>
                        <a href="/admin/amanah" class="card-link">Back</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img width="450px" src="{{url('/data_file/'.$id->file_id)}}" ><br/><br/>
                <a href="{{url('/data_file/'.$id->file_id)}}" target="_blank"><button type="button" class="btn btn-info">File Identitas</button></a>
            </div>

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
<script type="text/javascript">
    $('.show_confirm').click(function(e) {
        if(!confirm('Are you sure you want to delete this?')) {
            e.preventDefault();
        }
    });
</script>
@endsection
