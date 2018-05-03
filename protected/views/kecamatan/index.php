<?php
$bgDiv = '<div class="bg-thumbnail" style="background-image: url(' .
    $desaPicPath . ')"></div>';
?>

<div class="kecamatan container">
    <?php echo $this->renderPartial('/layouts/navbar_menu_link'); ?>
    <div class="columns kecamatan-kontens">
        <?php $dataProvider->pagination->pageSize = 5; ?>

        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $dataProvider,
            'itemView' => '_kecamatan_item',
            'viewData' => array('bgDiv' => $bgDiv),
            'enablePagination' => true,
        )); ?>
    </div>
</div>
