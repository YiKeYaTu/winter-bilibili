<?php
error_reporting(E_ALL^E_NOTICE);
include "connect.php";
$ovalue = $_GET['ovalue'];//弹幕内容
$otop = $_GET['otop'];//弹幕位置
$otime = $_GET['otime'];//弹幕内部时间
$dtime = $_GET['dtime'];//弹幕外部时间
$style = $_GET['style'];
$name = $_GET['name'];
$sql = "INSERT INTO danmu
(`Danmu_ovalue`,`Danmu_otop`,`Danmu_otime`,`Danmu_dtime`,`Danmu_video_name`,`Danmu_style`)
VALUES('$ovalue','$otop','$otime','$dtime','$name','$style')";
$res = $dbh->prepare($sql);
$res->execute();
?>