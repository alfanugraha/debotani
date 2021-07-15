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
    <title>Ketentuan</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- Main CSS-->
    <link href="/css/main.css" rel="stylesheet" media="all">
    <link href="/css/popup.css" rel="stylesheet" media="all">
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
                    <h2 style="padding-left: 30px;" class="title">Ketentuan</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <ol type="A">
                                <li>
                                    <b>Umum</b> <br>
                                    <ol>
                                        <li>Tabungan PT BPRS Bina Rahmah diperuntukkan baik perorangan maupun badan usaha.</li>
                                        <li>Tabungan PT BPRS Bina Rahmah menggunakan akad Wadiah Yad Dhomanah. </li>
                                        <li>Sebagai bukti tabungan, Bank akan memberikan buku tabungan dan menata usahakannya dalam rekening tabungan atas nama penabung. </li>
                                        <li>Apabila terdapat perbedaan antara saldo pada buku tabungan dengan saldo yang tercatat pada pembukuan Bank, maka yang digunakan adalah saldo yang tercatat pada pembukuan bank. </li>
                                        <li>Segala penyalahgunaan dengan segala bentuk apapun termasuk akibat hilang buku tabungan sepenuhnya menjadi tanggung jawab penabung.</li>
                                        <li>Apabila buku tabungan hilang maka penabung harus segera melaporkan ke PT BPRS Bina Rahmah dengan disertai surat keterangan hilang dari kepolisian.</li>
                                    </ol>
                                </li>
                                <li>
                                    <b>Penyetoran dan Penarikan</b> <br>
                                    <ol>
                                        <li>Setoran pertama sekurang-kurangnya sesuai dengan ketentuan yang berlaku. </li>
                                        <li>Penabung dapat melakukan penyetoran dan penarikan dana setiap hari kerja selama kas buka. </li>
                                        <li>Setiap penarikan yang dilakukan harus disertai dengan buku tabungan. </li>
                                        <li>Penarikan yang dilakukan oleh bukan pemilik rekening harus dilengkapi dengan surat kuasa yang telah tersedia dan kartu identitas asli dati pemilik rekening dan penerima kuasa. </li>
                                    </ol>
                                </li>
                                <li>
                                    <b>Bonus/Hadiah Tabungan</b><br>
                                    <ol>
                                        <li>Tabungan akan diberikan bonus / hadiah yang akan diberikan setiap akhir bulan dan akan langsung menambah nominal tabungan yang bersangkutan. </li>
                                        <li>Pajak atas bonus tabungan yang diperoleh penabung akan ditanggung oleh penabung sesuai dengan ketentuan yang berlaku. </li>
                                    </ol>
                                </li>
                                <li>
                                    <b>Biaya, Saldo Minimal dan Penutupan Rekening</b> <br>
                                    <ol>
                                        <li>Penabung wajib mempertaruhkan saldo minimal sesuai dengan ketentuan yang berlaku.</li>
                                        <li>Setiap bulan rekening tabungan dikenakan biaya pemeliharaan sesuai dengan ketentuan yang berlaku. </li>
                                        <li>Biaya penutupan rekening tabungan disesuaikan dnegan ketentuan yang berlaku. </li>
                                        <li>Tabungan yang berada di bawah saldo minimal yang ditetapkan selama enam bulan berturut-turut dapat mengakibatkan ditutupnya tabungan oleh Bank dan saldo yang tersedia akan diperhitungkan sebagai biaya administrasi tabungan yang bersangkutan. </li>
                                    </ol>
                                </li>    
                            </ol>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="cek">
                        <label class="form-check-label" for="flexCheckDefault">
                            Saya setuju dengan ketentuan-ketentuan yang ada
                        </label>
                    </div>
                    <a href="/tabungan/jenis/individu/amanah" id="test" class="btn btn-primary disabled" role="button">Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="/vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="/js/global.js"></script>
    <script>
        $('.form-check-input').change(function() {
            var disabled = !$('input[name="cek"]').prop('checked');
            $('#test').toggleClass('disabled', disabled);
        });
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
