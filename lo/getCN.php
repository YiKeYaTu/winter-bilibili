<?php
include "connect.php";
$name =$_GET['name'];
$sql = "select * from video where Video_name = '$name' ";
$res = $dbh->prepare($sql);
$res->execute(); 
$array = $res->fetchALL(PDO::FETCH_ASSOC);
foreach ($array as $v) {
$Video = $v['Video_click_num'];
}

$Video_name = $Video + 1 ;
$sqlone = "UPDATE video SET Video_click_num = '$Video_name' where Video_name = '$name' ";
$resone = $dbh->prepare($sqlone);
$resone->execute(); 



?>