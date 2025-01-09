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
                                        <li><a class="dropdown-item active" href="tentang">Tentang</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="status">Statuts STTC</a></li>
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
            <!-- Konten Tentang -->
            <div class="container tentang">
                <h2 class="text-center">Sekolah Tinggi Teknik Cipasung</h2>
                <center>
                    <img src="storage/blog/brt3.png" style= "width: 800px;, height: 600px;">
                </center>
                <br>
                <div class="col-md-12 text-left">
                    <p class="text-muted" style="text-align: justify;">
                        Sekolah Tinggi Teknologi Cipasung (STTC) didirikan pada tahun 1997 dengan bantuan dan arahan dari
                        tim <b>Institut Teknologi Bandung (ITB)</b> untuk menjawab tantangan penyediaan tenaga ahli
                        profesional dalam bidangnya, berkomitmen untuk mencetak tenaga ahli di bidang teknik.
                        yang kompetitif dan berintegritas. Terletak di Cipasung, kami menawarkan berbagai program studi yang
                        dirancang untuk
                        memenuhi kebutuhan industri modern dengan fokus pada kualitas pendidikan. Berikut ini yang melatar
                        belakangi berdirinya Sekolah Tinggi Teknologi Cipasung:
                    </p>
                    <ul class="text-muted" style="text-align: left;">
                        <li>Pesantren sebagai lembaga pendidikan telah mempunyai peran besar dalam sejarah perjalanan bangsa
                            Indonesia</li>
                        <li>Perhatian pesantren terhadap pengembangan Sumber Daya Manusia dalam IPTEK masih lemah</li>
                        <li>Perkembangan bangsa-bangsa di dunia sangat ditentukan oleh kualitas Sumber Daya Manusianya</li>
                        <li>Sekolah Tinggi Teknologi Cipasung terpanggil untuk mampu melahirkan Sumber Daya Manusia yang
                            menguasai IPTEK sekaligus ber-IMTAQ yang kokoh</li>
                    </ul>
                    <p class="text-muted" style="text-align: justify;">
                        Sekolah Tinggi Teknologi Cipasung memiliki program studi di bidang Teknik Informatika, Teknik Mesin,
                        dan Teknik Sipil. Dosen-dosen kami adalah
                        para ahli di bidangnya, dan kami dilengkapi dengan fasilitas modern untuk mendukung pembelajaran
                        yang berkualitas.
                    </p>
                    <p class="text-muted" style="text-align: justify;">
                        Dalam upaya menjaga kualitas lulusan, STTC telah dan akan terus melakukan berbagai kerjasama
                        industri dan lembaga terkait lainnya. kerjasama yang luas ini telah terbukti memberikan manfaat yang
                        besar bagi mahasiswa dari lulusan STTC dalam membangun karirnya. Kerjasama yang telah dijalin oleh
                        STTC di antaranya :
                    </p>
                </div>
                <ul class="text-muted">
                    <li>Bukalapak</li>
                    <li>MNC Corporation</li>
                    <li>PT. KAI</li>
                    <li>Pertamina</li>
                    <li>Bank Indonesia</li>
                    <li>BMKG</li>
                    <li>Dll</li>
                </ul>
            </div>
            <div class="container p-4 my2 no-border">
                <div class="alert alert-secondary">
                    <h5 class="text-center"><b> Visi Dan Misi Sekolah Tinggi Teknologi Cipasung</b></h5>
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="form-group">
                            <strong>Visi Sekolah Tinggi Teknologi Cipasung</strong>
                            <p class="text-muted" style="text-align: justify;">
                                Menjadikan Sekolah Tinggi Teknologi Cipasung sebagai lembaga pendidikan tinggi yang unggul
                                dan pusat pengembangan teknologi yang unggul, handal, ddan bermartabat yang mampu
                                menghantarkan masyarakat mandiri yang rahmatan lil alamin.</p>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <strong>Misi Sekolah Tinggi Teknologi Cipasung</strong>
                            <p class="text-muted" style="text-align: justify;">
                                Melakukan Tridharma Perguruan Tinggi selaras dengan norma-norma agama dan dinamika
                                masyarakat yang mampu memberdayakan potensi lokal untuk bersaing di tingkat global.
                            </p>
                        </div>
                    </div>
                </div>
        </main>
        <br>
    @endsection
