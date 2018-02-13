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
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox"
                     width="112" height="28">
            </a>
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <!-- <a class="navbar-item" href="https://bulma.io/">
                            Home
                </a> -->
                <!-- <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link" href="/documentation/overview/start/">
                                        Docs
                            </a>
                            <div class="navbar-dropdown is-boxed">
                                        <a class="navbar-item" href="/documentation/overview/start/">
                                                    Overview
                                        </a>
                                        <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                                                    Modifiers
                                        </a>
                                        <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                                                    Columns
                                        </a>
                                        <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
                                                    Layout
                                        </a>
                                        <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
                                                    Form
                                        </a>
                                        <hr class="navbar-divider">
                                        <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
                                                    Elements
                                        </a>
                                        <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
                                                    Components
                                        </a>
                            </div>
                </div> -->
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet"
                               data-social-target="http://localhost:4000" target="_blank"
                               href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=http://localhost:4000&amp;via=jgthms">
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
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
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
            <li>profil desa</li>
            <li>potensi desa</li>
            <li>wisata</li>
            <li>galeri</li>
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
