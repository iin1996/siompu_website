<?php
$bgDiv = '<div class="bg-thumbnail" style="background-image: url(' .
    $desaPicPath . ')"></div>';
?>

<div class="wisata container">
    <?php echo $this->renderPartial('/layouts/navbar_menu_link'); ?>
    <div class="columns wisata-kontens">
        <?php $dataProvider->pagination->pageSize = 5; ?>

        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $dataProvider,
            'itemView' => '_wisata_item',
            'viewData' => array('bgDiv' => $bgDiv),
            'enablePagination' => true,
        )); ?>
    </div>
</div>
