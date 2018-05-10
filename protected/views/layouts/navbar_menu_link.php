<?php
$logoPath = Yii::app()->baseUrl . '/image/logo.png';
?>
<nav class="navbar is-transparent">
    <div class="navbar-brand">
        <div class="navbar-item-wrp">
            <a class="navbar-item" href="https://bulma.io">
                <?php echo "<img src='" . $logoPath . "''>"; ?>
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
        <li>
            <?php
            echo CHtml::link('Home',
                $this->createAbsoluteUrl('/'), array('class' => 'is-default-link in-dark'));
            ?>
        </li>
        <li>
            <?php
            echo CHtml::link('Kecamatan',
                $this->createAbsoluteUrl('kecamatan/'), array('class' => 'is-default-link in-dark'));
            ?>
        </li>
        <li>
           <?php
            echo CHtml::link('Desa',
                $this->createAbsoluteUrl('desa/'), array('class' => 'is-default-link in-dark'));
            ?>
        </li>
        
        <li>
           <?php
            echo CHtml::link('Wisata',
           $this->createAbsoluteUrl('wisata/'), array('class' => 'is-default-link in-dark'));
            ?>
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
                                <li><a href="">foto</a> </li>
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
