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
                                    <a class="nav-link " aria-current="page" href="/">Beranda</a>
                                </li>
                            </div>
                            <div class="kolom">
                                <li class="nav-item dropdown">
                                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Profil
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="tentang">Tentang</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item active" href="status">Statuts STTC</a></li>
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
                                    <a class="nav-link" href="fasilitas">Fasilitas</a>
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
                                        <li><a class="dropdown-item " href="blog">Blog Kampus</a></li>
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
            <!-- Konten Status -->
            <div class="container status">
                <div class="col-md-12 text-center">
                    <h2>Status Sekolah Tinggi Teknologi Cipasung</h2>
                    <br>
                    <p class="text-muted" style="text-align: justify;">
                        STTC berstatus sebagai perguruan tinggi swasta yang terakreditasi. Kami telah mendapatkan pengakuan
                        dari
                        Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT) dan terus berupaya untuk mempertahankan dan
                        meningkatkan
                        kualitas pendidikan kami.
                    </p>
                    <p class="text-muted" style="text-align: justify;">
                        Sekolah Tinggi Teknologi Cipasung telah diakui oleh <b>DirektoriPT</b> dengan peringkat akreditasi
                        perguruan tinggi dengan nilai <b>Baik</b> yang mana untuk Akreditasi Institusinya yaitu
                        <b>Akreditasi C (BAN PT No.345/SK/BAN-PT/Akred/PT/XII/2018)</b>. Sekolah Tinggi Teknologi Ciapsung
                        juga memiliki kode perguruan tinggi yakni <b>043100</b> dengan terhitung mulai tanggal 25 Mei 1998
                        yang berlokasi di Jalan Raya Cisinga KM.01 Desa Cilampunghilir Kecamatan Padakembang 46466 Kabupaten
                        Tasikmalaya Provinsi Jawa Barat.
                    </p>
                </div>
            </div>
        </main>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    @endsection