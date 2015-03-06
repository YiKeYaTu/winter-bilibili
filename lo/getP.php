<?php
include "connect.php";
$ovalue =$_GET['ovalue'];
$name = $_GET['name'];
$picture = $_GET['picture'];
$upname = $_GET['upname'];
$sql = "INSERT INTO pinglun
(`Pinglun_ovalue`,`Pinglun_video_name`,`Pinglun_up_picture`,`Pinglun_up_name`) VALUES ('$ovalue','$name','$picture','$upname')";
$res =$dbh->prepare($sql);
$res->execute();
?>