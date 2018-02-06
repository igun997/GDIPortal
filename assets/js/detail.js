$(document).ready(function() {
  $("#donasi").on("click", function() {
    swal({
      title: 'Sedang Di Proses',
      text: 'Harap Tunggu',
      timer: 2000,
      onOpen: () => {
        swal.showLoading()
      }
    }).then((result) => {
      var id_event = $(this).data('id');
      $.ajax({
          url: base_url + '/data/ceklogin',
          type: 'GET',
          dataType: 'json',
          data: null
        })
        .done(function(a) {
          $.post(base_url + '/data/cekevent', {
            id_event: id_event
          }, function(data, textStatus, xhr) {
            if (textStatus == "success") {
              if (data.status) {
                if (a.status) {
                  var html = [
                    '<form  id="formDonasi">',
                    '<h3 style="text-align:center;">Yayasan Graha Dhuafa Indonesia</h3>',
                    '<div class="body">',
                    '<div class="col-md-6 col-sm-6 ">',
                    '<h4>DATA ANDA</h4>',
                    '<div class="row">',
                    '<div class="col-md-6 col-sm-6 col-xs-6">',
                    '<input type="text" class="form-control" value="' + a.nama_depan + '" placeholder="Nama Depan Anda..." disabled>',
                    '</div>',
                    '<div class="col-md-6 col-sm-6 col-xs-6">',
                    '<input type="text" value="' + a.nama_belakang + '" class="form-control" placeholder="Nama Belakang Anda..." disabled>',
                    '</div>',
                    '</div>',
                    '<input type="text" class="form-control" value="' + a.username + '" placeholder="Email" disabled>',
                    '<input type="text" value="' + a.nomor_tlp + '" class="form-control" placeholder="No Telepon" disabled>',
                    '</div>',
                    '</div>',
                    '<div class="col-md-6 col-sm-6 donate-amount-option">',
                    '<h4>Masukkan Jumlah Uang</h4>',
                    '<div class="input-group">',
                    '<span class="input-group-addon" id="basic-addon1">Rp.</span>',
                    '<input type="number" name="total_donasi" class="form-control">',
                    '<input name="id_event" hidden value="' + id_event + '">',
                    '</div>',
                    '</div>',
                    '<div class="modal-footer text-align-center">',
                    '<button type="button" id="submitForm" class="btn btn-primary">Klik Untuk Donasi</button>',
                    '</div>',
                    '</form>'
                  ];
                  var dialog = bootbox.dialog({
                    title: 'Persiapan',
                    message: '<p align="center"><i class="fa fa-spin fa-spinner"></i> Loading ...</p>',
                    className: "modal70"
                  });
                  dialog.init(function() {
                    dialog.find(".modal-title").html("Formulir Donasi");
                    dialog.find(".bootbox-body").html(html.join(""));
                  });
                  dialog.find("#submitForm").on('click', function(event) {
                    event.preventDefault();
                    var dataForm = $("#formDonasi").serializeArray();
                    $.ajax({
                        url: base_url + '/data/donasikan',
                        type: 'POST',
                        dataType: 'json',
                        data: dataForm
                      })
                      .done(function(a) {
                        if (a.status) {
                          swal("Sukses", a.msg, "success");
                        } else {
                          swal("Error Terjadi", a.msg, "error");
                        }
                      })
                      .fail(function() {
                        swal("Error Terjadi", "Maaf Cek Koneksi Internet Anda", "error");

                      })
                  });
                } else {
                  swal("Error Terjadi", "Maaf Anda Belum Login", "error");
                }
              } else {
                swal("Error Terjadi", data.msg, "error");
              }
            } else {
              swal("Error Terjadi", "Maaf Cek Koneksi Internet Anda", "error");

            }

          });

        })
        .fail(function() {
          swal("Error Terjadi", "Maaf Perikasa Koneksi Internet Anda", "error");
        })
    });
  });

});
