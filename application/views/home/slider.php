
<section class="bg-slider-option"></section>
<div class="slider-option slider-two">
<div class="carousel">
<!-- Indicators -->
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
<?php $i=1; foreach($slider as $slider): ?>
<div class="item <?php if($i==1) { echo 'active'; } ?>">
    <div class="slider-item">
        <img src="<?php echo base_url('assets/upload/image/'.$slider->gambar); ?>" alt="bg-slider-2">
        <div class="slider-content-area">
            <div class="container text-center">
            <!-- <img src="<?php echo $this->website->logo() ?>" alt="logo" class="img-responsive img-responsive center-block" style="width: 120px;" /> -->
            <!-- <img src="<?php echo $this->website->icon(); ?>" alt="<?php echo $this->website->namaweb(); ?>" class="img-responsive img-responsive center-block" style="max-width: 200px; height: auto;"> -->
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