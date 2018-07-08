<?php
/* @var $this HomeController */
$this->breadcrumbs = array(
    'Home',
);
?>
<div class="home container">
    <?php echo $this->renderPartial('/layouts/navbar_menu_link'); ?>
        <div class="slideshow-container">

<div class="mySlides fade">
  <!-- <div class="numbertext">1 / 3</div> -->
  <img src="image/napasangia.jpg" style="width:1500px;height:400px;">
 <!--  <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
 <!--  <div class="numbertext">2 / 3</div> -->
  <img src="image/tompanoone.jpg" style="width:1500px;height:400px;">
 <!--  <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
 <!--  <div class="numbertext">3 / 3</div> -->
  <img src="image/foto4.jpg" style="width:1500px;height:400px;">
  <!-- <div class="text">Caption Three</div> -->
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


    </div>
    <div class="columns">
        <div class="column">
            <div class="information-item">
                <p class="title is-6">Informasi terbaru</p>
                <div class="inner">
                    <img src="image/foto2.jpg" alt="">
                    <div class="detail">
                        <p>mengingatkan jumlah penduduk menyebabkan berkurangnya jumlah pekerja .</p>
                        <a href="#" title="Learn More" class="btn btn-md btn-info">Learn More</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="column">
            <div class="information-item">
                <p class="title is-6">Informasi terbaru</p>
                <div class="inner">
                    <img src="image/foto3.jpg" alt="">
                    <div class="detail">
                        <p>mengingatkan jumlah penduduk menyebabkan berkurangnya jumlah pekerja .</p>
                        <a href="#" title="Learn More" class="btn btn-md btn-info">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
