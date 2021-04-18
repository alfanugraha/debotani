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
    <title>Deposito</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link href="css/popup.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-green p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Deposito</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="/deposito/jenis/badan-usaha/create">
                        @csrf
                        <div class="form-row">
                            <div class="name">Nama Instansi</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nama_usaha">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Jenis Usaha</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="jenis_usaha">
                                <div class="name">telp</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="telp">
                                </div>
                                <div class="name">Fax</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="fax">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="alamat">
                                <div class="name">Kode Pos</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="kode_pos">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Izin/Legalitas Usaha</div>
                            <div class="value">
                                <select name="izin" class="form-select input--style-6">
                                    <option selected>Choose</option>
                                    <option value="SIUP">SIUP</option>
                                    <option value="TDP">TDP</option>
                                    <option value="Akte Pendirian">Akte Pendirian</option>
                                </select>
                                <div class="name">No.</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="no_izin">
                                </div>
                                <div class="name">NPWP</div>
                                <div class="value"></div>
                                <div class="name">No.</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="npwp">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Laporan Keuangan</div>
                            <div class="value">
                                <select name="lap_keuangan" class="form-select input--style-6">
                                    <option selected>Choose</option>
                                    <option value="Islam">Neraca</option>
                                    <option value="Kristen">Laba Rugi</option>
                                </select>
                                <div class="name"></div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="lap_keuangan_status" placeholder="terlampir">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Pengurus Perusahaan</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="pengurus" placeholder="1.___">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Pemangan Contoh TTD</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="pemangan_ttd" placeholder="2.___">
                            </div>
                            <div class="name">Penghasilan Per Bulan</div>
                            <div class="value">
                                <select name="penghasilan_usaha" class="form-select input--style-6">
                                    <option selected>Choose</option>
                                    <option value="< 100 Juta">< 100 Juta</option>
                                    <option value="> 100 Juta">> 100 Juta</option>
                                    <option value="< 100 Juta">< 500 Juta</option>
                                    <option value="> 100 Juta">> 500 Juta</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Ahli Waris</div>
                            <div class="value"></div>
                            <div class="name">Nama</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nama_ahli_waris">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Alamat</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="alamat_ahli_waris">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Hubungan Keluarga</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="hub_keluarga">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nominal Deposito</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nominal_deposito" placeholder="Rp.">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Terbilang</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="terbilang">
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Jangka Waktu</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="jangka_waktu" placeholder="____Bulan______">
                                <div class="name">Tanggal Valuta</div>
                                <div class="value">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="tanggal_valuta">
                                    </div>
                                </div>
                                <div class="name">Tanggal Jatuh Tempo</div>
                                <div class="value">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="tanggal_jatuh_tempo_valuta">
                                    </div>
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Nisbah Bagi Hasil</div>
                            <div class="value">
                                <div class="name">Untuk Shaibul Maal(Nasabah)</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="nisbah_maal" placeholder="%">
                                </div>
                                <div class="name">Untuk Mudharib(Bank)</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="nisbah_mudharib" placeholder="%">
                                </div>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Pencairan Deposito</div>
                            <div class="value">
                                <select name="pencairan_deposito" class="form-select input--style-6">
                                    <option selected>Choose</option>
                                    <option value="Dipindah Ke Tabungan Bina Rahmah">Dipindah Ke Tabungan Bina Rahmah</option>
                                    <option value="Transfer Ke Bank Lain">Transfer Ke Bank Lain</option>
                                    <option value="ARO">Perpanjangan Otomatis (ARO)</option>
                                </select>
                                <div class="name">No.Rek.Tabungan</div>
                                <div class="value">
                                    <input class="input--style-6" type="text" name="no_cif_no_rekening">
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
                            <div class="name">Penghasilan Per Bulan</div>
                            <div class="value">
                                <select name="pendapatan" class="form-select input--style-6">
                                    <option selected>Choose</option>
                                    <option value="< 1 Juta">< 1 Juta</option>
                                    <option value="1 Juta < 2,5 Juta">1 Juta < 5 Juta</option>
                                    <option value="5 Juta < 10 Juta">5 Juta < 10 Juta</option>
                                    <option value="10 Juta < 100 Juta">10 Juta < 100 Juta</option>
                                    <option value="> 100 Juta">> 100 Juta</option>
                                </select>
                            </div>
                            <div class="name"></div>
                            <div class="value"></div>
                            <div class="name">Tujuan Pembukaan</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="tujuan_buka_rek">
                            </div>
                            <div class="name">Bukan Untuk Pencucian Uang</div>
                            <div class="value">
                                <select name="pencucian_uang" class="form-select input--style-6">
                                    <option selected>Choose</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Saya setuju dengan <a href="#popup1">ketentuan-ketentuan</a> yang ada
                                </label>
                            </div>
                            <div id="popup1" class="overlay">
                                <div class="popup2">
                                    <h2>Ketentuan-ketentuan</h2>
                                    <a class="close" href="#">&times;</a>
                                    <div class="content">
                                        <p>
                                            1. PENGERTIAN<br>Deposito  Mudharabah  adalah  simpanan  yang  penarikanya  hanya  dapat  dilakukan  pada  waktu  tertentu menurut perjanjian antara menyimpan (deposan) dengan Bank yang bersangkutan. Sesuai dengan prinsip Al Mudharabah,  kepada deposan diberikan imbalan atas dasar pembagian keuntungan yang telah di tetapkan dan di setujui sebelumnya. Selanjunya apabila Bank mengalami kerugian, maka deposan ikut menanggung resiko kerugian tersebut.<br>
                                            2. Deposito  tidak  dapat  dipindahtangankan,  namun  dapat  dijaminkan  kepada  Bank  sebagai  surat  berharga dalam hal pengikat atau penghapusan terhadap suatu kewajiban atau hutang antara Deposan dengan Bank.<br>
                                            3. Jika DEPOSAN meninggal dunia, deposito akan di bayarkan kepada ahli warisnya.  Dalam hal DEPOSAN terdiri dari dua atau lebih, berlaku ketentuan-ketentuan sebagai berikut:<br>*    Apabila salah satu DEPOSAN meninggal dunia, deposito menjadi milik DEPOSAN  yang masih hidup.<br>*    Apabila  salah  satu  DEPOSAN  atau  lebih  melarang  pembayaran  pada  yang  lain,  deposito  tidak  akan  di bayarkan kepada DEPOSAN manapun, kecuali semua DEPOSAN sudah menyelesaikan perkaranya.<br>
                                            4. Untuk kepentingan Bank, dalam rangka memanfaatkan uang tersebut , DEPOSAN menyetujui bahwa deposito akan di bayarkan kembali hanya pada tanggal jatuh tempo seperti dinyatakan dalam nota ini.Penarikan  atas  jumlah  tersebut  baik  untuk  seluruhnya  atau  sebagian  sebelum  tanggal  jatuh  tempo  dengan sendirinya tidak dapat dilakukan.<br>
                                            5.  Pada  daat  melakukan  penyetoran  deposito  dimana  DEPOSAN  mencantumkan  cara  pembayaran  deposito agar langsung ditransfer ke rekening atau tabungan yang di tunjuk, maka Bank pada saat jatuh tempo akan langsung  melakukan  instruksi  tersebut.  dan  dengan  demikian  bilyet  deposito  yang  di  pegang  DEPOSAN menjadi tidak berlaku lagi.<br>
                                            6. keuntungan  bagi  hasil  atau  deposito  akan  di  bayarkan  tiap  bulan  atau  pada  tanggal  jatuh  tempo  sesuai dengan keinginan DEPOSAN.<br>
                                            7. Untuk DEPOSITO yang jatuh tempo, tidak diberikan keuntungan bagi hasil lagi dan di perhitungkan sebagai titipan/simpanan YAD-AMANAH, namun DEPOSAN tetap memberikan izin kepada Bank untuk memanfaatkan uang tersebut sampai dengan di tariknya uang tersebut.<br>
                                            8. DEPOSITO  yang  di  buka  secara  atau  dalam  bentuk  AUTOMATIC  ROLLOVER,  pada  saat  jatuh  tempo  secara otomatis akan di perpanjang sesuai periode sebelumnya dan keuntungan bagi hasil periode selanjutnya akan di tentukan sesuai dengan kesanggupan Bank waktu itu.<br>
                                            9. Selain syarat-syarat tersebut diatas, DEPOSAN sepakat untuk  juga mentaati peraturan-peraturan Bank lainnya sepanjang menyangkut transaksi simpanan/deposito dengan Bank.<br>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Send Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
