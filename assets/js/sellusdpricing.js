document.onload = refresh_1000ok();

$(document).ready(function () {
  $("#USD").on("change",function(){
	var USD = $("#USD").val();
    $.getJSON('price.php?market=usd-ok', function (data) {
      var p = data / 1.07 * USD;
      var price = p.toFixed(8);
      document.getElementById('OK').value = price;
    });
  });
});

$(document).ready(function () {
  $("#OK").on("change",function(){
	var USD = $("#OK").val();
    $.getJSON('price.php?market=ok-usd', function (data) {
      var p = data / 1.07 * 1000;
      var price = p.toFixed(2);
      document.getElementById('USD').value = price;
    });
  });
});

setInterval(refresh_1000ok, 30000);

function refresh_1000ok() {
  $.getJSON('price.php?market=ok-usd', function (data) {
      var p = data * 1000 / 1.07;
      var price = p.toFixed(2);
      document.getElementById('1000OK').innerHTML = price + " USD";
    });
}