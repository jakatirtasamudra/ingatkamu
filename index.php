<?php 

    date_default_timezone_set('Asia/Jakarta');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Ingat Kamu !
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <br><br>
    <div class="container mt-lg-4 text-center">

        <div class="alert alert-primary my-4" role="alert">
            <h3>
                <small>
                    Waktu Mengecek Isi Pesan
                </small>
                <br>
                00:04 - 04:06 - 06:09 - 09:13 - 13:16 - 16:18 - 18:21 - 21:00
            </h3>
        </div>
        <br>

        <h1>

            <?php if ( date('H') < '04' ) { ?>

            <div class="text-danger">
                Pola Tidur !
            </div>
            Jangan Kecapean dan Jangan Sering Bergadang
            <br>
            Diri Kamu Butuh Recovery
            <br><br>
            <img src="1.jpeg" class="img-thumbnail" alt="HEY">

            <?php } elseif ( date('H') < '06' ) { ?>

            <div class="text-danger">
                Pengingat !
            </div>
            Jangan Lupa Untuk Dimulai Lebih Dekat
            <br>
            Kepada Sang Pencipta
            <br><br>
            <img src="2.jpeg" class="img-thumbnail" alt="HEY">

            <?php } elseif ( date('H') < '09' ) { ?>

            <div class="text-danger">
                Selamat Pagi !
            </div>
            <br>
            Baru saja bangun memikirkan betapa hebatnya kamu.
            <br>
            Semoga harimu menyenangkan
            <br><br>
            <img src="3.png" class="img-thumbnail" alt="HEY">

            <?php } elseif ( date('H') < '13' ) { ?>

            <div class="text-danger">
                Selamat Siang!
            </div>
            <br>
            Terima Kasih Buat Kamu Yang Tidak Pernah
            <br>
            Lelah Untuk Memberikan Hal Yang Indah
            <br><br>
            <img src="4.png" class="img-thumbnail" alt="HEY">

            <?php } elseif ( date('H') < '16' ) { ?>

            <div class="text-danger">
                Rehat Sebentar !
            </div>
            <br>
            Jangan Memaksakan Untuk Melakukan Aktivitas Hari Ini
            <br>
            Kalau Terjadi Sesuatu Aku Kepikiran
            <br><br>
            <img src="5.jpeg" width="50%;" class="img-thumbnail" alt="HEY">

            <?php } elseif ( date('H') < '18' ) { ?>

            <div class="text-danger">
                Selamat Sore !
            </div>
            <br>
            Semoga Harimu Menyenangkan Seperti Dirimu
            <br><br>
            <img src="6.jpeg" width="50%;" class="img-thumbnail" alt="HEY">

            <?php } elseif ( date('H') < '21' ) { ?>

            <div class="text-danger">
                Menunggu !
            </div>
            <br>
            Ada Orang Yang Rela Menunggu Dengan Sabar
            <br>
            Hanya Untuk Sebuah Kabar
            <br><br>
            <img src="7.png" width="50%;" class="img-thumbnail" alt="HEY">

            <?php  } else { ?>

            <div class="text-danger">
                Istirahat !
            </div>
            <br>
            Bulan Bersinar Terang, Tetapi Kamu Bersinar Lebih Terang
            <br>
            Tidur Yang Nyenyak
            <br><br>
            <img src="8.png" width="50%;" class="img-thumbnail" alt="HEY">

            <?php } ?>

        </h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>