<section id="content">
    <div class="container">
      <div class="card-panel">
            <h4 class="header2"><?= $data["judul"] ?></h4>
            <div class="row">
              <div id="card-alert" class="card light-blue" style="<?= ($data["msg"] != null)?null:"display:none" ?>">
                <div class="card-content white-text">
                  <p>INFO : <?= ($data["msg"] != null)?$data["msg"]:null ?></p>
                </div>
              </div>
              <form class="col s12" action="" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="judul" name="judul" type="text" value="<?=  (isset($data["dataPost"]->judul))?$data["dataPost"]->judul:null ?>">
                    <label for="judul">Judul Post</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="message5" name="isi" class="materialize-textarea"><?=  (isset($data["dataPost"]->isi))?$data["dataPost"]->isi:null ?></textarea>
                  <span class="character-counter" style="float: right; font-size: 12px; height: 1px;"></span></div>
                  <div class="file-field input-field col s12">
                    <?php if (isset($data["dataPost"])): ?>
                      <img src="<?= base_url("_upload/".$data["dataPost"]->gambar) ?>" alt="">
                    <?php endif; ?>
                    <input class="file-path validate" type="text">
                    <div class="btn">
                      <span>Pilih Gambar</span>
                      <input type="file" name="gambar" placeholder="Pilih Jika Ingin Mengganti">
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                      <button class="btn cyan waves-effect waves-light right" type="submit" name="simpan">Simpan Post
                        <i class="mdi-content-send right"></i>
                      </button>
                    </div>
                </div>
              </form>
            </div>
          </div>
    </div>
</section>
