<?php
include "connect.php";
$name = $_GET['name'];
$Upname = $_COOKIE["Upname"];
$neirong = $_GET['neirong']
$sql = "INSERT INTO talk
(`Talk_Video_Name`,`Talk_Up_Name`,`Talk_Text`)
VALUES('$name','$Upname','$neirong')";
$res = $dbh->prepare($sql);
$res->execute();
?>