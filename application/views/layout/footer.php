<?php
$site = $this->konfigurasi_model->listing();
?>

<style type="text/css" media="screen">
  .kontakwa {
    z-index: 9999;
    position: fixed;
    background-color: #cc9000;
    padding: 10px;
    bottom: 0;
    right: 120px;
    font-weight: 700;
    font-size: 40px;
    color: white;
    text-align: center;
    min-width: 80px;
    border-radius: 0 10px 0 0;
  }
  .telepon {
    z-index: 9999;
    position: fixed;
    background-color: #cc8800;
    padding: 10px;
    bottom: 0;
    right: 200px;
    min-width: 80px;
    font-weight: 700;
    font-size: 40px;
    color: white;
    text-align: center;
    /* border-top: solid 2px #e93478;
    border-left: solid 2px #e93478;
    border-right: solid 2px #e93478; */
    border-radius: 10px 0 0 0;
  }
  .kontakwa a, .telepon a {
    color: white;
    font-size: 40px;
    font-weight: 700;
    text-align: center;
  }
  .kontakwa:hover, .telepon:hover {
    background-color: pink;

  }
</style>

<?php 
$site           = $this->konfigurasi_model->listing();
$nav_profil     = $this->nav_model->nav_profil();
?>
<!-- Start Footer Section -->
<footer>
<div class="bg-footer-top">
<div class="container">
<div class="row">
    <div class="footer-top">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="footer-widgets">
                    <div class="widgets-title">
                        <h4 style="color:white;"><?php echo $site->namaweb ?></h4>
                    </div>
                
                    <!-- .widgets-content -->
                    <div class="address-box">
                        <ul class="address">
                            <li>
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span><?php echo nl2br($site->alamat) ?></span>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span><?php echo $site->telepon ?></span>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <span><?php echo $site->email ?></span>

                            </li>
                            <li>
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <span><?php echo $site->tentang ?></span>

                            </li>
                        </ul>
                    </div>
                    <!-- .address -->
                </div>
                <!-- .footer-widgets -->
            </div>
            <!-- .col-md-4 -->
            <div class="col-md-6 col-sm-6">
                <div class="footer-widgets">
                    <!-- .widgets-title -->
                    <div class="row">
                      <div class="col-sm">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0772333973014!2d109.12836921435725!3d-6.8813510950274335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9cf780320d1%3A0x3f473ff8416a3749!2sKantor%20Kelurahan%20Randugunting%20Kota%20Tegal!5e0!3m2!1sid!2sid!4v1658436135301!5m2!1sid!2sid" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                      <div class="col-sm">
                        <?php include ("kunjungan.php") ?>
                        
                      </div>
                    </div>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.2691576632627!2d109.12972504840029!3d-6.881423337702933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9cf780320d1%3A0x3f473ff8416a3749!2sKantor%20Kelurahan%20Randugunting%20Kota%20Tegal!5e0!3m2!1sid!2sid!4v1658371522203!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                </div>
                <!-- .footer-widgets -->
            </div>
            
            
        </div>
        <!-- .row -->
    </div>
    <!-- .footer-top -->
</div>
<!-- .row -->
</div>
<!-- .container -->
</div>
<!-- .bg-footer-top -->

<div class="bg-footer-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="footer-bottom">
          <div class="copyright-txt">
          <p>Copyright &copy; <?php 
          echo date('Y')?> <a href="http://iswantoprofile.my.id">Iswanto Group</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <!-- <div class="social-box">
        <p id="demo">
          <?php 
          date_default_timezone_set('Asia/Jakarta');
          echo date('Y.m.d H:i:s'); ?>
        </p> -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- .bg-footer-bottom -->

</footer>

<!-- End Footer Section -->


<!-- Start Scrolling -->

<div class="scroll-img"><i class="fa fa-angle-up" aria-hidden="true"></i></div>


<!-- End Scrolling -->


</div>


<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/lightcase.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.nstSlider.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/custom.map.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/plugins.isotope.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/custom.isotope.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/tema/assets/js/custom.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/select2/select2.full.min.js"></script>
<!-- DataTables JS -->
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables/dataTables.bootstrap4.js"></script>
<script type="text/javascript">
  $(function () {
    $("#example1").DataTable();
  });

  const sekarang = new Date();
  const tgl = sekarang.getDate();
  var namahari = ("Minggu Senin Selasa Rabu Kamis Jum'at Sabtu");
  var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
  namahari = namahari.split(" ");
  namabulan = namabulan.split(" ");
  const hari = sekarang.getDay();
  const bln = sekarang.getMonth();
  const thn = sekarang.getFullYear();
  document.getElementById("tanggal").innerHTML = namahari[hari] + ", " + tgl + " " + namabulan[bln] + " " + thn;

  // 1 detik = 1000
  window.setTimeout("waktu()", 1000);

  function waktu() {
    var tanggal = new Date();
    setTimeout("waktu()", 1000);
    document.getElementById("jam").innerHTML = tanggal.getHours() + ":" + tanggal.getMinutes() + ":" + tanggal
        .getSeconds();
}
</script>
<script>
  $(function () {
     //Initialize Select2 Elements
    $('.select2').select2()
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('.editorku'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    // bootstrap WYSIHTML5 - text editor

    $('#keterangan').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>
<script type="text/javascript">

</script>
</html>
