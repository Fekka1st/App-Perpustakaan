<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        @if (Route::has('login'))
            <div class="container-fluid">
                <img src="https://upload.wikimedia.org/wikimedia/id/a/a7/Perpustakaan_Digital_logo.png" alt=""
                    height="50" width="50">
                <a class="navbar-brand p-2 " href="#">Pengelolaan Perpustakaan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-5 mb-2 mb-lg-0">
                        <li class="nav-item">
                            @auth
                                <a class="nav-link active" aria-current="page" href=" {{ url('/home') }}">Home</a>
                            </li>

                            <li class="nav-item">
                            @else
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>

                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </li>
        @endif
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.perpusnas.go.id/_next/image?url=https%3A%2F%2Fbackend.perpusnas.go.id%2Fuploads%2Fbanner%2F1669137774_5c59c4ad8a00ea4cbfa8.jpg&w=1920&q=75"
                    class="d-block w-100" alt="gambar1">
            </div>
            <div class="carousel-item">
                <img src="https://www.perpusnas.go.id/_next/image?url=https%3A%2F%2Fbackend.perpusnas.go.id%2Fuploads%2Fbanner%2F1669137752_36312f0c666c7269bb82.jpg&w=1920&q=75"
                    class="d-block w-100" alt="Gambar2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h1 style="text-align: center" class="text-success p-3"><b>Unit Kerja</b> </h1>
    <h3 style="text-align: center" class="text-primary">Unit Kerja Perpusnas Republik Indonesia</h3>
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-8" data-aos="fade-right">
            <ul class="row">

                <li class="col-lg-6 !text-sm"><a href="#">Biro SDM dan Umum</a>
                </li>
                <li class="col-lg-6 !text-sm"><a href="#">Biro Perencanaan dan
                        Keuangan</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">Biro Hukum, Organisasi,
                        Kerjasama dan Humas</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">Pusat Data dan
                        Informasi</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">Pusat Pembinaan
                        Pustakawan</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">Pusat Pendidikan dan
                        Pelatihan</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">UPT Perpustakaan Bung
                        Hatta</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">UPT Perpustakaan Bung
                        Karno</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">Inspektorat</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">Pusat Jasa
                        Perpustakaan dan Pengelolaan Naskah Nusantara</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">Pusat Bibliografi dan
                        Pengolahan Bahan Perpustakaan</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">Direktorat Deposit
                        dan Pengembangan Koleksi Perpustakaan</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">Pusat Preservasi dan
                        Alih
                        Media Bahan Perpustakaan</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">Direktorat
                        Standardisasi
                        dan Akreditasi Perpustakaan</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">Pusat Pengembangan
                        Perpustakaan Umum dan Khusus</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">Pusat Pengembangan
                        Perpustakaan Sekolah/Madrasah dan Perguruan Tinggi</a></li>
                <li class="col-lg-6 !text-sm"><a href="#">Pusat Analisis
                        Perpustakaan dan Pengembangan Budaya Baca</a></li>
            </ul>
        </div>
        <div class="col-md-4" data-aos="fade-left">
            <img src="https://cdnwpedutorepartner.gramedia.net/wp-content/uploads/2020/04/27061626/Profesi-Illustrator_626-x-626-px.png"
                class="rounded" width="80%" />
        </div>
    </div>

    <h1 style="text-align: center" class="text-success p-3"><b>Berita Terbaru</b> </h1>
    <h3 style="text-align: center" class="text-primary">Berita terbaru perpusnas Republik Indonesia</h3>



    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">

        <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
            <div class="me-5">
                <span>Jangan lupa login</span>
            </div>
        </section>
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Apliaksi Pengelolaan Buku</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Ini sebuah aplikasi pengelolaan buku
                        </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Fitur</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Mempunyai 2 hak akses
                        </p>
                        <p>
                            Menampilkan jumlah list buku
                        </p>
                        <p>
                            Sudah memiliki Notifikasi
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Teknologi yang digunakan</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Laravel
                        </p>
                        <p>
                            Boostrap
                        </p>
                        <p>
                            Sweetalert
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold">Kontak</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>Ferry Aditya H</p>
                        <p>Whastapp : 081224669182</p>

                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022 Copyright Ferry Aditya H
        </div>

    </footer>
    </div>
</body>

</html>
