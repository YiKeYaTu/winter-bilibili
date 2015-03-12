<?php
error_reporting(E_ALL^E_NOTICE);
include "connect.php";
$name = $_GET['name'];
$sql = "select * from danmu where Danmu_video_name = '$name' ";
$res = $dbh->prepare($sql);
$res ->execute();
$array = $res->fetchALL(PDO::FETCH_ASSOC);
foreach ($array as $v) {
echo $v['Danmu_ovalue']."|".$v['Danmu_otop']."|".$v['Danmu_otime']."|".$v['Danmu_dtime']."|".$v['Danmu_style']."|" ;
}
?>