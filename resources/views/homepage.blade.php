{{-- @extends('layouts.main')
@section('container')
    <h1>Halaman Home</h1>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo asset('css/homepage.css'); ?>" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="background">
        <div class="navbar">
            <img class="logo" src="<?php echo asset('images/logo.png'); ?>" alt="">
            <img class="menu" src="<?php echo asset('images/menu.png'); ?>" alt="">
        </div>
        <div class="body">
            <img class="menu" src="<?php echo asset('images/Shield.png'); ?>" alt="">
            <div class="container-1">
                <p class="title">Temukan Kembali Kendaraan yang Hilang dengan <span>Mudah</span></p>
                <p class="sub-title-1">Kehilangan kendaraan Anda? Kami tahu perasaan itu, dan kami hadir untuk membantu
                    menemukan kembali
                    kendaraan anda!</p>
                <img class="menu" src="<?php echo asset('images/laporkan_button.png'); ?>" alt="">
            </div>
            <div class="container-2">
                <img class="menu" src="<?php echo asset('images/speakerphone.png'); ?>" alt="">
                <div>
                    <p>Selalu letakkan kendaraan anda pada tempat parkir yang sesuai dan gunakan kunci ganda sebelum
                        meninggalkan kendaraan</p>
                </div>
            </div>
            <p class="title-2">Yuk! Perhatikan Keamanan Kendaraanmu</p>
            <p class="sub-title-2">Berikut kami hadirkan data kejadian kehilangan kendaraan sebagai upaya meningkatkan
                kewaspadaan anda!</p>

            <div class="container-3">
                <div class="title">
                    <p class="title-2">Data Kejadian Kehilangan Kendaraan</p>
                    <p class="tanggal-kejadian">April 2023</p>
                </div>
                <div class="sub-title">
                    <div class="kejadian-card">
                        <p class="banyak-kejadian">6</p>
                        <p class="kejadian">Kejadian</p>
                    </div>
                    <img class="kasus-meningkat" src="<?php echo asset('images/kasus_meningkat.png'); ?>" alt="">
                </div>
            </div>
            <div class="title-3">
                <p>Daftar Laporan Kendaran Hilang</p>
            </div>
            <div class="container-4">
                <div class="semua">
                    <p>Semua</p>
                </div>
                <div class="motor">
                    <p>Motor</p>
                </div>
                <div class="mobil">
                    <p>Mobil</p>
                </div>
            </div>
            <div class="container-5">
                <img class="gambar-motor-beat" src="<?php echo asset('images/motor_beat.png'); ?>" alt="">
                <div class="informasi-kendaraan">
                    <p class="plat-nomor">W 1234 PL</p>
                    <div class="informasi-kendaran-details">
                        <div class="details">
                            <img class="tag" src="<?php echo asset('images/tag.png'); ?>" alt="">
                            <p class="deskripsi-title">
                                Deskripsi Kendaraan
                            </p>
                            <p class="isi-deskripsi">Honda Beat 115 | Warna Hitam | 2019</p>
                        </div>
                        <div class="details">
                            <img class="tag" src="<?php echo asset('images/tag.png'); ?>" alt="">
                            <p class="deskripsi-title">
                                Deskripsi Kendaraan
                            </p>
                            <p class="isi-deskripsi">Honda Beat 115 | Warna Hitam | 2019</p>
                        </div>
                        <div class="details">
                            <img class="tag" src="<?php echo asset('images/tag.png'); ?>" alt="">
                            <p class="deskripsi-title">
                                Deskripsi Kendaraan
                            </p>
                            <p class="isi-deskripsi">Honda Beat 115 | Warna Hitam | 2019</p>
                        </div>
                    </div>
                </div>
                <img class="tombol-hubungi-pemilik" src="<?php echo asset('images/tombol_hubugi_pemilik.png'); ?>" alt="">
            </div>
            <div class="container-5">
                <img class="gambar-motor-beat" src="<?php echo asset('images/motor_beat.png'); ?>" alt="">
                <div class="informasi-kendaraan">
                    <p class="plat-nomor">W 1234 PL</p>
                    <div class="informasi-kendaran-details">
                        <div class="details">
                            <img class="tag" src="<?php echo asset('images/tag.png'); ?>" alt="">
                            <p class="deskripsi-title">
                                Deskripsi Kendaraan
                            </p>
                            <p class="isi-deskripsi">Honda Beat 115 | Warna Hitam | 2019</p>
                        </div>
                        <div class="details">
                            <img class="tag" src="<?php echo asset('images/tag.png'); ?>" alt="">
                            <p class="deskripsi-title">
                                Deskripsi Kendaraan
                            </p>
                            <p class="isi-deskripsi">Honda Beat 115 | Warna Hitam | 2019</p>
                        </div>
                        <div class="details">
                            <img class="tag" src="<?php echo asset('images/tag.png'); ?>" alt="">
                            <p class="deskripsi-title">
                                Deskripsi Kendaraan
                            </p>
                            <p class="isi-deskripsi">Honda Beat 115 | Warna Hitam | 2019</p>
                        </div>
                    </div>
                </div>
                <img class="tombol-hubungi-pemilik" src="<?php echo asset('images/tombol_hubugi_pemilik.png'); ?>" alt="">
            </div>
            <div class="container-5">
                <img class="gambar-motor-beat" src="<?php echo asset('images/motor_beat.png'); ?>" alt="">
                <div class="informasi-kendaraan">
                    <p class="plat-nomor">W 1234 PL</p>
                    <div class="informasi-kendaran-details">
                        <div class="details">
                            <img class="tag" src="<?php echo asset('images/tag.png'); ?>" alt="">
                            <p class="deskripsi-title">
                                Deskripsi Kendaraan
                            </p>
                            <p class="isi-deskripsi">Honda Beat 115 | Warna Hitam | 2019</p>
                        </div>
                        <div class="details">
                            <img class="tag" src="<?php echo asset('images/tag.png'); ?>" alt="">
                            <p class="deskripsi-title">
                                Deskripsi Kendaraan
                            </p>
                            <p class="isi-deskripsi">Honda Beat 115 | Warna Hitam | 2019</p>
                        </div>
                        <div class="details">
                            <img class="tag" src="<?php echo asset('images/tag.png'); ?>" alt="">
                            <p class="deskripsi-title">
                                Deskripsi Kendaraan
                            </p>
                            <p class="isi-deskripsi">Honda Beat 115 | Warna Hitam | 2019</p>
                        </div>
                    </div>
                </div>
                <img class="tombol-hubungi-pemilik" src="<?php echo asset('images/tombol_hubugi_pemilik.png'); ?>" alt="">
            </div>
        </div>
    </div>
</body>

</html>
