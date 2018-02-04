<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?= $data["judul"] ?></title>
<link rel="shortcut icon" href="<?= $this->config->item("favicon") ?>">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<!-- CSS
  ================================================== -->
  <?php
    foreach ($css as $key => $value) {
        printf("<link href='%s' rel='stylesheet' type='text/css'>\n", $value);
    }
  ?>
</head>
<body class="home">
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body">
	<!-- Site Header Wrapper -->
    <div class="site-header-wrapper">
        <!-- Site Header -->
        <header class="site-header">
            <div class="container">
                <div class="site-logo">
                    <a href="index.html" class="default-logo"><img src="<?= $this->config->item("logo") ?>" alt="Logo"></a>
                    <a href="index.html" class="default-retina-logo"><img src="<?= $this->config->item("logo") ?>" alt="Logo" width="199" height="30"></a>
                    <a href="index.html" class="sticky-logo"><img src="<?= $this->config->item("logoSticky") ?>" alt="Logo"></a>
                    <a href="index.html" class="sticky-retina-logo"><img src="<?= $this->config->item("logoSticky") ?>" alt="Logo" width="199" height="30"></a>
                </div>
             	<a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <div class="header-info-col"><i class="fa fa-phone"></i> <?= $this->config->item("telepon") ?></div>
                <ul class="sf-menu dd-menu pull-right" role="menu">
                    <li>
                      <a href="<?= base_url() ?>">Gapura</a>
                    </li>
                    <li><a href="#">Tentang YGDI</a>
                    	<ul>
                        <li><a href="#">Selayang Pandang</a></li>
                        <li><a href="#">Sejarah</a></li>
                        <li><a href="#">Visi & Misi</a></li>
                        <li><a href="#">Manajemen</a></li>
                        <li><a href="#">Filosofi Logo</a></li>
                    		<li><a href="#">Legal Formal</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Layanan</a>
                    	<ul>
                    		<li><a href="#">ZISWAF Online</a></li>
                    		<li><a href="#">Kalkulator Zakat</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Acara</a>
                    	<ul>
                    		<li><a href="#">Daftar Acara</a></li>
                    		<li><a href="#">Laporan Acara</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Galeri Kegiatan</a>
                    </li>
                    <li><a href="#">Informasi</a>
                        <ul>
                            <li><a href="#">Berita Kegiatan</a></li>
                            <li><a href="#">Formulir Volunteer / Relawan</a></li>
                        </ul>
                    </li>
              	</ul>
            </div>
        </header>
    </div>
    <!-- Hero Area -->
    <div class="hero-area">
    <!-- Start Hero Slider -->
    <div class="flexslider heroflex hero-slider" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes">
      <ul class="slides">
        <?php foreach ($data["galeri"] as $key => $value): ?>
        <li class="parallax" style="background-image:url(<?= base_url("_upload/".$value->img) ?>)">
          <div class="flex-caption">
            <div class="container">
              <div class="flex-caption-table">
                <div class="flex-caption-cell">
                  <div class="flex-caption-text">
                    <h2><?= $value->judul ?></h2>
                    <?= $value->deskripsi ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
        </ul>
    </div>
    <!-- End Hero Slider -->
  </div>


    <div class="featured-links row">
    	<a href="#" class="featured-link col-md-4 col-sm-4">
        	<span>Lihat Acara Kami</span>
        	<strong>Lihat Sekarang</strong>
        </a>
    	<a href="#" class="featured-link col-md-4 col-sm-4">
        	<span>Ingin Menjadi Relawan ?</span>
        	<strong>Gabung Sekarang</strong>
        </a>
    	<a href="#" class="featured-link col-md-4 col-sm-4">
        	<span>Lihat Laporan Acara Kami</span>
        	<strong>Lihat Sekarang</strong>
        </a>
    </div>
    <!-- Main Content -->
    <div id="main-container">
