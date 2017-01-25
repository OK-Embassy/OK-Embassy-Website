<?php
if($_GET["market"] == "cad-ok"){
$url = file_get_contents('https://api.cryptonator.com/api/ticker/cad-ok');
$start = explode('"price":"', $url);
$end = explode('","volume"', $start[1]);
$resword = trim($end[0]);
echo $resword;
} 
else if($_GET["market"] == "ok-cad"){
$url = file_get_contents('https://api.cryptonator.com/api/ticker/ok-cad');
$start = explode('"price":"', $url);
$end = explode('","volume"', $start[1]);
$resword = trim($end[0]);
echo $resword;
}
else if($_GET["market"] == "usd-ok"){
$url = file_get_contents('https://api.cryptonator.com/api/ticker/usd-ok');
$start = explode('"price":"', $url);
$end = explode('","volume"', $start[1]);
$resword = trim($end[0]);
echo $resword;
} 
else if($_GET["market"] == "ok-usd"){
$url = file_get_contents('https://api.cryptonator.com/api/ticker/ok-usd');
$start = explode('"price":"', $url);
$end = explode('","volume"', $start[1]);
$resword = trim($end[0]);
echo $resword;
}
else if($_GET["market"] == "eur-ok"){
$url = file_get_contents('https://api.cryptonator.com/api/ticker/eur-ok');
$start = explode('"price":"', $url);
$end = explode('","volume"', $start[1]);
$resword = trim($end[0]);
echo $resword;
} 
else if($_GET["market"] == "ok-eur"){
$url = file_get_contents('https://api.cryptonator.com/api/ticker/ok-eur');
$start = explode('"price":"', $url);
$end = explode('","volume"', $start[1]);
$resword = trim($end[0]);
echo $resword;
}
?>