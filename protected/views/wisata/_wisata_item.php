<div class="column is-4 wisata-item">
    <div class="inner">
        <?php echo $bgDiv; ?>

        <div class="detail-sec">
            <p class="title is-5">
                <?php
                echo CHtml::link($data->nama_wisata,
                    $this->createAbsoluteUrl('/wisata/' . $data->id), array('class' => 'is-default-link'));
                ?>
            </p>
        </div>
    </div>
</div>