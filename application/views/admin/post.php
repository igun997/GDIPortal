<section id="content">
    <div class="container">
      <div class="card-panel">
        <h4 class="header2">Posting Manajer</h4>
        <div class="row">
          <div class="fixed-action-btn">
              <a class="btn-floating btn-large">
                <i class="mdi-content-add"></i>
              </a>
              <ul>
                <li><a class="btn-floating red" href="<?= base_url("gdiadmin/posting/tambah/artikel") ?>" data-toggle="tooltip" title="Tambah Artikel" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="large mdi-editor-border-color"></i></a>
                </li>
                <li><a class="btn-floating yellow darken-1" href="<?= base_url("gdiadmin/posting/tambah/halaman") ?>" data-toggle="tooltip" title="Tambah Halaman" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="large mdi-editor-border-color"></i></a>
                </li>
                <li><a class="btn-floating green" href="<?= base_url("gdiadmin/posting/tambah/berita") ?>" data-toggle="tooltip" title="Tambah Berita" style="transform: scaleY(0.4) scaleX(0.4) translateY(40px) translateX(0px); opacity: 0;"><i class="large mdi-editor-border-color"></i></a>
                </li>
              </ul>
            </div>
        </div>
        <div class="row">
          <table id="post" class="responsive-table display dataTable">
            <thead>
              <th>No</th>
              <th>Tipe Post</th>
              <th>Judul Postingan</th>
              <th>Tanggal Post</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <?php $no = 1;foreach ($data["artikel"]->result() as $key => $value): ?>
                <tr>
                <td><?= $no++ ?></td>
                <td><?= $value->tipe_post ?></td>
                <td><?= $value->judul ?></td>
                <td><?= date("Y-m-d H:i:s",strtotime($value->tanggal_buat)) ?></td>
                <td><button type="button" class="btn waves-effect waves-light red darken-4 hapus" data-id="<?= $value->id_post ?>">Hapus</button> <a href="<?= base_url("gdiadmin/posting/edit/".$value->id_post) ?>" class="btn waves-effect waves-light yellow darken-4">Edit</a> <a href="<?= base_url("gdiadmin/posting/view/".$value->id_post) ?>" class="btn waves-effect waves-light green darken-4">Lihat</a></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</section>
