</div>
<!-- Site Footer -->
<div class="site-footer parallax parallax3" style="background-image:url(<?= base_url("assets/patterns/pt14.jpg") ?>)">
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-sm-4">
              <div class="widget footer_widget">
                  <h4 class="widgettitle">Tentang YGDI</h4>
                    <p><img src="images/logo.png" alt=""></p>
                    <p>Kami adalah Yayasan Non Profit dengan visi menjadi lembaga profesional bertaraf internasional yang membangun masyarakat produktif, mandiri, dan mulia. Kami membutuhkan bantuan anda untuk kegiatan dan pembinaan Dhuafa di Indonesia</p>
                    <ul class="social-icons-rounded social-icons-colored">
                        <li class="facebook"><a href="<?= $this->config->item("fb") ?>"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="<?= $this->config->item("twitter") ?>"><i class="fa fa-twitter"></i></a></li>
                        <li class="googleplus"><a href="<?= $this->config->item("google") ?>"><i class="fa fa-google-plus"></i></a></li>
                        <li class="youtube"><a href="<?= $this->config->item("youtube") ?>"><i class="fa fa-youtube-play"></i></a></li>
                        <li class="vimeo"><a href="<?= $this->config->item("vimeo") ?>"><i class="fa fa-vimeo"></i></a></li>
                        <li class="instagram"><a href="<?= $this->config->item("instagram") ?>"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
          <div class="col-md-4 col-sm-4">
              <div class="widget footer_widget widget_links">
                  <h4 class="widgettitle">Link Tertaut</h4>
                    <ul>
                      <li><a href="#">Basis Data</a></li>
                    </ul>
                </div>
            </div>
          <div class="col-md-4 col-sm-4">
              <div class="widget footer_widget">
                  <h4 class="widgettitle">Lihat Kami Di Twitter</h4>
                    <div class="twitter-widget" data-tweets-count="2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Site Footer -->
<div class="site-footer-bottom">
  <div class="container">
      <div class="row">
          <div class="col-md-6 col-sm-6">
              <div class="copyrights-col-left">
                  <p>&copy; 2018 Graha Dhuafa Indonesia. All Rights Reserved</p>
                </div>
            </div>
          <div class="col-md-6 col-sm-6"></div>
              <div class="copyrights-col-right">
                  <ul class="footer-menu">
                      <li><a href="privacy-policy.html">Privacy policy</a></li>
                      <li><a href="payment-terms.html">Payment terms</a></li>
                      <li><a href="refund-policy.html">Refund policy</a></li>
                    </ul>
                </div>
        </div>
    </div>
</div>
<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div>

<script>
var base_url = "<?= base_url() ?>";
</script>
<?php
  foreach ($js as $key => $value) {
      printf("<script src='%s'></script>\n",$value);;
  }
?>
</body>
</html>
