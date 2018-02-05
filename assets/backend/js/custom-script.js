/*================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.0
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================

NOTE:
------
PLACE HERE YOUR OWN JS CODES AND IF NEEDED.
WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR CUSTOM SCRIPT IT'S BETTER LIKE THIS. */
$("#submitLogin").on("click", function() {
  var dataLogin = $("#formLogin").serializeArray();
  console.log("Login Exc");
  console.log(dataLogin);
  swal({
    title: 'Sedang Di Proses',
    text: 'Harap Tunggu',
    timer: 2000,
    onOpen: () => {
      swal.showLoading()
    }
  }).then((result) => {
    if (result.dismiss === 'timer') {
      $.ajax({
          url: base_url + "/data/login",
          type: 'POST',
          dataType: 'json',
          data: dataLogin
        })
        .done(function(a) {
          if (a.status) {
            swal("Login Berhasil", a.msg, "success").then((result) => {
              location.href = base_url + "/pengguna/home";
            });
          } else {
            swal("Login Gagal", a.msg, "error")
          }
        })
        .fail(function() {
          swal("Login Gagal", "Cek Koneksi Jaringan Kamu", "error")
        })
    }
  })
});
//Date Picker
var $input = $('.datepick').pickadate({
  format: 'yyyy-mm-dd',
  formatSubmit: 'yyyy-mm-dd',
  selectYears: true,
  selectMonths: true
});
//register
$("#submitRegister").on('click', function(event) {
  event.preventDefault();
  var dataForm = $("#formRegister").serializeArray();
  console.log("Register Exc");
  console.log(dataForm);
  $.ajax({
    url: base_url+'/data/register',
    type: 'POST',
    dataType: 'json',
    data: dataForm
  })
  .done(function(a) {
    console.log("success");
    if (a.status) {
      swal("Registrasi Berhasil", a.msg, "success");
      $("#formRegister")[0].reset();
    } else {
      swal("Registrasi Gagal", a.msg, "error");
    }
  })
  .fail(function() {
    console.log("error");
    swal("Registrasi Gagal", "Cek Koneksi Jaringan Kamu", "error");
  })

});
