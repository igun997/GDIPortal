<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Global Site Config
$obj =& get_instance();
$obj->load->database();
$obj->load->helper("url");
$obj->load->model("galeri");
$galeri = $obj->galeri->find();
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
$config["logoSticky"] = base_url("assets/images/sticky-logo.PNG");
$config["fb"] = "";
$config["twitter"] = "";
$config["google"] = "";
$config["youtube"] = "";
$config["vimeo"] = "";
$config["instagram"] = "";
$config["galeri"] = $galeri;
