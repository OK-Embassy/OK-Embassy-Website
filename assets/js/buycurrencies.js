function dropdownChange() {
    if (document.getElementById("currency").value == "1"){
        document.onload = refresh_1000ok();
$(document).ready(function () {
  $("#currencies").on("change",function(){
	var CAD = $("#currencies").val();
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
      document.getElementById('currencies').value = price;
    });
  });
});

setInterval(refresh_1000ok, 30000);

function refresh_1000ok() {
  $.getJSON('price.php?market=ok-cad', function (data) {
      var p = data * 100 * 1.07;
      var price = p.toFixed(2);
      document.getElementById('1000OK').innerHTML = price + " CAD";
    });
   }
  }
    else if (document.getElementById("currency").value == "2"){
        document.onload = refresh_1000ok();
$(document).ready(function () {
  $("#currencies").on("change",function(){
	var EUR = $("#currencies").val();
    $.getJSON('price.php?market=eur-ok', function (data) {
      var p = data * 1.07 * EUR;
      var price = p.toFixed(8);
      document.getElementById('OK').value = price;
    });
  });
});

$(document).ready(function () {
  $("#OK").on("change",function(){
	var EUR = $("#OK").val();
    $.getJSON('price.php?market=ok-eur', function (data) {
      var p = data * 1.07 * EUR;
      var price = p.toFixed(2);
      document.getElementById('currencies').value = price;
    });
  });
});

setInterval(refresh_1000ok, 30000);

function refresh_1000ok() {
  $.getJSON('price.php?market=ok-eur', function (data) {
      var p = data * 100 * 1.07;
      var price = p.toFixed(2);
      document.getElementById('1000OK').innerHTML = price + " EUR";
    });
   }
  }
    else if (document.getElementById("currency").value == "3"){
        document.onload = refresh_1000ok();
$(document).ready(function () {
  $("#currencies").on("change",function(){
	var USD = $("#currencies").val();
    $.getJSON('price.php?market=usd-ok', function (data) {
      var p = data * 1.07 * USD;
      var price = p.toFixed(8);
      document.getElementById('OK').value = price;
    });
  });
});

$(document).ready(function () {
  $("#OK").on("change",function(){
	var USD = $("#OK").val();
    $.getJSON('price.php?market=ok-usd', function (data) {
      var p = data * 1.07 * USD;
      var price = p.toFixed(2);
      document.getElementById('currencies').value = price;
    });
  });
});

setInterval(refresh_1000ok, 30000);

function refresh_1000ok() {
  $.getJSON('price.php?market=ok-usd', function (data) {
      var p = data * 100 * 1.07;
      var price = p.toFixed(2);
      document.getElementById('1000OK').innerHTML = price + " USD";
    });
   }
  }
 }