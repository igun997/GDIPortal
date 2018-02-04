<div class="content">
    <div class="lgray-bg padding-tb75">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                      <h2 class="block-title">Kami Membutuhkan Bantuan Anda</h2>
                      <div class="spacer-30"></div>
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <div class="spacer-10"></div>
                    <p>Kami adalah Yayasan Non Profit dengan visi menjadi lembaga profesional bertaraf internasional yang membangun masyarakat produktif, mandiri, dan mulia. Kami membutuhkan bantuan anda untuk kegiatan dan pembinaan Dhuafa di Indonesia</p>
                  </div>
              </div>
              <div class="carousel-wrapper">
                  <div class="row">
                      <ul class="owl-carousel carousel-fw" id="causes-slider" data-columns="4" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="2" data-items-mobile="1">
                        <?php foreach ($data["event_list"] as $key => $value): ?>
                          <li class="item">
                              <div class="grid-item cause-grid-item small-business format-standard">
                                  <div class="grid-item-inner">
                                      <a href="<?= base_url("public/detail/".$value->slug) ?>" class="media-box">
                                          <img src="<?= base_url("_upload/".$value->gambar) ?>" alt="<?= base_url("public/detail/".$value->slug) ?>">
                                      </a>
                                      <div class="grid-item-content">
                                        <?php
                                        $diffdays = $this->template->diffdays(date("Y-m-d H:i:s"),$value->selesai_donasi);
                                        $donated = $data["eventpass"]->eventdonasi(array("a.id_event"=>$value->id_event));
                                        $total = 0 ;
                                        foreach ($donated->result() as $keys => $values) {
                                          $total = $total + $values->total_donasi;
                                        }
                                        $persentasi = ($total*100)/$value->target_biaya;
                                        ?>
                                          <a class="cProgress" data-complete="<?= $persentasi ?>" data-color="4b727f" data-toggle="tooltip" data-original-title="<?= ($diffdays == 0)?"Donasi Selesai":$diffdays." Hari" ?> Lagi"><strong></strong></a>
                                          <h3 class="post-title"><a href="<?= base_url("public/detail/".$value->slug) ?>"><?= $value->judul ?></a></h3>
                                          <div class="meta-data">Terkumpul <?= "Rp. ".number_format($total); ?> / <span class="cause-target">Rp. <?= number_format($value->target_biaya) ?></span></div>
                                      </div>
                                    <a href="<?= base_url("public/detail/".$value->slug) ?>" class="btn btn-primary"><?= ($diffdays == 0)?"Lihat Acara":"Donasi Sekarang" ?></a>
                                  </div>
                              </div>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                  </div>
              </div>
          </div>
      </div>

      <div class="featured-texts row">
        <div class="featured-text col-md-3 col-sm-3">
            <span><b>Emas (gram) / IDR</b></span>
              <strong id="resultKurs">0</strong>
          </div>
        <div class="featured-text col-md-3 col-sm-3">
            <span>Total Donatur</span>
              <strong><?= number_format($data["total_donatur"]) ?></strong>
          </div>
        <div class="featured-text col-md-3 col-sm-3">
            <span>Total Dana Terkumpul</span>
              <strong>Rp. <?= number_format($data["total_donasi"]) ?></strong>
          </div>
        <div class="featured-text col-md-3 col-sm-3">
            <span>Total Relawan</span>
              <strong>0</strong>
          </div>
      </div>

      <div class="padding-tb75 position-relative">
        <div class="half-bg-right accent-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="block-title">Acara Mendatang</h2>
                      <div class="spacer-20"></div>
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

                <div class="col-md-6">
                      <div class="gallery-updates cols2 clearfix">
                          <ul>
                              <li class="format-image grid-item">
                                  <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box magnific-image"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a>
                              </li>
                              <li class="format-gallery grid-item">
                                  <div class="media-box">
                                      <div class="flexslider galleryflex" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="slide" data-pause="yes">
                                          <ul class="slides">
                                              <li class="item"><a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="popup-image"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                              <li class="item"><a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="popup-image"><img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </li>
                              <li class="format-link grid-item">
                                  <a href="http://www.google.com" target="_blank" class="media-box"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a>
                              </li>
                              <li class="format-video grid-item">
                                  <a href="https://vimeo.com/47532705" class="media-box magnific-video"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a>
                              </li>
                              <li class="grid-item format-image">
                                  <a href="http://placehold.it/800x533&amp;text=IMAGE+PLACEHOLDER" class="media-box magnific-image"> <img src="http://placehold.it/800x533&amp;text=IMAGE+PLACEHOLDER" alt=""> </a>
                              </li>
                              <li class="grid-item format-image">
                                  <a href="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" class="media-box magnific-image"> <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt=""> </a>
                              </li>
                          </ul>
                          <div class="gallery-updates-overlay">
                              <i class="icon-multiple-image"></i> Galeri Terbaru
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="partner-carousel">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <h4 class="push-top">Partner Kami</h4>
                  </div>
                  <div class="col-md-9 col-sm-9">
                      <div class="carousel-wrapper">
                          <div class="row">
                              <ul class="owl-carousel carousel-fw" id="partners-slider" data-columns="5" data-autoplay="5000" data-pagination="no" data-arrows="no" data-single-item="no" data-items-desktop="4" data-items-desktop-small="3" data-items-tablet="3" data-items-mobile="2">
                                  <li class="item"><img src="http://placehold.it/250x110&amp;text=IMAGE+PLACEHOLDER" alt=""></li>
                                  <li class="item"><img src="http://placehold.it/250x110&amp;text=IMAGE+PLACEHOLDER" alt=""></li>
                                  <li class="item"><img src="http://placehold.it/250x110&amp;text=IMAGE+PLACEHOLDER" alt=""></li>
                                  <li class="item"><img src="http://placehold.it/250x110&amp;text=IMAGE+PLACEHOLDER" alt=""></li>
                                  <li class="item"><img src="http://placehold.it/250x110&amp;text=IMAGE+PLACEHOLDER" alt=""></li>
                                  <li class="item"><img src="http://placehold.it/250x110&amp;text=IMAGE+PLACEHOLDER" alt=""></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="parallax parallax5 parallax-light text-align-center padding-tb100" style="background-image:url(http://placehold.it/1280x800&amp;text=IMAGE+PLACEHOLDER)">
        <h2>Membantu sesama adalah<br>salah satu kewajiban manusia</h2>
          <a href="#" class="parallax-icon-link"><i class="fa fa-5x fa-play-circle-o"></i></a>
      </div>

      <div class="padding-tb75 lgray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h2 class="block-title">Berita terbaru dari kami</h2>
                      <p>Berikut berita kegiatan dan berita sekitar kami yang terbaru.</p>
                  </div>

                  <div class="col-md-8 col-sm-8">
                      <div class="carousel-wrapper">
                          <div class="row">
                              <ul class="owl-carousel carousel-fw" id="news-slider" data-columns="2" data-autoplay="" data-pagination="yes" data-arrows="no" data-single-item="no" data-items-desktop="2" data-items-desktop-small="1" data-items-tablet="1" data-items-mobile="1">
                                  <li class="item">
                                      <div class="grid-item blog-grid-item format-standard">
                                          <div class="grid-item-inner">
                                              <a href="single-event.html" class="media-box">
                                                  <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                              </a>
                                              <div class="grid-item-content">
                                                  <h3 class="post-title"><a href="single-post.html">A single person can change million lives</a></h3>
                                                  <span class="meta-data">Posted on 11th Dec, 2015</span>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="item">
                                      <div class="grid-item blog-grid-item format-standard">
                                          <div class="grid-item-inner">
                                              <a href="single-event.html" class="media-box">
                                                  <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                              </a>
                                              <div class="grid-item-content">
                                                  <h3 class="post-title"><a href="single-post.html">Donate your woolens this winter</a></h3>
                                                  <span class="meta-data">Posted on 11th Dec, 2015</span>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="item">
                                      <div class="grid-item blog-grid-item format-standard">
                                          <div class="grid-item-inner">
                                              <a href="single-event.html" class="media-box">
                                                  <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                              </a>
                                              <div class="grid-item-content">
                                                  <h3 class="post-title"><a href="single-post.html">How to survive the tough path of life</a></h3>
                                                  <span class="meta-data">Posted on 08th Dec, 2015</span>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="item">
                                      <div class="grid-item blog-grid-item format-standard">
                                          <div class="grid-item-inner">
                                              <a href="single-event.html" class="media-box">
                                                  <img src="http://placehold.it/600x400&amp;text=IMAGE+PLACEHOLDER" alt="">
                                              </a>
                                              <div class="grid-item-content">
                                                  <h3 class="post-title"><a href="single-post.html">Donate your woolens this winter</a></h3>
                                                  <span class="meta-data">Posted on 11th Dec, 2015</span>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="accent-bg padding-tb20 cta-fw">
    <div class="container">
              <a href="#" class="btn btn-default btn-ghost btn-light btn-rounded pull-right">Menjadi seorang relawan</a>
              <h4>Mari kita bantu sesama kita, karena salah satu kewajiban kita adalah membantu orang yang membutuhkan, Ayo Gabung</h4>
          </div>
      </div>
  </div>
