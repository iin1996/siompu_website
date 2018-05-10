<?php
$bgDiv = '<div class="bg-thumbnail" style="background-image: url(' .
    $desaPicPath . ')"></div>';
?>

<div class="kecamatan-view container">
    <?php echo $this->renderPartial('/layouts/navbar_menu_link'); ?>
    <div class="wisata-view-content">
        <?php echo $bgDiv; ?>
        <div class="detail-sec">
            <div class="detail-sec">
                <p class="title is-3">
                    <?php echo $model->nama_wisata ?>
                </p>
            </div>
        </div>
    </div>
</div>