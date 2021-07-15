<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Tabungan Amanah | Individu</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- Main CSS-->
    <link href="/css/main.css" rel="stylesheet" media="all">
</head>

<body>
<a class="fixed-top bg-white text-center" href="/">
        <br><img src="http://localhost:8000/img/logodebotani.png" >
        <br><br>
    </a>
    <br><br>
    <div class="page-wrapper bg-green p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <br>
                    <h2 style="padding-left: 30px;" class="title">Pembukaan Tabungan Amanah</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="/tabungan/jenis/individu/amanah" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('nama_nasabah') is-invalid @enderror" type="text" name="nama_nasabah" value="{{ old('nama_nasabah') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tempat Lahir</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('tempat_lahir') is-invalid @enderror" type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tanggal Lahir</div>
                            <div class="value">
                                <div class="form-group">
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <select name="jenis_kelamin" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Status</div>
                            <div class="value">
                                <select name="status" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Janda/Duda">Janda/Duda</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Nama Ibu Kandung</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('nama_ibu_kandung') is-invalid @enderror" type="text" name="nama_ibu_kandung" value="{{ old('nama_ibu_kandung') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Identitas</div>
                            <div class="value">
                                <select name="identitas" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="KTP">KTP</option>
                                    <option value="Pasport">Pasport</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. ID</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('no_id') is-invalid @enderror" type="text" name="no_id" value="{{ old('no_id') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tanggal Berlaku ID</div>
                            <div class="value">
                                <div class="form-group">
                                    <input type="date" class="form-control  @error('tanggal_berlaku_id') is-invalid @enderror" name="tanggal_berlaku_id" value="{{ old('tanggal_berlaku_id') }}">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Upload Identitas</div>
                            <div class="value">
                                <div class="form-group">
                                    <input type="file" class="form-control @error('file_id') is-invalid @enderror" name="file_id">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Agama</div>
                            <div class="value">
                                <select name="agama" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">NPWP</div>
                            <div class="value">
                                <select name="ceknpwp" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Ada">Ada</option>
                                    <option value="Tidak Ada">Tidak Ada</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. NPWP</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="npwp">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat(tanda pengenal)</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('alamat_1') is-invalid @enderror" type="text" name="alamat_1" value="{{ old('alamat_1') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat(saat ini)</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('alamat_2') is-invalid @enderror" type="text" name="alamat_2" value="{{ old('alamat_2') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Status Tempat Tinggal</div>
                            <div class="value">
                                <select name="status_rumah" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Milik Sendiri">Milik Sendiri</option>
                                    <option value="Milik Keluarga">Milik Keluarga</option>
                                    <option value="Rumah Dinas">Rumah Dinas</option>
                                    <option value="Milik Sendiri Dijaminkan">Milik Sendiri Dijaminkan</option>
                                    <option value="Sewa/Kontrak">Sewa/Kontrak</option>
                                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. Telepon (Rumah)</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('telp_rumah') is-invalid @enderror" type="text" name="telp_rumah" value="{{ old('telp_rumah') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. Telepon (HP)</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('telp_hp') is-invalid @enderror" type="text" name="telp_hp" value="{{ old('telp_hp') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6 form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="example@email.com" value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pendidikan Terakhir</div>
                            <div class="value">
                                <select name="pendidikan" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="SD">SD</option>
                                    <option value="SLTP">SLTP</option>
                                    <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                    <option value="D1-D2">D1-D2</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Pekerjaan</div>
                            <div class="value">
                                <select name="pekerjaan" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                                    <option value="Guru">Guru</option>
                                    <option value="Pegawai Negeri">Pegawai Negeri</option>
                                    <option value="TNI/Polisi">TNI/Polisi</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Nama Tempat Kerja</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('nama_kantor') is-invalid @enderror" type="text" name="nama_kantor" value="{{ old('nama_kantor') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat Tempat Kerja</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('alamat_kantor') is-invalid @enderror" type="text" name="alamat_kantor" value="{{ old('alamat_kantor') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. Telepon</div>
                            <div class="value">
                                <input class="input--style-6  form-control @error('telp_kantor') is-invalid @enderror" type="text" name="telp_kantor" value="{{ old('telp_kantor') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Pendapatan Per Bulan</div>
                            <div class="value">
                                <select name="pendapatan" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="< 1 Juta">0 - 1 Juta</option>
                                    <option value="1 Juta < 2,5 Juta">1 Juta - 2,5 Juta</option>
                                    <option value="2,5 Juta < 5 Juta">2,5 Juta - 5 Juta</option>
                                    <option value="5 Juta < 10 Juta">5 Juta - 10 Juta</option>
                                    <option value="10 Juta < 100 Juta">10 Juta - 100 Juta</option>
                                    <option value="> 100 Juta">Lebih dari 100 Juta</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Sumber Dana</div>
                            <div class="value">
                                <select name="sumber_dana" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Gaji">Gaji</option>
                                    <option value="Hasil Usaha">Hasil Usaha</option>
                                    <option value="Hasil Investasi">Hasil Investasi</option>
                                    <option value="Suami/Istri">Suami/Istri</option>
                                    <option value="Orang Tua">Orang Tua</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tujuan Pembukaan Rekening</div>
                            <div class="value">
                                <select name="tujuan_buka_rek" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Tabungan/Investasi">Tabungan/Investasi</option>
                                    <option value="Usaha">Usaha</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Setoran Pertama</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('setoran_1') is-invalid @enderror" type="text" name="setoran_1" placeholder="Rp." value="{{ old('setoran_1') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Setoran Selanjutnya</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('setoran_2') is-invalid @enderror" type="text" name="setoran_2" placeholder="Rp."  value="{{ old('setoran_2') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Jangka Waktu</div>
                            <div class="value">
                                <input class="input--style-6  form-control @error('jangka_waktu') is-invalid @enderror" type="text" name="jangka_waktu"  value="{{ old('jangka_waktu') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <!--<div class="name">Upload CV</div>
                            <<div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>

                            </div>-->
                            <div class="name">Ahli Waris</div>
                            <div class="value"></div>
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('nama_ahli_waris') is-invalid @enderror" type="text" name="nama_ahli_waris" value="{{ old('nama_ahli_waris') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tempat Lahir</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('tempat_lahir_ahli_waris') is-invalid @enderror" type="text" name="tempat_lahir_ahli_waris" value="{{ old('tempat_lahir_ahli_waris') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tanggal Lahir</div>
                            <div class="value">
                                <div class="form-group">
                                    <input type="date" class="form-control @error('tanggal_lahir_ahli_waris') is-invalid @enderror" name="tanggal_lahir_ahli_waris" value="{{ old('tanggal_lahir_ahli_waris') }}">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat(saat ini)</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('alamat_ahli_waris') is-invalid @enderror" type="text" name="alamat_ahli_waris" value="{{ old('alamat_ahli_waris') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. Telepon (Rumah)</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('telp_rumah_ahli_waris') is-invalid @enderror" type="text" name="telp_rumah_ahli_waris" value="{{ old('telp_rumah_ahli_waris') }}">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. Telepon (HP)</div>
                            <div class="value">
                                <input class="input--style-6 form-control @error('telp_hp_ahli_waris') is-invalid @enderror" type="text" name="telp_hp_ahli_waris" value="{{ old('telp_hp_ahli_waris') }}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Daftarkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
