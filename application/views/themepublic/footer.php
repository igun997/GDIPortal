</div>
<!-- Site Footer -->
<div class="site-footer parallax parallax3" style="background-image:url(http://placehold.it/1280x800&amp;text=IMAGE+PLACEHOLDER)">
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-sm-4">
              <div class="widget footer_widget">
                  <h4 class="widgettitle">About Born to Give</h4>
                    <p><img src="images/logo.png" alt=""></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                    <ul class="social-icons-rounded social-icons-colored">
                        <li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li class="vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
          <div class="col-md-4 col-sm-4">
              <div class="widget footer_widget widget_links">
                  <h4 class="widgettitle">Blogroll</h4>
                    <ul>
                      <li><a href="#">Become a volunteer</a></li>
                      <li><a href="#">Our mission</a></li>
                      <li><a href="#">Success stories</a></li>
                      <li><a href="#">Meet our team</a></li>
                    </ul>
                </div>
            </div>
          <div class="col-md-4 col-sm-4">
              <div class="widget footer_widget">
                  <h4 class="widgettitle">We are on Twitter</h4>
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
                  <p>&copy; 2016 Born to Give. All Rights Reserved</p>
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
