$(document).ready(function() {
  console.log("Zakat Log");
  $.ajax({
    url: base_url+'/data/berasrate',
    type: 'GET',
    dataType: 'json'
  })
  .done(function(a) {
    if(a.status){
      var harga_beras = 0;
      console.log(a.data[0][0]);
      console.log(a.data[0][1]);
      harga_beras = a.data[0][1];
      var filtered = harga_beras.split('.').join("");
      $("#total_zakat").attr("value",(parseFloat(filtered)*2.7).toFixed(0));
      $("#harga_beras").attr("value",a.data[0][1]);
    }else{
      swal("Error Terjadi","Sepertinya Server Kami Sedang Ada Masalah","error");
    }
  })
  .fail(function() {
    swal("Error Terjadi","Periksa Koneksi Jaringan Anda","error");
  });
  $("#submitZafit").on('click', function(event) {
    event.preventDefault();
    var total_zakat = $("#total_zakat").val();
    console.log("Total Zakat = "+total_zakat);
    $.ajax({
      url: base_url+'/data/zakatkan',
      type: 'POST',
      dataType: 'json',
      data: {total_zakat: total_zakat,jenis_zakat:"zakat_fitri"}
    })
    .done(function(a) {
      if(a.status){

      }else{
        swal("Error Terjadi","Terjadi Kesalah di Server Kami","error");
      }
    })
    .fail(function() {
      swal("Error Terjadi","Periksa Koneksi Internet Anda","error");
    });

  });
});
