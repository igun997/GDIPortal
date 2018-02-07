<section id="content">
    <div class="container">
      <div class="card-panel">
        <h4 class="header2">Upload Bukti Pembayaran</h4>
        <div class="row">
          <div id="card-alert" class="card light-blue" style="<?= ($data["msg"] != null)?null:"display:none" ?>">
            <div class="card-content white-text">
              <p>INFO : <?= ($data["msg"] != null)?$data["msg"]:null ?></p>
            </div>
          </div>
          <form class="col s12" action="" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="input-field col s12">
                <i class="mdi-editor-attach-money prefix"></i>
                <input id="zakat" disabled="true" value="Rp. <?= number_format($data["datazakat"]->total_zakat) ?>" type="text">
                <label for="zakat">Total Zakat</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="mdi-editor-merge-type prefix"></i>
                <input id="jenis_zakat" value="<?= str_replace("_"," ",strtoupper($data["datazakat"]->jenis_zakat)) ?>" disabled="true" type="text">
                <label for="jenis_zakat">Jenis Zakat</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="mdi-notification-event-available prefix"></i>
                <input id="tanggal_zakat" value="<?= date("d-m-Y H:i:s",strtotime($data["datazakat"]->tanggal_zakat)) ?>"  disabled="true" type="text">
                <label for="tanggal_zakat">Tanggal Zakat</label>
              </div>
            </div>
            <div class="row">
              <div class="file-field input-field col s12">
                <input class="file-path validate" type="text">
                <div class="btn">
                  <span>Pilih Bukti Pembayaran</span>
                  <input type="file" name="bukti">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Upload Bukti Pembayaran
                    <i class="mdi-content-send right"></i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>
