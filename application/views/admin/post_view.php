<section id="content">
    <div class="container">
      <div class="card-panel">
            <h4 class="header2"><?= $data["judul"] ?></h4>
            <div class="row">
              <div class="col s12">
                <center>
                <img src="<?= base_url("_upload/".$data["detilArtikel"]->gambar) ?>" style="width:auto;height:400px" class="img-rounded" alt="">
                </center>
              </div>
              <div class="col s12" style="background-color:#F9F9F9">
                  <?= $data["detilArtikel"]->isi ?>
              </div>
            </div>
            <div class="row">
              <br>
              <div class="col s12">
                <center><a href="<?= base_url("gdiadmin/posting/") ?>" class="btn waves-effect waves-light red darken-4">Kembali</a></center>
              </div>
            </div>
      </div>
      </div>
</section>
