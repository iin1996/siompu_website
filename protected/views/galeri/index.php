<?php
	$path = Yii::app()->basePath.'/uploads';
$yourImageUrl = Yii::app()->assetManager->publish($path);
?>

<?php
    echo CHtml::link('Tambahkan Gambar', array('galeri/create'));
    foreach ($data as $model){
?>
<p><?php
        echo "<h2>
".$model->nama."</h2>
";
        echo "
";
        echo CHtml::image($yourImageUrl.'/'.$model->image,'',array('width'=>300));
    ?>
</p>
<hr>
<?php
    }
?>