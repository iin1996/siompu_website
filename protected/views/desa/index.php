<?php
$bgDiv = '<div class="bg-thumbnail" style="background-image: url(' .
    $desaPicPath . ')"></div>';
?>

<div class="desa container">
    <?php echo $this->renderPartial('/layouts/navbar_menu_link'); ?>
    <div class="columns desa-kontens">
        <?php $dataProvider->pagination->pageSize = 5; ?>

        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $dataProvider,
            'itemView' => '_desa_item',
            'viewData' => array('bgDiv' => $bgDiv),
            'enablePagination' => true,
        )); ?>
    </div>
</div>
