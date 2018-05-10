<div class="column is-4 desa-item">
    <div class="inner">
        <?php echo $bgDiv; ?>

        <div class="detail-sec">
            <p class="title is-5">
                <?php
                echo CHtml::link($data->nama_desa,
                    $this->createAbsoluteUrl('/desa/' . $data->id), array('class' => 'is-default-link'));
                ?>
            </p>
            <p class="text-mute">
                <?php echo $data->kecamatan_id ?>
            </p>
            <p class="text-mute">
                <?php echo $data->luas_wilayah ?>
            </p>
            <p class="text-mute">
                <?php echo $data->nama_kepdes ?>
            </p>
        </div>
    </div>
</div>