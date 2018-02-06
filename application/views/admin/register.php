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
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <?php
    foreach ($css as $key => $value) {
        printf("<link href='%s' rel='stylesheet' type='text/css' media='screen,projection'>\n", $value);
    }
  ?>
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col m12 z-depth-4 card-panel">
      <form class="login-form" id="formRegister">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Halaman Pendaftaran</h4>
            <p class="center">Formulir Daftar Menjadi Donatur</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-face-unlock prefix"></i>
            <input id="nama" name="nama" type="text">
            <label for="nama" class="center-align">Nama Lengkap</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-notification-event-available prefix"></i>
            <input id="tanggal_lhr" class="datepick" name="tanggal_lhr" type="text">
            <label for="tanggal_lhr" class="center-align">Tanggal Lahir</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-maps-local-phone prefix"></i>
            <input id="nomor_tlp" name="nomor_tlp" type="tel">
            <label for="nomor_tlp" class="center-align">Nomor Telepon</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-location-city prefix"></i>
            <input id="kota" name="kota" type="text">
            <label for="kota" class="center-align">Kota</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-home prefix"></i>
            <textarea id="alamat" class="materialize-textarea" name="alamat"></textarea>
            <label for="alamat" class="center-align">Alamat Lengkap</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-editor-insert-link prefix"></i>
            <input id="facebook_ig" name="facebook_ig" type="text">
            <label for="facebook_ig" class="center-align">Link Facebook / IG</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-school prefix"></i>
            <input id="pendidikan_terakhir" name="pendidikan_terakhir" type="text">
            <label for="pendidikan_terakhir" class="center-align">Pendidikan Terakhir</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-group-work prefix"></i>
            <input id="tempat_bekerja" name="tempat_bekerja" type="text">
            <label for="tempat_bekerja" class="center-align">Tempat Bekerja</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-hardware-headset-mic prefix"></i>
            <input id="pekerjaan" name="pekerjaan" type="text">
            <label for="pekerjaan" class="center-align">Pekerjaan</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" name="username" type="email">
            <label for="username" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password_1">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password" name="password_2">
            <label for="password-again">Ulangi Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="button" id="submitRegister" class="btn waves-effect waves-light col s12">Daftar Sekarang</button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Saya sudah memiliki akun ?  <a href="<?= base_url("pengguna/login") ?>">Masuk</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

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
