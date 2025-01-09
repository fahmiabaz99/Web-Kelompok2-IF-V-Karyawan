@extends('layouts.app')

@section('content')

    <body>

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
                        <a class="navbar-brand" href="https://www.youtube.com/@sttcipasung4945" target="_blank">
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
                                        <li><a class="dropdown-item" href="tentang">Tentang</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="status">Statuta STTC</a></li>
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
                                        <li><a class="dropdown-item" href="akreditasi">Akreditasi</a></li>
                                        <li>
                                    </ul>
                                </li>
                            </div>
                            <div class="kolom">
                                <li class="nav-item mx-2">
                                    <a class="nav-link active" href="fasilitas">Fasilitas</a>
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
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Tautan
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="blog">Blog Kampus</a></li>
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

        <!--Fasilitas-->
        <main>


            <div class="kolom">
                <li class="nav-item dropdown">
                    <a class="nav-link active" href="fasilitas.html" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="fasilitas">
                            <br>
                            <br>

                            <h1>Fasilitas</h1>
                            <div class="wrapper">
                                <div class="text-box">
                                    <img src="assets/img/Aula Kampus.jpg" width="200px" alt="">
                                    <h2>Aula Kampus</h2>
                                    <p>Fasilitas aula serbaguna di Sekolah Tinggi Teknologi Cipasung adalah tempat yang
                                        sederhana namun fungsional, yang mendukung berbagai kegiatan akademik dan
                                        non-akademik. Ruangan ini memberikan fleksibilitas bagi mahasiswa dan staf STTC
                                        untuk mengadakan berbagai acara yang berkontribusi pada kehidupan kampus.</p>
                                    <br>
                                    <br>
                                    <img src="assets/img/Mesjid.jpg" width="200px" alt="">
                                    <h2>Tempat ibadah</h2>
                                    <p>Di lingkungan STTC juga terdapat fasilitas ibadah berupa masjid,yang dikelola oleh
                                        mahasiswa/i sekolah tinggi teknologi cipasung.</p>
                                    <br>
                                    <br>
                                    <img src="assets/img/Lab Komputer.jpg" width="200px" alt="">
                                    <h2>Lab Komputer</h2>
                                    <p>Dalam era digital ini, teknologi memainkan peran penting dalam dunia pendidikan.
                                        Laboratorium komputer, atau yang sering disebut lab komputer, menjadi salah satu
                                        aspek utama yang mendukung integrasi teknologi dalam proses belajar-mengajar..</p>
                                    <br>
                                    <br>
                                    <img src="assets/img/Kantin.jpg" width="200px" alt="">
                                    <h2>Kantin</h2>
                                    <p>Kantin adalah salah satu fasilitas yang terdapat di Kampus Sekolah Tinggi Teknologi
                                        Cipasung, kantin ini menyediakan makanan dan minuman, kantin sttc dikelola oleh Unit
                                        Kegiatan Mahasiswa (UKM).</p>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <img src="assets/img/Lapang Voly.jpg" width="200px" alt="">
                                    <h2>Sarana Olahraga</h2>
                                    <p>Fasilitas olahraga juga dapat dimanfaatkan oleh para mahasiswa/i di STTC,memang belum
                                        semua sarana olahraga yang tersedia dapat dijumpai di STTC,hanya baru lapang voly
                                        saja yang tersedia.</p>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>


        </main>
    @endsection
