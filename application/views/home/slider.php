
<section class="bg-slider-option"></section>
<div class="slider-option slider-two">
<div class="carousel">
<!-- Indicators -->
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
<?php $i=1; foreach($slider as $slider): ?>
<div class="item <?php if($i==1) { echo 'active'; } ?>">
    <div class="slider-item">
       
        <div class="slider-content-area">
            <div class="container text-center">
                <!-- <div class="row"> -->
                    <!-- <div class="col-md-6"></div> -->
                    <!-- .col-md-6 -->
                    <!-- <div class="col-md-6"> -->
                        <div class="slider-content">
                       
                            <h3>Selamat Datang</h3>
                            <br>
                            <h3><?php echo $site->namaweb ?></h3>
                            
                            <!-- <h2><?php echo $slider->judul_galeri ?></h2> -->
                            <!-- <p><?php echo strip_tags($slider->isi) ?></p> -->
                            <!-- .slider-btn -->
                        </div>
                        <!-- .carousel-caption -->
                    <!-- </div> -->
                    <!-- .col-md-6 -->
                <!-- </div> -->
                <!-- .row -->
            </div>
            <!-- .container -->
        </div>
    </div>
</div>
<!-- .items -->
<?php $i++; endforeach; ?>
</div>

<!-- .carosoul-inner -->
<!-- .slider-option -->
</section>
<!-- End Slider Section -->