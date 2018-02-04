$(document).ready(function(){
  $.get(base_url+"/data/goldrate",function(d){
    var harga = 0;
    for(var i = 0; i < d.gold_rates.length; i++){
      console.log(d[i]);
      if(d.gold_rates[i].Currency == "IDR"){
        harga = parseFloat(d.gold_rates[i].Price)/28;
      }
    }
    $("#resultKurs").html("Rp."+harga.toLocaleString());
  });
});
