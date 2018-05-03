<?php
$bgDiv = '<div class="bg-thumbnail" style="background-image: url(' .
    $desaPicPath . ')"></div>';
?>

<div class="kecamatan-view container">
    <?php echo $this->renderPartial('/layouts/navbar_menu_link'); ?>
    <div class="kecamatan-view-content">
        <?php echo $bgDiv; ?>
        <div class="detail-sec">
            <div class="detail-sec">
                <p class="title is-3">
                    <?php echo $model->nama_kecamatan ?>
                </p>
                <p class="text-mute">
                    <strong>Visi misi :</strong> <?php echo $model->visi_misi ?>
                </p>
                <p class="text-mute">
                    <strong>Total penduduk :</strong> <?php echo $model->total_penduduk ?>
                </p>
                <div class="content">
                    <p class="title is-5">Daftar Desa</p>
                    <?php echo $this->renderPartial('_tabel_desa', array('desas' => $model->desas)) ?>
                </div>
                <div class="content">
                    <p class="title is-5">Sejarah</p>
                    <blockquote><?php echo $model->sejarah ?></blockquote>
                </div>
            </div>
        </div>
    </div>
</div>