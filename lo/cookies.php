<meta charset="utf-8">
<?php
if (isset($_COOKIE["Upname"])) {
	$tiaozhuan = $_COOKIE["Upname"];
    $picture = $_COOKIE["Uppicture"];
    $userzhuanghao = $_COOKIE["Upuser"];
}else{
	$tiaozhuan = "";
	$picture = "";
	$userzhuanghao = "";
}
?> 