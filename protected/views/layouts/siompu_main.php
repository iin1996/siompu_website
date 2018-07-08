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
                <p class="text-mute">Jln Air Molono Kecamatan Siompu Barat</p>
            </div>
            <div class="item">
                <p class="title is-6">Telp</p>
                <p class="text-mute">+6285643296738</p>
            </div>
            <div class="item">
                <p class="title is-6">Email</p>
                <p class="text-mute">SiompuBaratk@gmail.com</p>
            </div>
        </div>
        <div class="detail-web-sec">
            <div class="top-sec">
                <div class="content">
                    <p class="title is-6">Tentang</p>
                    <p class="text-mute">
                        Isi situs ini bersifat informatif dan bukan merupakan pernyataan resmi dari Pemerintah Kabupaten Buton Kecamatan Siompu Barat. Apabila terdapat perbedaan antara data pada situs ini dengan data resmi dari Pemerintah Kabupaten Buton Kecamatan Siompu Barat, maka yang menjadi acuan adalah data resmi dari Pemerintah Kabupaten Buton Kecamatan Siompu Barat.
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
