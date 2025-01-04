@extends('layouts.app')

@section('content')
    <main>
        <div class="container-fluid hero d-flex align-items-center justify-content-center">
            <div class="tagline">
                <h1>“Menuntun Mahasiswa Menggapai Impian”</h1>
                <img src="storage/img/Rectangle 11.png" alt="" width="500">
                <p>STTC Terletak di Jl. Cisinga No.KM1, Cilampunghilir, </p>
                <p>Kec. Padakembang, Kabupaten Tasikmalaya, Jawa Barat.</p>
                <p>Kode Pos : 46466</p><br>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h1>Kelas & Program Studi</h1>
                        <h3>Sekolah Tinggi Teknologi Cipasung</h3>
                    </center>
                </div>
            </div>
        </div>


        <!-- Slide Gambar -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="storage/if.jpg" class="d-block w-100" alt="" height="650px">
                    <div class="carousel-caption d-none d-sm-block">
                        <h3><b>TEKNIK INFORMATIKA</b></h3>
                        <p>Bidang ilmu yang mempelajari penerapan teknologi informasi dan komunikasi untuk mengolah
                            data. Jurusan ini mempelajari berbagai teknologi komputer.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="storage/ti.jpeg" class="d-block w-100" alt="" height="650px">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><b>TEKNIK INDUSTRI</b></h3>
                        <p>Bidang ilmu yang mempelajari bagaimana mengoptimalisasi kegiatan manusia seperti produksi,
                            pengelolaan & ekonomi. Teknik industri menggabungkan ilmu teknik dan bisnis untuk merancang,
                            memperbaiki, dan menerapkan sistem terintegrasi.</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="storage/rgl.jpg" class="d-block w-100" alt="" height="650px">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><b>KELAS REGULER</b></h3>
                        <p>Adalah program perkuliahan yang mengikuti jadwal standar dan kurikulum umum, yang biasanya
                            dilakukan di perguruan tinggi negeri maupun swasta.</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="storage/zoom.jpeg" class="d-block w-100" alt="" height="650px">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><b>KELAS KARYAWAN</b></h3>
                        <p>Program perkuliahan yang ditujukan untuk mahasiswa yang sudah bekerja. Program ini dirancang
                            untuk memungkinkan mahasiswa melanjutkan pendidikannya di luar jam kerja. </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br />
        <br />


        <!--BERITA-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h3>Berita Terkini</h3>
                        <hr>
                    </center>
                </div>
            </div>
        </div>

        <div class="container justify-content-center">
            <div class="row justify-content-center">

                <!-- BERITA PERTAMA -->
                <div class="card col-md-4 shadow p-3 mb-2 bg-body rounded" style="width: 350px;">
                    <img src="storage/blog/brt1.PNG" class="card-img-top" alt="...">
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
                <div class="card col-md-4 shadow p-3 mb-2 bg-body rounded" style="width: 350px;">
                    <img src="storage/blog/brt2.PNG" class="card-img-top" alt="...">
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
                <div class="card col-md-4 shadow p-3 mb-2 bg-body rounded" style="width: 350px;">
                    <img src="storage/blog/brt3.png" class="card-img-top" alt="...">
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
            </div>
        </div>
        <br />
        <br />
        <center>
            <div class="tombol">
                <center>
                    <a href="blog" class="btn btn-next">Berita Lainnya</a>
                </center>
            </div>
        </center>
        <br><br>
        </div>
    </main>
@endsection
