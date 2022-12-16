<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpus ID</title>
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
                            <a class="nav-link active" aria-current="page" href="">Home</a>
                        </li>
                        @auth
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
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://backend.perpusnas.go.id/uploads/berita/1671162359_65a2d46623c785034b35.jpg"
                        class="card-img-top" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <h5 class="card-title">Perpusnas Beri Bantuan ke 10 Perpustakaan Komunitas di Sulawesi Barat
                        </h5>
                        <p class="card-text">
                            TMamuju, - Perpustakaan Nasional memberikan bantuan untuk 10 Perpustakaan Komunitas di
                            Provinsi Sulawesi Barat sebagai dukungan nyata pengembangan literasi dan budaya baca....
                        </p>
                        <button class="btn btn-primary">Baca lebih Lanjut..</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://backend.perpusnas.go.id/uploads/berita/1671087964_123f64eceb9d46671f65.jpeg"
                        class="card-img-top" alt="Palm Springs Road" />
                    <div class="card-body">
                        <h5 class="card-title">Perpusnas Dorong Masyarakat di Kaltim Tingkatkan Literasi</h5>
                        <p class="card-text">Kepala Perpustakaan Nasional (Perpusnas) Muhammad Syarif Bando menegaskan,
                            literasi adalah kedalaman pengetahuan seseorang terhadap suatu objek ilmu pengetahuan
                            tertentu yang dapat diimplementasikan untuk memproduksi barang dan jasa.</p>
                        <button class="btn btn-primary">Baca lebih Lanjut..</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://backend.perpusnas.go.id/uploads/berita/1670941443_ea2bbc97909cc7cfa642.jpg"
                        class="card-img-top" alt="Los Angeles Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Penyerahan Buku Inkubator Literasi Kepada Bupati Banyuwangi</h5>
                        <p class="card-text">Soft launching buku digelar sebagai bagian dari rangkaian Festival
                            Literasi dengan menggandeng Pemkab Kabupaten Banyuwangi bertempat di Pendopo Sabha Swagata
                            Blambangan, Senin (12/12).</p>
                        <button class="btn btn-primary">Baca lebih Lanjut..</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 style="text-align: center" class="text-success p-3"><b>Tentang</b> </h1>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0 ">
                    <div class="col-md-4">
                        <img src="data:image/jpeg;base64,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"
                            alt="Trendy Pants and Shoes" class="img-fluid rounded-start" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Tentang</h5>
                            <p class="card-text">
                                Web ini dibuat untuk memenuhi Nilai Praktikum
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#Tentang">
                                Launch demo modal
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>

        <!-- Modal -->
        <div class="modal fade" id="Tentang" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tentang</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Ini Aplikasi pengelolaan perpustakaan
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>



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
