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
                                        <li><a class="dropdown-item active" href="akreditasi">Akreditasi</a></li>
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
            <!-- Konten Akreditasi -->
            <div class="container akreditasi">
                <div class="text-center">
                    <h2>Akreditasi Sekolah Tinggi Teknologi Cipasung</h2>
                    <p class="text-muted" style="text-align: justify;">
                        Sekolah Tinggi Teknologi Cipasung telah mendapatkan akreditasi dari Badan Akreditasi Nasional
                        Perguruan Tinggi (BAN-PT).
                        Akreditasi ini menunjukkan bahwa program-program yang kami tawarkan telah memenuhi standar kualitas
                        yang ditetapkan dan diakui secara nasional. Kami terus berupaya untuk mempertahankan dan
                        meningkatkan
                        peringkat akreditasi kami dengan melakukan berbagai upaya peningkatan kualitas pendidikan dan
                        pelayanan.
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
            <div class="container p-4 my-2 border">
                <div class="alert alert-secondary">
                    <h5 class="text-center"><b>Data Pergururan Tinggi</b></h5>
                </div>
                <div class="text-muted">
                    <div class="row">
                        <div class="col-sm-6" style="width:635px;">
                            <div class="form-group">
                                <strong> Pimpinan Perguruan Tinggi</strong>
                                <ul>
                                    <li>Ketua : Drs. H. Abdul Chobir, M.T.</li>
                                    <li>Wk I : Ahmad Zamakhsyari Sidiq, M.T.</li>
                                    <li>Wk II : Ajeng Sabarini Muslimah, M.T.</li>
                                    <li>Wk II : -</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <strong>Penyelenggaraa Perguruan Tinggi</strong>
                                <label class="col-md-12">Yayasan Pesantren Cipasung</label>
                                <ul>
                                    <li>Ketua : Drs. H. A. Bunyamin Ruhiat, M.Si.</li>
                                    <li>Tanggal Akta Notaris : 07 Maret 2009</li>
                                    <li>No.Reg.Hum.HAM : AHU.1154.01.04.Tahun 2010</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <strong>Program Studi Perguruan Tinggi</strong>
                                    <label class="col-md-12">Teknik Industri</label>
                                    <ul>
                                        <li>Jenjang : S1</li>
                                        <li>SK Akreditasi : 0034/SK/LAM-Teknik/AS/VII/2022</li>
                                        <li>Tanggal : 21 Agustus 2022</li>
                                        <li>Kepala Prodi : -</li>
                                    </ul>
                                    <label>Teknik Informatika</label>
                                    <ul>
                                        <li>Jenjang : S1</li>
                                        <li>SK Akreditasi : 3020/SK/BAN-PT/Ak/S/VIII/202</li>
                                        <li>Tanggal : 01 Agustus 2023</li>
                                        <li>Kepala Prodi : Mohammad Sabar Jamil, M.T</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <strong> Sarana Prasarana Perguruan Tinggi</strong>
                                    <ul>
                                        <li>Luas Tanah : 5865</li>
                                        <li>Luas Ruangan Kuliah : 216 </li>
                                        <li>Luas Ruangan Laboratorium : 240</li>
                                        <li>Luas Ruangan Dosen : 48</li>
                                        <li>Luas Ruangan Administrasi : 48</li>
                                        <li>Luas Ruangan Perpustakaan : 48</li>
                                        <li>Jumlah Buku Dalam Judul : 800</li>
                                        <li>Jumlah SDM Sarjana : 6</li>
                                        <li>Bandwidth Internet : 100</li>
                                        <li>Nama ISP : Indihome</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        <br>
        <br>
    @endsection
