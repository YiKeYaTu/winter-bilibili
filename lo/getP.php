<?php
include "connect.php";
$ovalue =$_GET['ovalue'];
$name = $_GET['name'];
$sql = "INSERT INTO pinglun
(`Pinglun_ovalue`,`Pinglun_video_name`) VALUES ('$ovalue','$name')";
$res =$dbh->prepare($sql);
$res->execute();
?>