<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.0
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title><?= $data["judul"] ?></title>

    <!-- Favicons-->
    <link rel="icon" href="<?= $this->config->item("favicon") ?>" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?= $this->config->item("favicon") ?>">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?= $this->config->item("favicon") ?>">
    <!-- For Windows Phone -->
    <?php
      foreach ($css as $key => $value) {
          printf("<link href='%s' rel='stylesheet' type='text/css'>\n", $value);
      }
    ?>

</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">
                      <li><h1 class="logo-wrapper"><a href="<?= base_url("pengguna/home") ?>" class="brand-logo darken-1"><img src="<?= $this->config->item("logo") ?>" alt="GDI User Panel"></a> <span class="logo-text">GDI User Panel</span></h1></li>
                    </ul>

                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col col s4 m4 l4">
                        <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                    </div>
                    <div class="col col s8 m8 l8">
                        <ul id="profile-dropdown" class="dropdown-content">
                            <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                            </li>
                            <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                            </li>
                            <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?= base_url("pengguna/logout") ?>"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                            </li>
                        </ul>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?= $this->session->nama ?> <i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <p class="user-roal">Administrator</p>
                    </div>
                </div>
            </li>
                <li class="bold"><a href="<?= base_url("gdiadmin/home") ?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Home</a>
                </li>
                <li class="bold"><a href="<?= base_url("gdiadmin/posting") ?>" class="waves-effect waves-cyan"><i class="mdi-action-today"></i> Posting</a>
                </li>
                <li class="bold"><a href="<?= base_url("gdiadmin/acara") ?>" class="waves-effect waves-cyan"><i class="mdi-action-book"></i> Acara</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-dns"></i> Data Anak Asuh</a>
                            <div class="collapsible-body">
                              <ul>
                                  <li><a href="<?= base_url("gdiadmin/data/dhuafa") ?>">Dhuafa</a>
                                  </li>
                                  <li><a href="<?= base_url("gdiadmin/data/yatimpiatu") ?>">Yatim Piatu</a>
                                  </li>
                              </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="bold"><a href="app-widget.html" class="waves-effect waves-cyan"><i class="mdi-content-content-cut"></i> Qurban Online</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-payment"></i>Keuangan</a>
                            <div class="collapsible-body">
                              <ul>
                                  <li><a href="<?= base_url("gdiadmin/data/laporanziswaf") ?>">Laporan ZISWAF</a>
                                  </li>
                                  <li><a href="<?= base_url("gdiadmin/data/laporanacara") ?>">Laporan Acara</a>
                                  </li>
                              </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-account-balance-wallet"></i> Ziswaf Online </a>
                            <div class="collapsible-body">
                              <ul>
                                  <li><a href="<?= base_url("gdiadmin/data/zakat") ?>">Zakat</a>
                                  </li>
                                  <li><a href="<?= base_url("gdiadmin/data/infaq") ?>">Infaq </a>
                                  </li>
                                  <li><a href="<?= base_url("gdiadmin/data/shodaqoh") ?>">Shodaqoh</a>
                                  </li>
                                  <li><a href="<?= base_url("gdiadmin/data/dhuafa") ?>">Dhuafa</a>
                                  </li>
                              </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="bold"><a href="<?= base_url("gdiadmin/data/slider") ?>" class="waves-effect waves-cyan"><i class="mdi-image-switch-camera"></i> Slider</a>
                <li class="bold"><a href="<?= base_url("gdiadmin/data/galeri") ?>" class="waves-effect waves-cyan"><i class="mdi-image-photo-library"></i> Gallery</a>
                </li>
                </li>
              </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>

            <!-- LEFT RIGHT SIDEBAR NAV-->
