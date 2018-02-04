<div class="content">
    <div class="container">
        <div class="row">
            <div id="konten" class="col-md-8 content-block">
                <h3><?= $data["judul"] ?></h3>
                <div class="post-media">
                    <img src="<?= base_url("_upload/".$data["event"]->gambar) ?>" alt="">
                </div>
                <?php
                  //Detail Data
                  $dataEvent = $this->event->eventdonasi(array("slug"=>$data["slug"]));
                  $total = 0;
                  foreach ($dataEvent->result() as $key => $value) {
                    $total = $total +  $value->total_donasi;
                  }
                  $persentasi = ($total*100)/$data["event"]->target_biaya;
                  $diffdays = $this->template->diffdays(date("Y-m-d H:i:s"),$data["event"]->selesai_donasi);
                  $diffdaysstart = $this->template->diffdays(date("Y-m-d H:i:s"),$data["event"]->mulai_donasi);
                ?>
                  <span class="label label-default">Dana Terkumpul</span>
                  <div class="progress">
                        <div style="width: 88%;" class="progress-bar progress-bar-primary" data-appear-progress-animation="<?= $persentasi ?>%" data-appear-animation-delay="100"> <span class="progress-bar-tooltip"><?= $persentasi ?>%</span> </div>
                  </div>
                  <div class="pull-left">Terkumpul <strong>Rp.<?= number_format($total) ?></strong></div>
                  <div class="pull-right">Target <strong class="accent-color">Rp. <?= number_format($data["event"]->target_biaya) ?></strong></div>
                  <div class="spacer-20"></div>
                  <div class="row">
                    <div class="col-md-5 col-sm-5">
                      <p class="lead"><?= $data["event"]->rangkuman ?></p>
                    </div>
                      <div class="col-md-7 col-sm-7">
                          <ul class="list-group">
                          <li class="list-group-item">Total Donatur<span class="badge">2</span></li>
                          <li class="list-group-item">Waktu Donasi Dimulai <span class="badge"><?= ($diffdaysstart > 0)?$diffdaysstart." Hari Lagi":"Sudah Dimulai" ?></span></li>
                          <li class="list-group-item">Waktu Donasi Berakhir <span class="badge"><?= ($diffdays > 0)?$diffdays." Hari Lagi":"Donasi Ditutup" ?> </span></li>
                        </ul>
                          <button type="button" class="btn btn-primary btn-block" id="donasi" data-id="{id}">Saya Akan Bantu</button>
                      </div>
                  </div>
                  <?= $data["event"]->deskripsi ?>
              </div>

              <!-- Sidebar -->
              <div class="col-md-4 sidebar-block">
                  <!-- Latest Events -->
                <div class="widget events-calendar-widget">
                      <h3 class="widgettitle">Acara Yang Akan Datang</h3>
                      <div class="events-calendar-widget-body">
                          <ul class="events-compact-list">
                            <?php foreach ($data["event_upcoming"] as $key => $value): ?>
                              <li class="event-list-item">
                                <span class="event-date">
                                    <span class="date"><?= date("d",strtotime($value->mulai_acara)) ?></span>
                                      <span class="month"><?= date("M",strtotime($value->mulai_acara)) ?></span>
                                      <span class="year"><?= date("Y",strtotime($value->mulai_acara)) ?></span>
                                  </span>
                                  <div class="event-list-cont">
                                    <span class="meta-data"><?= date("D",strtotime($value->mulai_acara)) ?>, <?= date("H:i:s",strtotime($value->mulai_acara)) ?></span>
                                    <h4 class="post-title"><a href="#"><?= $value->judul ?></a></h4>
                                    <p><?= $value->deskripsi ?></p>
                                  </div>
                              </li>
                            <?php endforeach; ?>
                          </ul>
                      </div>
                  </div>
                </div>
          </div>
      </div>
  </div>
