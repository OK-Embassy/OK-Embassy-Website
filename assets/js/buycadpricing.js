document.onload = refresh_1000ok();
$(document).ready(function () {
  $("#CAD").on("change",function(){
	var CAD = $("#CAD").val();
    $.getJSON('price.php?market=cad-ok', function (data) {
      var p = data * 1.07 * CAD;
      var price = p.toFixed(8);
      document.getElementById('OK').value = price;
    });
  });
});

$(document).ready(function () {
  $("#OK").on("change",function(){
	var CAD = $("#OK").val();
    $.getJSON('price.php?market=ok-cad', function (data) {
      var p = data * 1.07 * CAD;
      var price = p.toFixed(2);
      document.getElementById('CAD').value = price;
    });
  });
});

setInterval(refresh_1000ok, 30000);

function refresh_1000ok() {
  $.getJSON('price.php?market=ok-cad', function (data) {
      var p = data * 1000 * 1.07;
      var price = p.toFixed(2);
      document.getElementById('1000OK').innerHTML = price + " CAD";
    });
}