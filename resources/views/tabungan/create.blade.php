@extends('layout.main')

@section('title', 'Tabungan')
    
@section('container')
<div class="page-wrapper bg-green p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Tabungan</h2>
                </div>
                <div class="card-body">
                    <form action="/tabungan" method="post">
                    @csrf
                        <div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nama_nasabah" id="nama_nasabah">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tempat Lahir</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="tempat_lahir">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tanggal Lahir</div>
                            <div class="value">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="tgl_lahir">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <select name="gender" class="form-select input--style-6">
                                    <option selected>Choose</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Status</div>
                            <div class="value">
                                <select name="status" class="form-select input--style-6">
                                    <option selected>Choose</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Janda/Duda">Janda/Duda</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Nama Ibu Kandung</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="mother">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Identitas</div>
                            <div class="value">
                                <select name="identitas" class="form-select input--style-6">
                                    <option selected>Choose</option>
                                    <option value="KTP">KTP</option>
                                    <option value="Pasport">Pasport</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. ID</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="noid">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tanggal Berlaku ID</div>
                            <div class="value">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="validid">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Agama</div>
                            <div class="value">
                                <select name="agama" class="form-select input--style-6">
                                    <option selected>Choose</option>
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
                                <select name="npwp" class="form-select input--style-6">
                                    <option selected>Choose</option>
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
                                <input class="input--style-6" type="text" name="alamatapel">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat(saat ini)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="alamat">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Status Tempat Tinggal</div>
                            <div class="value">
                                <select name="teti" class="form-select input--style-6">
                                    <option selected>Choose</option>
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
                                <input class="input--style-6" type="text" name="telrumah">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. Telepon (HP)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nohp">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="example@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pendidikan Terakhir</div>
                            <div class="value">
                                <select name="pendidikan" class="form-select input--style-6">
                                    <option selected>Choose</option>
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
                                    <option selected>Choose</option>
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
                                <input class="input--style-6" type="text" name="tempatkerja">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat Tempat Kerja</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="alamatteker">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. Telepon</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="notelpteker">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Pendapatan Per Bulan</div>
                            <div class="value">
                                <select name="Pendapatan" class="form-select input--style-6">
                                    <option selected>Choose</option>
                                    <option value="< 1 Juta">< 1 Juta</option>
                                    <option value="1 Juta < 2,5 Juta">1 Juta < 2,5 Juta</option>
                                    <option value="2,5 Juta < 5 Juta">2,5 Juta < 5 Juta</option>
                                    <option value="5 Juta < 10 Juta">5 Juta < 10 Juta</option>
                                    <option value="10 Juta < 100 Juta">10 Juta < 100 Juta</option>
                                    <option value="> 100 Juta">> 100 Juta</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Sumber Dana</div>
                            <div class="value">
                                <select name="Sudan" class="form-select input--style-6">
                                    <option selected>Choose</option>
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
                                <select name="tpr" class="form-select input--style-6">
                                    <option selected>Choose</option>
                                    <option value="Tabungan/Investasi">Tabungan/Investasi</option>
                                    <option value="Usaha">Usaha</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Setoran Pertama</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="seper" placeholder="Rp.">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Setoran Selanjutnya</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="sese" placeholder="Rp./bulan">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Jangka Waktu</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="jangka" placeholder="___ bulan">
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
                                <input class="input--style-6" type="text" name="full_nameaw">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tempat Lahir</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="placeaw">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tanggal Lahir</div>
                            <div class="value">
                                <div class="form-group">
                                    <input type="date" class="form-control" name="dateaw">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat(saat ini)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="alamataw">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. Telepon (Rumah)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="telrumahaw">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">No. Telepon (HP)</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nohpaw">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Send Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection