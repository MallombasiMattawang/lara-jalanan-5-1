@extends('front')

@section('htmlheader_title')
    MyCV
@endsection
@section('contentheader_title')
    Curicullum Vitae
@endsection
@section('contentheader_description')
    Curicullum Vitae
@endsection
@section('main-content')
    <br/><br/>
    <div class="container">
        <div class="my-img">
            <div class="my-details">
                <img class="fx" data-animate="fadeInLeft" alt="" src="{{ asset('mypicture/foto/gue.jpg') }}">
                <h4 class="bold main-color my-name fx" data-animate="slideInDown">Mallombasi Mattawang</h4>
                <ul class="list alt list-bookmark cell-4">
                    <li class="fx" data-animate="slideInDown">Junior Programmer</li>
                    <li class="fx" data-animate="slideInDown" data-animation-delay="100">Jakarta, 9 juni 1991</li>
                    <li class="fx" data-animate="slideInDown" data-animation-delay="200">3 Tahun Pengalaman</li>
                </ul>
                <ul class="list alt list-bookmark cell-4">
                    <li class="fx" data-animate="slideInDown" data-animation-delay="300">Domisili Jakarta, Indonesia</li>
                    <li class="fx" data-animate="slideInDown" data-animation-delay="400">Telp. 081243324689</li>
                    <li class="fx" data-animate="slideInDown" data-animation-delay="500"><a href="#">Download my c.v</a></li>
                </ul>
            </div>
        </div>
        <div class="fx" data-animate="fadeInUp">
            <h3 class="block-head">Ringkasan Profil</h3>
            <p>
                Lahir di Jakarta 9 juni 1991, sampai kelas 5 SD saya dijakarta kemudian pindah ke makassar. Saya berkuliah di Universitas Indonesia Timu jurusan Teknik Informatika dalam jenjang strata 1. Saya pernah bekerja di CV. Marega kernel network yang sekarang bernama elia mercure teknologi selama setahun sebagai Junior Programmer dan CV, Tanniewa Putra selama setahun sebagai junior programmer.
                saya bertanggung jawab di bidang pengumpulan data, informasi, dan coding pada project aplikasi CV. Marega Kernel Network dan CV Tanniewa Putra. Saya pernah Menjuarai lomba desain web se kopertis di STIMIK Kharisma Makassar.
                Kelebihan saya adalah saya mampu bekerja di bawah tekanan, mampu bekerja dalam tim ataupun individu, saya sangat suka bekerja dengan banyak orang dan menyukai coding dan sendang bereksperiman dalam coding.
            </p>
        </div>
        <div class="clearfix"></div>
        <div class="fx" data-animate="fadeInUp">
            <h3 class="block-head">Pengalaman Organisasi</h3>
            <p>
            <ul class="list prim list-ok">
                <li>Anggota BEM angkatan 2010 Universitas Indonesia Timur</li>
                <li>Ketua Study Club Cores IT Makassar 2012-2013</li>
                <li>Ketua Komunitas Programmer Jalanan Indonesia 2015-sekarang</li>
                <li>Panitia BIMTEK Aplikasi E-SKP (Elektronik Sasaran Kinerja Pegawai) SETWAN Provinsi Mamuju Sulbar</li>
                <li>Panitia BIMTEK Aplikasi Keuangan Desa Kabupaten Majene Sulbar</li>
            </ul>

            </p>
        </div>
        <div class="clearfix"></div>
        <hr class="hr-style5">
        <div class="padd-top-20">
            <div class="cell-6 fx" data-animate="fadeInLeft">
                <div class="row">
                    <h3 class="block-head">Pengalaman Kerja</h3>
                    <ul class="work-exp">
                        <li class="fx" data-animate="fadeInDown">
                            <h4>Mitra Dosen di Universitas Indonesia Timur</h4>
                            <p>Sejak semester 4 menjadi asisten laboratorium ICT Fakultas Ilmu Komputer Universitas Indonesia Timur. kemudian setelah lulus tahun 2014 dipercaya menjadi mitra dosen
                            dengan membawa matakuliah Pemrograman Web, RPL, Konsep Sistem Informasi, E-Bisnis dan Metode Penelitian</p>
                        </li>
                        <li class="fx" data-animate="fadeInDown" data-animation-delay="100">
                            <h4>Junior Programmer di CV. Marega Kernel Network</h4>
                            <p>Mulai terjun di dunia pembuatan aplikasi web tahun 2013 dengan bergabung dengan perusahaan yang didirikan dosen saya CV. Marega kernel Network
                            yang sekarang bernama <a href="emercure.net">Elia Mercury Tecnologi</a>.</p>
                        </li>
                        <li class="fx" data-animate="fadeInDown" data-animation-delay="200">
                            <h4>Junior Programmer di CV. Tanniewa putra</h4>
                            <p>Desember 2014 bergabung dengan <a href="http://www.tanniewaputra.co.id">CV. Tanniewa Putra</a> yang didirikan oleh Adam Tanniewa, S.kom., SE., MM., MT selaku direktur di perusahaan tersebut.
                                adapun aplikasi yang telah saya buat saya lampirkan dibawah.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cell-1"></div>
            <div class="cell-5 fx" data-animate="fadeInRight">
                <div class="row">
                    <h3 class="block-head">Kemampuan</h3>
                    <ul class="levels">

                        <li>
                            <div class="level-name">Native PHP (OOP:MVC)</div>
                            <div class="level-out"><span></span>
                                <div class="level-in" data-percent="80"></div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="level-name">Laravel Framework</div>
                            <div class="level-out"><span></span>
                                <div class="level-in" data-percent="60"></div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="level-name">CakePhp Framework</div>
                            <div class="level-out"><span></span>
                                <div class="level-in" data-percent="50"></div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="level-name">DBMS Mysql, PostgreSql</div>
                            <div class="level-out"><span></span>
                                <div class="level-in" data-percent="70"></div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                        <li>
                            <div class="level-name">Javascript, Jquery, HTML5, CSS3, Boostrap Framework</div>
                            <div class="level-out"><span></span>
                                <div class="level-in" data-percent="70"></div>
                                <div class="clearfix"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    </div>

    <div class="sectionWrapper gry-bg">
        <div class="container">
            <h3 class="block-head">Aplikasi Yang Pernah Dibuat</h3>
            <div class="portfolio-box">
                <div id="portfolioGallery-filter" class="portfolio-filterable">
                    <div class="row">
                        <div class="white-bg skew-25">
                            <span class="skew25 left filter-by">Filter by:</span>
                            <ul id="filters">
                                <li class="active"><a href="#" class="skew25 filter" data-filter="*">All</a></li>
                                <li><a href="#" class="skew25 filter" data-filter="app">Profile Company</a></li>
                                <li><a href="#" class="skew25 filter" data-filter="card">Sistem Informasi</a></li>
                            </ul>
                        </div>
                        <div class="portfolio-items">
                            <div class="cell-3" data-filter="app">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
                                            <a href="images/portfolio/2.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/2.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">CV.Mediatron Makassar</a>
                                        <span class="project-options">2012</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-3" data-filter="app">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
                                            <a href="images/portfolio/3.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/3.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">DwiMitra Mandiri Solusindo</a>
                                        <span class="project-options">2012</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-3" data-filter="app">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
                                            <a href="images/portfolio/5.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/5.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">Desain Web Kopertis Wil. 9</a>
                                        <span class="project-options">2012</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-3" data-filter="app">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
                                            <a href="images/portfolio/4.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/4.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">OBU 5 Makassar</a>
                                        <span class="project-options">2013</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-3" data-filter="app">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
                                            <a href="images/portfolio/4.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/4.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">Bappeda Mamuju Tengah</a>
                                        <span class="project-options">2014</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-3" data-filter="app">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
                                            <a href="images/portfolio/4.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/4.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">JDIH Polewali Mandar</a>
                                        <span class="project-options">2015</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-3" data-filter="app">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
                                            <a href="images/portfolio/4.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/4.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">CV. Tanniewa Putra</a>
                                        <span class="project-options">2015</span>
                                    </div>
                                </div>
                            </div>

                            <div class="cell-3" data-filter="card">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="images/portfolio/6.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/6.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">Sistem Informasi Dosen</a>
                                        <span class="project-options">2012</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-3" data-filter="card">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="images/portfolio/6.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/6.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">SILAK OBU 5</a>
                                        <span class="project-options">2013</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-3" data-filter="card">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="images/portfolio/6.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/6.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">SIMPAS OBU 5</a>
                                        <span class="project-options">2013</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-3" data-filter="card">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="images/portfolio/6.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/6.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">Aplikasi Antrian Pas Bandara</a>
                                        <span class="project-options">2013</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-3" data-filter="card">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="images/portfolio/6.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/6.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">Aplikasi Ujian Komprehensip</a>
                                        <span class="project-options">2014</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-3" data-filter="card">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
                                            <a href="images/portfolio/6.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/6.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">Aplikasi Ujian Seminar</a>
                                        <span class="project-options">2014</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-3" data-filter="card">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
                                            <a href="images/portfolio/6.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/6.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">Aplikasi E-RAB</a>
                                        <span class="project-options">2015</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cell-3" data-filter="card">
                                <div class="portfolio-item">
                                    <div class="img-holder">
                                        <div class="img-over">
                                            <a href="portfolio-single.html" class="fx link"><b class="fa fa-link"></b></a>
                                            <a href="images/portfolio/6.jpg" class="fx zoom" title="Project Title"><b class="fa fa-search-plus"></b></a>
                                        </div>
                                        <img alt="" src="images/portfolio/6.jpg">
                                    </div>
                                    <div class="name-holder">
                                        <a href="#" class="project-name">Aplikasi IDcard Absen</a>
                                        <span class="project-options">2015</span>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>



@endsection
