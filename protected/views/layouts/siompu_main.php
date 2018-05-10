<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lib/bulma.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lib/siompu_main.css">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="page">
    <?php echo $content; ?>
</div>
<script>
    var BASE_URL = "<?php echo Yii::app()->request->baseUrl;?>";
</script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lodash.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
<?php
$curentPath = Yii::app()->urlManager->parseUrl(Yii::app()->request);
$basePath = Yii::app()->request->baseUrl;

switch ($curentPath) {
    case 'admin':
        $src = $basePath . '/js/admin.js';
        echo "<script src='$src'></script>";
        break;
}
?>
</body>
</html>
