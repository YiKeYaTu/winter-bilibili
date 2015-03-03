<?php
include "connect.php";
$name = $_GET['name'];//视屏名称
$textValue = $_GET['neirong'];//弹幕内容
$Top = $_GET['otop']//弹幕位置
$Video_time = $_GET['otime'];//弹幕在视屏中的时间
$Time = $_GET['dtime'];//外部时间
$sql = "INSERT INTO barrage
       (`Barrage_name`,`Barrage_textValue`,`Barrage_Top`,`Barrage_Video_time`,`Barrage_Time`)
        VALUES ('$name','$textValue','$Top','$Video_time','$Time')";
$res = $dbh->prepare($sql);
$res ->excute();
?>