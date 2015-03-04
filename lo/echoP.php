<?php
include "connect.php";
$name =$_GET['name']
;$sql = "select * from pinglun where Pinglun_video_name = '$name' ";
$res = $dbh->prepare($sql);
$res ->execute();
$array = $res->fetchALL(PDO::FETCH_ASSOC);
foreach ($array as $v) {
	echo $v['Pinglun_ovalue']."|" ;
}


?>