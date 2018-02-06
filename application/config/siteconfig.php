<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Global Site Config
$obj =& get_instance();
$obj->load->database();
$obj->load->helper("url");
$obj->load->model("galeri");
$galeri = $obj->galeri->find();
$config["cssuser"] = array(
  base_url("assets/backend/css/materialize.min.css"),
  base_url("assets/backend/css/style.min.css"),
  base_url("assets/backend/css/custom/custom-style.css"),
  base_url("assets/backend/js/plugins/perfect-scrollbar/perfect-scrollbar.css"),
  base_url("assets/backend/js/plugins/jvectormap/jquery-jvectormap.css"),
  base_url("assets/backend/js/plugins/chartist-js/chartist.min.css")
);
$config["jsuser"] = array(
  base_url("assets/backend/js/plugins/jquery-1.11.2.min.js"),
  base_url("assets/backend/js/materialize.min.js"),
  base_url("assets/backend/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"),
  base_url("assets/backend/js/plugins/chartist-js/chartist.min.js"),
  base_url("assets/backend/js/plugins/chartjs/chart.min.js"),
  base_url("assets/backend/js/dashboard.js"),
  base_url("assets/backend/js/plugins/sparkline/jquery.sparkline.min.js"),
  base_url("assets/backend/js/plugins/sparkline/sparkline-script.js"),
  base_url("assets/backend/js/plugins.min.js")
);
$config["css"] = array(
  base_url("assets/css/bootstrap.css"),
  base_url("assets/css/bootstrap-theme.css"),
  base_url("assets/css/style.css"),
  base_url("assets/vendor/magnific/magnific-popup.css"),
  base_url("assets/vendor/owl-carousel/css/owl.carousel.css"),
  base_url("assets/vendor/owl-carousel/css/owl.theme.css"),
  base_url("assets/css/custom.css"),
  base_url("assets/colors/color1.css")
);
$config["js"] = array(
  base_url("assets/js/jquery-2.1.3.min.js"),
  base_url("assets/js/modernizr.js"),
  base_url("assets/vendor/magnific/jquery.magnific-popup.min.js"),
  base_url("assets/js/ui-plugins.js"),
  base_url("assets/js/helper-plugins.js"),
  base_url("assets/vendor/owl-carousel/js/owl.carousel.min.js"),
  base_url("assets/js/bootstrap.js"),
  base_url("assets/vendor/bootbox/bootbox.min.js"),
  base_url("assets/vendor/flexslider/js/jquery.flexslider.js"),
  base_url("assets/js/circle-progress.js"),
  base_url("assets/js/init.js")
);
$config["telepon"] = "081214267695";
$config["favicon"] = base_url("assets/images/favicon.PNG");
$config["logo"] = base_url("assets/images/logo.PNG");
$config["logoGDI"] = base_url("assets/images/logoGDI.png");
$config["logoSticky"] = base_url("assets/images/sticky-logo.PNG");
$config["fb"] = "";
$config["twitter"] = "";
$config["google"] = "";
$config["youtube"] = "";
$config["vimeo"] = "";
$config["instagram"] = "";
$config["galeri"] = $galeri;
