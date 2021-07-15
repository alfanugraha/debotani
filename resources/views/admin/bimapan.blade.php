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
                    <div>Tabungan Bimapan
                        <div class="page-title-subheading">Ini daftar nasabah tabungan bimapan
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
                                    <a href="/bimapan/exportpdf" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            PDF
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/bimapan/exportxls" class="nav-link">
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
            <p>Cari Data Nasabah :&nbsp;</p>
            <form action="/admin/bimapan/cari" method="post">
                @csrf
                <input type="text" name="search" placeholder=" Cari Nasabah .." value="{{ old('search') }}">
                <input type="submit" value="Cari">
            </form>
        </div>
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
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
                                        <th>Verifikasi</th>
                                        <th>Diverifikasi Oleh</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bimapan as $rhm)
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
                                        <td>
                                            <input data-id="{{$rhm->id}}" data-ver="{{Auth::user()->name}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Terverifikasi" data-off="Belum" {{ $rhm->verified ? 'checked' : '' }}>
                                        </td>
                                        <td>{{ $rhm->verified_by }}</td>
                                        <td><a href="/admin/bimapan/{{$rhm->id}}"><button type="button" class="btn btn-success">detail</button></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
        <div class="row">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                <li class="page-item"><a class="page-link" href="{{ $bimapan->previousPageUrl() }}">Previous</a></li>
                {{-- <li class="page-item"><a class="page-link" href="{{ $rahmah->previousPageUrl() }}">{{$rahmah->currentPage() -1}}</a></li> --}}
                <li class="page-item active"><a class="page-link" href="#">{{$bimapan->currentPage()}}</a></li>
                {{-- <li class="page-item"><a class="page-link" href="{{ $rahmah->nextPageUrl() }}">{{$rahmah->currentPage() +1}}</a></li> --}}
                <li class="page-item"><a class="page-link" href="{{ $bimapan->nextPageUrl() }}">Selanjutnya</a></li>
                </ul>
            </nav>
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
<script>
    $(function() {
      $('.toggle-class').change(function() {
          var verified = $(this).prop('checked') == true ? 1 : 0;
          var id = $(this).data('id');
          var verified_by = $(this).data('ver');

          $.ajax({
              type: "POST",
              dataType: "json",
              url: '/admin/bimapan/verifikasi',
              headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
              data: {'verified': verified, 'id': id, 'verified_by':verified_by},
              success: function(data){
                // console.log(data.success)
                toastr.options.closeButton = true;
                toastr.options.closeMethod = 'fadeOut';
                toastr.options.closeDuration = 100;
                toastr.success(data.success);
                location.reload();
              }
          });
      })
    })
</script>
@endsection
