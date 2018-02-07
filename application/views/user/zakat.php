<section id="content">
    <div class="container">
      <div class="col s12 m12 l12">
        <div class="section">
          <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
            <li>
              <div class="collapsible-header">Instruksi Zakat</div>
              <div class="collapsible-body">
                <p style="font-weight:bold">Penjelasan Tentang Zakat</p>
                <p>Seorang muslim yang mampu secara ekonomi wajib menyisihkan sebagian harta yang dimiliki untuk orang-orang yang berhak menerimanya baik melalui panitia zakat maupun didistribusikan sendiri. Hukum zakat adalah wajib bila mampu secara finansial dan telah mencapai batas minimal bayar zakat atau nisab. Jika seseorang memenuhi syarat berikut ini maka wajib hukumnya untuk mengeluarkan zakat</p>
                <ol type="1">
                  <li>Islam</li>
                  <li>Merdeka</li>
                  <li>Berakal dan baligh</li>
                  <li>Hartanya memenuhi nisab</li>
                </ol>
                <p>Nisab adalah batas terendah yang telah ditetapkan secara syar’i yang menjadi pedoman untuk menentukan kewajiban mengeluarkan zakat bagi yang memiliki harta dan telah mencapai ukuran tersebut. Syarat-syarat nisab adalah:</p>
                <ol type="1">
                  <li>Harta yang akan dizakati di luar kebutuhan yang harus dipenuhi seseorang</li>
                  <li>Harta yang akan dizakati telah berjalan selama 1 tahun (haul)</li>
                </ol>
                <p>Misalnya: nisab tercapai pada bulan Muharram, lalu bulan Rajab pada tahun itu ternyata hartanya berkurang dari nisabnya, maka terhapuslah perhitungan nisabnya. Kemudian pada bulan Ramadhan tahun itu, hartanya bertambah hingga mencapai nisab, maka dimulai lagi perhitungan pertama dari bulan Ramadhan tersebut. Demikian seterusnya sampai mencapai 1 tahun sempurna, lalu dikeluarkannya zakatnya.</p>
              </div>
            </li>
            <li>
              <div class="collapsible-header">Zakat Fitrah</div>
              <div class="collapsible-body">
                <p>Zakat Fitrah ialah zakat diri yang diwajibkan atas diri setiap individu lelaki dan perempuan muslim yang berkemampuan dengan syarat-syarat yang ditetapkan. Kata Fitrah yang ada merujuk pada keadaan manusia saat baru diciptakan sehingga dengan mengeluarkan zakat ini manusia dengan izin Allah akan kembali fitrah.</p>
                <p>Zakat Fitrah per orang = 3,5 liter x harga beras di pasaran per liter. <b>Contoh:</b> Harga beras di pasar rata-rata Rp10.000,- per liter, maka zakat fitrah yang harus dibayar per orang sebesar Rp35.000,-. Kalau menghitung dari segi berat, maka Zakat Fitrah per orang = 2,7 kg x harga beras di pasaran per kilogram.</p>

                <div class="card-panel">
                  <p style="font-weight:bold">Zakat Fitrah Online</p>
                  <form action="" method="post" id="formZafit">
                  <div class="col s6">
                    <p style="color:green;font-weight:bold;text-align:center;">Data Harga Beras Dari https://ews.kemendag.go.id/</p>
                    <div class="input-field col s12">
                      <input id="harga_beras" disabled="true" class="validate" placeholder="Harga Beras" type="text">
                      <label for="harga_beras" class="active">Harga Beras Nasional</label>

                    </div>
                    <div class="input-field col s12">
                      <input id="total_zakat" disabled="true" name="total_zakat" class="validate" placeholder="Zakat Yang Di Bayarkan" type="text">
                      <label for="total_zakat" class="active">Zakat Yang Harus Di Bayarkan</label>
                    </div>
                    <p style="text-align:center"><button id="submitZafit" type="button" class="waves-effect waves-light  btn">Bayarkan Zakat</button></p>
                  </div>
                </form>
                </div>
                <div class="card-panel">
                  <p style="font-weight:bold">Jejak Zakat Fitrah</p>
                  <p>Perihal Ijab Kabul Zakat amil akan menghubungi anda setelah verifikasi pembayaran selesai</p>
                  <table id="zafit" class="responsive-table display dataTable">
                    <thead>
                      <th>No</th>
                      <th>Total Zakat</th>
                      <th>Bukti Pembayaran</th>
                      <th>Tanggal Zakat</th>
                      <th>Status Bayar</th>
                      <th>Status Ijab Kabul</th>
                      <th>Nama Amil</th>
                    </thead>
                    <tbody>
                      <?php $i = 1; foreach ($data["zafit"]->result() as $key => $value): ?>
                        <td><?= $i++ ?></td>
                        <td>Rp. <?= number_format($value->total_zakat) ?></td>
                        <td><?= ($value->bukti == 0)?"<a href='".base_url("pengguna/zakat/uploadbukti/".$value->id_zakat)."' class='waves-effect waves-light  btn'>Upload Bukti</a>":"Sudah Upload " ?></td>
                        <td><?= date("d-m-Y H:i:s",strtotime($value->tanggal_zakat)) ?></td>
                        <td><?= ($value->status_bayar == 0)?"Belum Sah":"Sah" ?></td>
                        <td><?= ($value->status_ijab == 0)?"Belum Sah":"Sah" ?></td>
                        <td><?= ($value->id_admin == 0)?"Tidak Ada":"Ada" ?></td>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </li>
            <li>
              <div class="collapsible-header ">Zakat Profesi</div>
              <div class="collapsible-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </li>
            <li>
              <div class="collapsible-header ">Zakat Harta Kekayaan</div>
              <div class="collapsible-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
</section>
