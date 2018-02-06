$(document).ready(function() {
  $("#donasi").on("click", function() {
    var html = [
      '<form  id="formDonasi">',
      '<h3 style="text-align:center;">Yayasan Graha Dhuafa Indonesia</h3>',
      '<div class="body">',
      '<div class="col-md-6 col-sm-6 ">',
      '<h4>DATA ANDA</h4>',
      '<div class="row">',
      '<div class="col-md-6 col-sm-6 col-xs-6">',
      '<input type="text" class="form-control" placeholder="Nama Depan Anda..." disabled>',
      '</div>',
      '<div class="col-md-6 col-sm-6 col-xs-6">',
      '<input type="text" class="form-control" placeholder="Nama Belakang Anda..." disabled>',
      '</div>',
      '</div>',
      '<input type="text" class="form-control" placeholder="Email" disabled>',
      '<input type="text" class="form-control" placeholder="No Telepon" disabled>',
      '</div>',
      '</div>',
      '<div class="col-md-6 col-sm-6 donate-amount-option">',
      '<h4>Masukkan Jumlah Uang</h4>',
      '<div class="input-group">',
      '<span class="input-group-addon" id="basic-addon1">Rp.</span>',
      '<input type="number" name="totaldonasi" class="form-control">',
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
      console.log(dataForm);
    });

  });
});
