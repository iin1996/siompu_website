<?php
/* @var $this HomeController */
$this->breadcrumbs = array(
    'Home',
);
?>
<div class="home">
    <!--    navbar-->
    <nav class="navbar is-transparent">
        <div class="navbar-brand">
            <div class="navbar-item-wrp">
                <a class="navbar-item" href="https://bulma.io">
                    <img src="image/logo.png">
                </a>
                <div class="text-wrp">
                    <p class="title is-3">Kecamatan <strong>Siompu</strong></p>
                    <p class="text-mute">Kabupaten buton, Sulawesi tenggara</p>
                </div>
            </div>
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="bd-tw-button button">
								<span class="icon">
									<i class="fa fa-twitter"></i>
								</span>
                                <span>
									Tweet
								</span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button is-primary" href="https://github.com/jgthms/bulma/archive/0.5.1.zip">
								<span class="icon">
									<i class="fa fa-download"></i>
								</span>
                                <span>Download</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--    menu link-->
    <div class="menu-link">
        <ul class="menu-list">
            <li>home</li>
            <li>
                <div class="dropdown is-hoverable">
                    <div class="dropdown-trigger">
                        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                            <span>profil kecamatan</span>
                            <span class="icon is-small">
                                <i class="fa fa-angle-down"></i>
                            </span>
                        </button>
                    </div>
                    <div class="dropdown-menu">
                        <div class="dropdown-content">
                            <div class="dropdown-item">
                                <ul class="menu-list">
                                    <li><a href="">visi misi</a></li>
                                    <li><a href="">sejarah siompu barat</a></li>
                                    <li><a href="">kependudukan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown is-hoverable">
                    <div class="dropdown-trigger">
                        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                            <span>profil desa</span>
                            <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                        <div class="dropdown-content">
                            <div class="dropdown-item">
                                <ul class="menu-list">
                                    <li><a href="">Desa satu</a></li>
                                    <li><a href="">desa dua</a></li>
                                    <li><a href="">desa tiga</a></li>
                                    <li><a href="">desa empat</a></li>
                                    <li><a href="">desa lima</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown is-hoverable">
                    <div class="dropdown-trigger">
                        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                            <span>potensi desa</span>
                            <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                        <div class="dropdown-content">
                            <div class="dropdown-item">
                                <ul class="menu-list">
                                    <li><a href="">pakaian</a></li>
                                    <li><a href="">tenunan</a></li>
                                    <li><a href="">adat istiadat</a></li>
                                    <li><a href="">makanan khas</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown is-hoverable">
                    <div class="dropdown-trigger">
                        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                            <span>wisata</span>
                            <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                        <div class="dropdown-content">
                            <div class="dropdown-item">
                                <ul class="menu-list">
                                    <li><a href="">permandian</a></li>
                                    <li><a href="">pantai</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown is-hoverable">
                    <div class="dropdown-trigger">
                        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                            <span>galeri</span>
                            <span class="icon is-small">
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                        <div class="dropdown-content">
                            <div class="dropdown-item">
                                <ul class="menu-list">
                                    <li><a href="">foto</a></li>
                                    <li><a href="">video</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>kotak saran</li>
        </ul>
    </div>
    <div class="slide"></div>
    <div class="columns">
        <div class="column">
            <div class="information-item">
                <p class="title is-6">Informasi terbaru</p>
                <div class="inner">
                    <img src="http://loremflickr.com/100/100" alt="">
                    <div class="detail">
                        <p>mengingatkan jumlah penduduk menyebabkan berkurangnya jumlah pekerja .</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="information-item">
                <p class="title is-6">Informasi terbaru</p>
                <div class="inner">
                    <img src="http://loremflickr.com/100/100" alt="">
                    <div class="detail">
                        <p>mengingatkan jumlah penduduk menyebabkan berkurangnya jumlah pekerja .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
