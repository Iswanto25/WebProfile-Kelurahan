
<?php 
$site                       = $this->konfigurasi_model->listing(); 
$site_nav                   = $this->konfigurasi_model->listing();
$nav_profil                 = $this->nav_model->nav_profil();
$nav_lembaga                = $this->nav_model->nav_lembaga();
$nav_download               = $this->nav_model->nav_download();
$nav_berita                 = $this->nav_model->nav_berita();
$nav_agenda                 = $this->nav_model->nav_agenda();
$nav_layanan                = $this->nav_model->nav_layanan();
?>
<!-- Start Menu -->
<div class="bg-main-menu menu-scroll">
<div class="container" style="color:white;">
<!-- <div class="row"> -->
<div class="main-menu" style="margin:auto auto;">
<nav class="navbar navbar-expand-lg navbar-light" role="navigation">
    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <div class="pull-right">
                        <ul class="social-icon-rounded">
                            <li><a href="<?php echo $site->facebook ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $site->instagram ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $site->twitter ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> -->
                    <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo $this->website->logo() ?>" alt="logo" class="img-responsive" style="max-height: 60px; width: auto;" /></a>
                </div>
            <div class=" collapse navbar-collapse" id="navbarSupportedContent">
                
                    <ul class="nav navbar-nav">
                        <!-- home -->
                        <li><a href="<?php echo base_url() ?>"class="">BERANDA</a></li>

                        <!-- PROFIL -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFIL<span class="caret"></span></a>
                            <ul class="dropdown-menu sub-menu">
                                <?php foreach($nav_profil as $nav_profil) { ?>
                                <li class="sub-active"><a href="<?php echo base_url('berita/profil/'.$nav_profil->slug_berita) ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $nav_profil->judul_berita ?></a></li>
                                <?php } ?> 
                            </ul>
                        </li>

                        <!-- Lembaga -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LEMBAGA<span class="caret"></span></a>
                            <ul class="dropdown-menu sub-menu">
                                <?php foreach ($nav_lembaga as $nav_lembaga) { ?>
                                <li class="sub-active"><a href="<?php echo base_url('berita/layanan/'.$nav_lembaga->slug_berita) ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $nav_lembaga->judul_berita ?></a></li>
                                <?php  } ?>
                            </ul>
                        </li>

                        <!-- LAYANAN -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LAYANAN KELURAHAN<span class="caret"></span></a>
                            <ul class="dropdown-menu sub-menu">
                                <?php foreach($nav_layanan as $nav_layanan) { ?>
                                <li class="sub-active"><a href="<?php echo base_url('berita/layanan/'.$nav_layanan->slug_berita) ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $nav_layanan->judul_berita ?></a></li>
                                <?php } ?> 
                            </ul>
                        </li>

                        <!-- berita -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BERITA <span class="caret"></span></a>
                            <ul class="dropdown-menu sub-menu">
                                <?php foreach($nav_berita as $nav_berita) { ?>
                                <li class="sub-active"><a href="<?php echo base_url('berita/kategori/'.$nav_berita->slug_kategori) ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $nav_berita->nama_kategori ?></a></li>
                                <?php } ?>
                                <li class="sub-active"><a href="<?php echo base_url('berita') ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Indeks Berita</a></li>                   
                            </ul>
                        </li>

                        <!-- galeri -->
                        <li>
                            <a href="<?php echo base_url('galeri'); ?>">GALERI</a>
                        <li>
                            <a href="<?php echo base_url('agenda') ?>">Agenda</a>
                        </li>
                    </ul>
                    <div class="menu-left-option">
                    </div>
                    <!-- .header-search-box -->
                </div>
                
                </div>
                <!-- <div class="pull-right">
                        <ul class="social-icon-rounded">
                            <li><a href="<?php echo $site->facebook ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $site->instagram ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $site->twitter ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div> -->
                
                <!-- .navbar-collapse -->
            </nav>
            </div>
<!-- .main-menu -->
</div>
<!-- .row -->
</div>
<!-- .container -->
</div>
<!-- .bg-main-menu -->
</header>

