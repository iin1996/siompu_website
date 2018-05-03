<?php
$bgDiv = '<div class="bg-thumbnail" style="background-image: url(' .
    $desaPicPath . ')"></div>';
?>

<div class="desa-view container">
    <?php echo $this->renderPartial('/layouts/navbar_menu_link'); ?>
    <div class="desa-view-content">
        <?php echo $bgDiv; ?>
        <div class="detail-sec">
            <div class="detail-sec">
            <p class="text-mute">
                <p class="title is-3">
                    <?php echo $model->nama_desa ?>
                </p>
                <p class="text-mute">
                    <strong>Nama Kepala Desa :</strong> <?php echo $model->nama_kepdes ?>
                </p>
                <p class="text-mute">
                    <strong>Luas Wilayah :</strong> <?php echo $model->luas_wilayah?>
                </p>

                <div class="content">
                    <p class="title is-5">Daftar Dusun</p>
                    <?php echo $this->renderPartial('_tabel_dusun', array('dusuns' => $model->dusuns)) ?>
                </div>
                <div class="content">
                    <p class="title is-5">Daftar Potensi Desa</p>
                    <?php echo $this->renderPartial('_tabel_potensi', array('potensiDesas' => $model->potensiDesas)) ?>
                </div>
    
            </div>
        </div>
    </div>
</div>