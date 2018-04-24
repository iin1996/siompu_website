<?php
$desaPicPath = Yii::app()->baseUrl . '/image/desa.jpg';
$bgDiv = '<div class="bg-thumbnail" style="background-image: url(' .
    $desaPicPath . ')"></div>';
$this->breadcrumbs = array(
    'Kecamatan',
);
?>
<div class="kecamatan">
    <?php echo $this->renderPartial('/layouts/navbar_menu_link'); ?>
    <div class="columns kecamatan-kontens">
        <?php foreach ($dataProvider->getData(true) as $value): ?>
            <div class="column is-4 kecamatan-item">
                <div class="inner">
                    <?php echo $bgDiv; ?>

                    <div class="detail-sec">
                        <p class="title is-5">
                            <?php
                            echo CHtml::link($value->nama_kecamatan,
                                $this->createAbsoluteUrl('/kecamatan/' . $value->id), array('class' => 'is-default-link'));
                            ?>
                        </p>
                        <p class="text-mute">
                            <?php echo $value->visi_misi ?>
                        </p>
                        <p class="text-mute">
                            <?php echo $value->total_penduduk ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>