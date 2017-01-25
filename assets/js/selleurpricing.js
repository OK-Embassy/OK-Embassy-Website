document.onload = refresh_1000ok();

$(document).ready(function () {
  $("#EUR").on("change",function(){
	var EUR = $("#EUR").val();
    $.getJSON('price.php?market=eur-ok', function (data) {
      var p = data / 1.07 * EUR;
      var price = p.toFixed(8);
      document.getElementById('OK').value = price;
    });
  });
});

$(document).ready(function () {
  $("#OK").on("change",function(){
	var EUR = $("#OK").val();
    $.getJSON('price.php?market=ok-eur', function (data) {
      var p = data / 1.07 * 1000;
      var price = p.toFixed(2);
      document.getElementById('EUR').value = price;
    });
  });
});

setInterval(refresh_1000ok, 30000);

function refresh_1000ok() {
  $.getJSON('price.php?market=ok-eur', function (data) {
      var p = data * 1000 / 1.07;
      var price = p.toFixed(2);
      document.getElementById('1000OK').innerHTML = price + " EUR";
    });
}