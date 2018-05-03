<div class="column is-4 kecamatan-item">
    <div class="inner">
        <?php echo $bgDiv; ?>

        <div class="detail-sec">
            <p class="title is-5">
                <?php
                echo CHtml::link($data->nama_kecamatan,
                    $this->createAbsoluteUrl('/kecamatan/' . $data->id), array('class' => 'is-default-link'));
                ?>
            </p>
            <p class="text-mute">
                <?php echo $data->visi_misi ?>
            </p>
            <p class="text-mute">
                <?php echo $data->total_penduduk ?>
            </p>
        </div>
    </div>
</div>