<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Posyandu</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                {{-- <img src="{{ asset('/img/navbar-logo1.svg') }}" alt="..." class="logo" /> --}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#registrasi">Registrasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pelayanan">Pelayanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#lokasi">Lokasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    {{-- <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang di Website</div>
                <div class="masthead-heading text-uppercase">Posyandu Mangga</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
            <img src="/img/icon_posyandu.png" alt="Posyandu Mangga">
        </header> --}}

 
        <header class="masthead">
            <div class="container">
                <div>
                    <div class="masthead-subheading">Selamat Datang di Website</div>
                    <div class="masthead-heading text-uppercase">Posyandu Mangga</div>
                    <a class="btn btn-primary btn-xl text-uppercase" href="/login">lOGIN</a>
                </div>
                <img src="/img/icon_posyandu.png" alt="Posyandu Mangga">
            </div>
        </header>

    <!-- Services-->
    <section class="page-section" id="profil">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Profil Posyandu</h2>
                <h3 class="section-subheading text-muted">Posyandu Ini Berdiri Pada Tahun 1990</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Visi</h4>
                    <p class="text-muted">Menjadi perantara untuk pelayanan kesehatan keluarga (ibu, bayi, dan balita)
                        agar dapat menjamin pertumbuhan dan perkembangan bayi secara optimal di lingkungan RW 2</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Misi</h4>
                    <p class="text-muted">1. Melaksanakan penimbangan bayi dan balita sebulan sekali agar dapat
                        terpantau pertumbuhan dan perkembangannya. 2. Melakukan kerjasama dengan Puskesmas terdekat
                        dalam usaha meningkatkan kesehatan ibu, bayi, dan balita. 3. Mendukung dan membantu program
                        pemerintah di bidang kesehatan. 4. Mengembangkan kemampuan sumber daya manusia para kader
                        Posyandu.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Motto</h4>
                    <p class="text-muted">Posyandu kami bertekad untuk menjadi pilar utama dalam memastikan kesehatan
                        dan kesejahteraan masyarakat. Dengan semangat yang menggerakkan kami, kami berkomitmen untuk
                        memberikan pelayanan yang peduli dan tanggap terhadap setiap individu dan keluarga.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="page-section bg-light" id="registrasi">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Ingin Jadi Anggota Posyandu?</h2>
                <h2 class="section-heading text-uppercase">Begini Caranya</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/1.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>1</h4> --}}
                            <h4 class="subheading">Datang ke Posyandu</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Datang ke Posyandu dengan membawa Kartu Keluarga anda. Pendaftaran buka setiap hari Kamis</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/2.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>2</h4> --}}
                            <h4 class="subheading">Temui Admin</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Udah samapai Posyandu nih, temui admin atau kader yang bertugas dan katakan ingin mendaftar sebagai anggota Posyandu</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/3.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>3</h4> --}}
                            <h4 class="subheading">Isi Formulir</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Isi formulir yang telah diberikan oleh Kader, setelah itu tunggu prosesnya sampai selesai.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/4.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>4</h4> --}}
                            <h4 class="subheading">It's Done</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Proses pendaftaran Anda menjadi anggota telah selesai. Selamat telah menjadi bagian dari Posyandu Mangga</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Mari
                            <br />
                            Bergabung!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!--kesehatan-->
    <section class="page-section" id="pelayanan">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Terus gimana alur pelayanan di posyandu?</h2>
                {{-- <h2 class="section-heading text-uppercase">Begini Caranya</h2> --}}
                <h3 class="section-subheading text-muted">Cek di bawah ini</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/langkah1.png"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>1</h4> --}}
                            <h4 class="subheading">Langkah 1</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Pendaftaran</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/langkah2.png"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>2</h4> --}}
                            <h4 class="subheading">Langkah 2</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Penimbangan BB, Pengukuran PB dan lain-lain</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/langkah3.png"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>3</h4> --}}
                            <h4 class="subheading">Langkah 3</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Pencatatan</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/langkah4.png"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>2</h4> --}}
                            <h4 class="subheading">Langkah 4</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Penyuluhan Kesehatan</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/langkah5.png"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>3</h4> --}}
                            <h4 class="subheading">Langkah 5</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Pelayanan Kesehatan(imunisasi, KB)</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/about/4.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            {{-- <h4>4</h4> --}}
                            <h4 class="subheading">Selesai</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Demikian Prosedur Pelayanan di Posyandu</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Ayo!!
                            <br />
                            Datang
                            <br />
                            Ke Posyandu
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- maps-->
<section class="page-section bg-light" id="lokasi">
    <div class="container">
        <div class="text-center">  
            <h2 class="section-heading text-uppercase">Lokasi</h2>
            <h3 class="section-subheading text-muted">Posyandu Mangga</h3>
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-6">
                <div class="text-left">
                    <br><br><br>
                    <h4><i class="fas fa-map-marker-alt"></i> Alamat</h4>
                    <p>Jl. Lapangan Bakalan RT 2 RW 2 Kec. Bululawang Kab. Malang</p>
                    <br>
                    <h4><i class="fas fa-phone"></i> No.HP</h4>
                    <p>0812-3456-7890</p>
                    <br>
                    <h4><i class="far fa-envelope"></i> Email</h4>
                    <p>posyandu.mangga@gmail.com</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="map-container">
                    <!-- Letakkan iframe peta di sini -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d449.05776697319675!2d112.66032064794334!3d-8.109322945236967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sposyandu%20mangga%20jl.%20lapangan%20bakalan%20rt%202%20rw%202%20kec.%20bululawang%20kab.%20malang!5e0!3m2!1sid!2sid!4v1718199457856!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Team-->
    <section class="page-section" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Kelompok 3</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/joo.jpg" alt="..." />
                        <h4>Eka Krisna Ferian</h4>
                        <p class="text-muted">2241720100</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/jooharver?igsh=aHk3c2VodWUxOWdh"
                            aria-label="Parveen Anand Twitter Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/jooharver"
                            aria-label="Parveen Anand Facebook Profile"><i class="fa-brands fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="mailto:ekakrisnaferian@gmail.com"
                            aria-label="Parveen Anand LinkedIn Profile"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/cahyo.jpg" alt="..." />
                        <h4>Cahyo Adi Prasetia</h4>
                        <p class="text-muted">2241720191</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/_cyooap/?hl=en"
                            aria-label="Diana Petersen Twitter Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/ryuuunothuman"
                            aria-label="Diana Petersen Facebook Profile"><i class="fa-brands fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="mailto:cahyoadiprasetia@gmail.com"
                            aria-label="Diana Petersen LinkedIn Profile"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/juan.jpg" alt="..." />
                        <h4>Juan Felix A.N.T.</h4>
                        <p class="text-muted">2241720042</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/jfant__/"
                            aria-label="Larry Parker Twitter Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/JuanGans"
                            aria-label="Larry Parker Facebook Profile"><i class="fa-brands fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="mailto:juantkj01@gmail.com"
                            aria-label="Larry Parker LinkedIn Profile"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/nazwa.jpg" alt="..." />
                        <h4>Nazwa Ayunda M.</h4>
                        <p class="text-muted">2241720013</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/nzwynda?igsh=ejU4cXZ1NGwzZWpm&utm_source=qr"
                            aria-label="Parveen Anand Twitter Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/nazwa48"
                            aria-label="Parveen Anand Facebook Profile"><i class="fa-brands fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="mailto:nazwaayunda48@gmail.com"
                            aria-label="Parveen Anand LinkedIn Profile"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="img/regita.jpg" alt="..." />
                        <h4>Regita Delya Putri</h4>
                        <p class="text-muted">2241720137</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/regiitaaputrii?igsh=MXhwM3R2aW5zbXJ5cA=="
                            aria-label="Parveen Anand Twitter Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://github.com/reg4762"
                            aria-label="Parveen Anand Facebook Profile"><i class="fa-brands fa-github"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="mailto:regitadelyap@gmail.com"  
                            aria-label="Parveen Anand LinkedIn Profile"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            {{-- <div class="col-lg-8 mx-auto text-center">
                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                    laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div> --}}
        </div>
        </div>
    </section>


    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; 2024 Creative Tim Polinema</div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg"
                                    alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Threads
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Illustration
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg"
                                    alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Explore
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Graphic Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg"
                                    alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Finish
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Identity
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
</body>

</html>
