<?php
/* @var $this HomeController */
$this->breadcrumbs = array(
    'Home',
);
?>
<div class="home container">
    <?php echo $this->renderPartial('/layouts/navbar_menu_link'); ?>
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
