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
<footer class="footer is-main-footer">
    <div class="container">
        <div class="contact-sec">
            <div class="item">
                <p class="title is-6">Alamat</p>
                <p class="text-mute">Jl gito gati sleman km 10</p>
            </div>
            <div class="item">
                <p class="title is-6">Telp</p>
                <p class="text-mute">+6285643296738</p>
            </div>
            <div class="item">
                <p class="title is-6">Email</p>
                <p class="text-mute">Jangkrik@mail.com</p>
            </div>
        </div>
        <div class="detail-web-sec">
            <div class="top-sec">
                <div class="content">
                    <p class="title is-6">Tentang</p>
                    <p class="text-mute">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="bot-sec">
                Kecamatan siompu ©2018
            </div>
        </div>
    </div>
</footer>

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
