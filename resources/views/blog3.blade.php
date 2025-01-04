@extends('layouts.app')

@section('content')
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">

                    <!-- SOSIAL MEDIA -->
                    <a class="navbar-brand" href="https://maps.app.goo.gl/dhpq7kBqmRkPsRoR9" target="_blank">
                        <img src="storage/img/maps.png" alt="" width="25" height="25">Maps
                    </a>
                    <a class="navbar-brand" href="https://www.youtube.com/@sttcipasung" target="_blank">
                        <img src="storage/img/yt.png" alt="" width="25" height="25">Youtube
                    </a>
                    <a class="navbar-brand" href="https://www.facebook.com/sttcipasung" target="_blank">
                        <img src="storage/img/fb.png" alt="" width="25" height="25">Facebook
                    </a>
                    <a class="navbar-brand" href="https://www.instagram.com/sttcipasung_official/" target="_blank">
                        <img src="storage/img/ig2.png" alt="" width="25" height="25">Instagram
                    </a>

                    <!-- NAVBAR BERANDA -->
                    <ul class="navbar-nav mx-auto">
                        <div class="kolom">
                            <li class="nav-item mx-2">
                                <a class="nav-link" aria-current="page" href="/">Beranda</a>
                            </li>
                        </div>
                        <div class="kolom">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Profil
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="tentang.html">Tentang</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="status.html">Statuta STTC</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Rencana Induk Pengembangan</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Organisasi</a></li>
                                    <li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Profil Pemrakarsa</a></li>
                                    <li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Kinerja Tahunan</a></li>
                                    <li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">SK Kode Etik</a></li>
                                    <li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="akreditasi.html">Akreditasi</a></li>
                                    <li>
                                </ul>
                            </li>
                        </div>
                        <div class="kolom">
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#">Fasilitas</a>
                            </li>
                        </div>
                        <div class="kolom">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Layanan
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">E-Learning</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Perpustakaan Digital</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Jurnal</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Verifikasi Ijazah</a></li>
                                </ul>
                            </li>
                        </div>
                        <div class="kolom">
                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Tautan
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item active" href="#">Blog Kampus</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">LPPM</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">UPM</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Login Sevima</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">PMB Online</a></li>
                                </ul>
                            </li>
                        </div>
                    </ul>


                    <!-- LOGO STTC KANAN NAVBAR -->
                    <a class="navbar-brand">
                        <img src="storage/img/kanan.png" alt="" width="180" height="35">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container blog">
            <div class="row">
                <div class="col-md-12">
                    <h2><span class="badge bg-danger">New</span> Berita Kampus STTC</h2>
                    <hr>
                </div>
            </div>
        </div>

        <div class="container justify-content-center">
            <div class="row justify-content-center">

                <!-- BERITA PERTAMA -->
                <div class="card col-sm-4 shadow p-3 mb-2 bg-body rounded" style="width: 350px;">
                    <img src="storage/blog/nxt3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">ALUMNI STT CIPASUNG MERAIH PENGHARGAAN</h5>
                            <p class="card-text">Pada Hari Minggu Tanggal 06 Oktober 2024 H. Sandiaga Salahuddin Uno,
                                B.B.A., M.B.A. dari Kementerian Pariwisata dan Ekonomi Kreatif (Kemenparekraf)
                                mengundang...</p>
                            <div class="tombol">
                                <a href="https://sttcipasung.ac.id/2024/10/alumni-stt-cipasung-meraih-penghargaan-sebagai-peserta-dan-capstone-terbaik-baparekraf-digital-talent/"
                                    class="btn btn-next" target="_blank">Selengkapnya</a>
                            </div>
                        </center>
                    </div>
                </div>

                <!-- BERITA KEDUA -->
                <div class="card col-sm-4 shadow p-3 mb-2 bg-body rounded" style="width: 350px;">
                    <img src="storage/blog/nxt3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">WISUDA ANGKATAN 2020 SEKOLAH TINGGI TEKNOLOGI CIPASUNG</h5>
                            <p class="card-text">Pada hari rabu tanggal 25 September 2024, Sekolah Tinggi Teknologi
                                Cipasung telah sukses melaksanakan acara Wisuda angkatan 2020. Momen bersejarah ini
                                dihadiri...</p>
                            <div class="tombol">
                                <a href="https://sttcipasung.ac.id/2024/10/wisuda-angkatan-2020-sekolah-tinggi-teknologi-cipasung/"
                                    class="btn btn-next" target="_blank">Selengkapnya</a>
                            </div>
                        </center>
                    </div>
                </div>

                <!-- BERITA KETIGA -->
                <div class="card col-sm-4 shadow p-3 mb-2 bg-body rounded" style="width: 350px;">
                    <img src="storage/blog/nxt3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">PEMBINAAN DAN PENYERAHAN SK BEASISWA S1 BAZNAS</h5>
                            <p class="card-text">Hari Sabtu (07/09/2024) Baznas melakukan pembinaan dan penyerahan sk
                                penerima beasiswa s1 baznas se kabupaten tasikmalaya di aula sekolah tinggi teknologi
                                cipasung. Ada 12 kampus yang terdata sebagai...</p>
                            <div class="tombol">
                                <a href="https://sttcipasung.ac.id/2024/09/pembinaan-dan-penyerahan-sk-beasiswa-s1-baznas/"
                                    class="btn btn-next" target="_blank">Selengkapnya</a>
                            </div>
                        </center>
                    </div>
                </div>

                <!-- BERITA KEEMPAT -->
                <div class="card col-sm-4 shadow p-3 mb-2 bg-body rounded" style="width: 350px;">
                    <img src="storage/blog/nxt3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">Seminar Teknologi: Handle of Rapid Flow Technology</h5>
                            <p class="card-text">(6/09/2023) -Sekolah Tinggi Teknologi Cipasung (STTC) sedang
                                melaksanakan kegiatan kuliah ta’aruf mahasiswa baru (KTMB) untuk mahasiswa baru pada
                                tanggal 4-8 September 2023. Dalam rangkaian acara KTMB, ada...</p>
                            <div class="tombol">
                                <a href="https://sttcipasung.ac.id/2023/09/seminar-teknologi-handle-of-rapid-flour-technology/"
                                    class="btn btn-next" target="_blank">Selengkapnya</a>
                            </div>
                        </center>
                    </div>
                </div>

                <!-- BERITA KELIMA -->
                <div class="card col-sm-4 shadow p-3 mb-2 bg-body rounded" style="width: 350px;">
                    <img src="storage/blog/nxt3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">Roadshow Gerakan 1000 Startup di Harlah STT Cipasung Ke-26</h5>
                            <p class="card-text">Sekolah Tinggi Teknologi Cipasung pada pembukaan rangkaian harlah yang
                                ke-26 mengadakan kolaborasi dengan Gerakan 1000 Startup untuk mendukung talenta muda
                                dalam...</p>
                            <div class="tombol">
                                <a href="https://sttcipasung.ac.id/2023/07/roadshow-gerakan-1000-startup-di-harlah-stt-cipasung-ke-26/"
                                    class="btn btn-next" target="_blank">Selengkapnya</a>
                            </div>
                        </center>
                    </div>
                </div>

                <!-- BERITA KEENAM -->
                <div class="card col-sm-4 shadow p-3 mb-2 bg-body rounded" style="width: 350px;">
                    <img src="storage/blog/nxt3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">KTMB SEKOLAH TINGGI TEKNOLOGI CIPASUNG 2023</h5>
                            <p class="card-text">Sekolah Tinggi Teknologi Cipasung mengadakan Kuliah Ta’aruf Mahasiswa
                                Baru atau KTMB merupakan sebuah kegiatan orientasi kampus yang dirangkai khusus untuk
                                menyambut mahasiswa baru yang telah diterima di Sekolah Tinggi Teknologi Cipasung
                                sebanyak...</p>
                            <div class="tombol">
                                <a href="https://sttcipasung.ac.id" class="btn btn-next" target="_blank">Selengkapnya</a>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <br>
            <br>

            <nav aria-label="Page navigation example" style="justify-items: center;">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="blog2">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="blog">1</a></li>
                    <li class="page-item"><a class="page-link" href="blog2">2</a></li>
                    <li class="page-item"><a class="page-link active" href="#">3</a></li>
                    <li class="page-item"><a class="page-link disabled" href="#">Next</a></li>
                </ul>
            </nav>
            <br>
            <br>
    </main>
@endsection
