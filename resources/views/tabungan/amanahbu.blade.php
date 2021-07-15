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
    <title>Tabungan Amanah | Badan Usaha</title>

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
                    <h2 style="padding-left: 30px;" class="title">Pembukaan Tabungan Amanah (BU)</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="/tabungan/jenis/badan-usaha/amanah">
                        @csrf
                        <div class="form-row">
                            <div class="name">Bentuk Usaha</div>
                            <div class="value">
                                <div class="value">
                                    <select name="bentuk_usaha" class="form-select input--style-6">
                                        <option selected>...</option>
                                        <option value="Laki-laki">PT</option>
                                        <option value="Perempuan">FA/CV</option>
                                        <option value="Perempuan">Yayasan</option>
                                        <option value="Perempuan">BUUD</option>
                                        <option value="Perempuan">Persero</option>
                                        <option value="Perempuan">Bank</option>
                                        <option value="Perempuan">Koperasi</option>
                                        <option value="Perempuan">PD</option>
                                        <option value="Perempuan">Perusahaan Umum</option>
                                        <option value="Perempuan">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Nama Perusahaan</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nama_usaha">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Bidang Usaha Perusahaan</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="bidang_usaha">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Akta Pendirian Perusahaan</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="akta_usaha">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat Perusahaan</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="alamat_usaha">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tempat Berdiri</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="tempat_berdiri">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tanggal Berdiri</div>
                            <div class="value">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tanggal_berdiri">
                                </div>
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
                            <div class="name">No. Telepon</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="telp">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Fax</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="fax">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email_usaha" placeholder="example@email.com">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Pendapatan Per Tahun</div>
                            <div class="value">
                                <select name="pendapatan" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Ada">< 1 Milyar</option>
                                    <option value="Tidak Ada">1-10 Milyar</option>
                                    <option value="Lainnya">10-100 Milyar</option>
                                    <option value="Lainnya">> 100 Milyar</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tujuan Pembukaan Rekening</div>
                            <div class="value">
                                <select name="tujuan_buka_rek" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Ada">Transaksi</option>
                                    <option value="Tidak Ada">Investasi</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Sumber Dana</div>
                            <div class="value">
                                <select name="sumber_dana" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Ada">Hasil Usaha</option>
                                    <option value="Tidak Ada">Hasil Investasi</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Status Kepemilikan</div>
                            <div class="value">
                                <select name="status_kepemilikan_1" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="SD">Pemilik</option>
                                    <option value="SLTP">Bukan Pemilik</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Jabatan</div>
                            <div class="value">
                                <select name="jabatan_1" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Pelajar/Mahasiswa">Direktur Utama</option>
                                    <option value="Ibu Rumah Tangga">Direktur</option>
                                    <option value="Wiraswasta">Komisaris Utama</option>
                                    <option value="Pegawai Swasta">Komisaris</option>
                                    <option value="Guru">Kuasa Direksi</option>
                                    <option value="Pegawai Negeri">Pemilik Bukan Pengurus</option>
                                    <option value="TNI/Polisi">Sekretaris</option>
                                    <option value="Pensiunan">Bendahara</option>
                                    <option value="Lainnya">Ketua Umum</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nama_1">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tempat Lahir</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="tempat_lahir_1">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tanggal Lahir</div>
                            <div class="value">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tanggal_lahir_1">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <select name="jenis_kelamin_1" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Identitas</div>
                            <div class="value">
                                <select name="identitas_1" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="KTP">KTP</option>
                                    <option value="Pasport">Pasport</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. ID</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="no_id_1">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tanggal Berlaku ID</div>
                            <div class="value">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tanggal_berlaku_id_1">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat(tanda pengenal)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="alamat_11">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat(saat ini)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="alamat_21">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Status Tempat Tinggal</div>
                            <div class="value">
                                <select name="status_rumah_1" class="form-select input--style-6">
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
                                <input class="input--style-6" type="text" name="telp_rumah_1">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. Telepon (HP)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="telp_hp_1">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email_1" placeholder="example@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Status Kepemilikan</div>
                            <div class="value">
                                <select name="status_kepemilikan_2" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="SD">Pemilik</option>
                                    <option value="SLTP">Bukan Pemilik</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Jabatan</div>
                            <div class="value">
                                <select name="jabatan_2" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Pelajar/Mahasiswa">Direktur Utama</option>
                                    <option value="Ibu Rumah Tangga">Direktur</option>
                                    <option value="Wiraswasta">Komisaris Utama</option>
                                    <option value="Pegawai Swasta">Komisaris</option>
                                    <option value="Guru">Kuasa Direksi</option>
                                    <option value="Pegawai Negeri">Pemilik Bukan Pengurus</option>
                                    <option value="TNI/Polisi">Sekretaris</option>
                                    <option value="Pensiunan">Bendahara</option>
                                    <option value="Lainnya">Ketua Umum</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nama_2">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tempat Lahir</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="tempat_lahir_2">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tanggal Lahir</div>
                            <div class="value">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tanggal_lahir_2">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <select name="jenis_kelamin_2" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Identitas</div>
                            <div class="value">
                                <select name="identitas_2" class="form-select input--style-6">
                                    <option selected>...</option>
                                    <option value="KTP">KTP</option>
                                    <option value="Pasport">Pasport</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. ID</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="no_id_2">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tanggal Berlaku ID</div>
                            <div class="value">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tanggal_berlaku_id_2">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat(tanda pengenal)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="alamat_12">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat(saat ini)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="alamat_22">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Status Tempat Tinggal</div>
                            <div class="value">
                                <select name="status_rumah_2" class="form-select input--style-6">
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
                                <input class="input--style-6" type="text" name="telp_rumah_2">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. Telepon (HP)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="telp_hp_2">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email_2" placeholder="example@email.com">
                                </div>
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
