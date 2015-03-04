<?php
include "connect.php";
$id = $_GET['id'];
$sql = "select * from video where Video_id = '$id' ";
$res = $dbh->prepare($sql);
$res ->execute();
$array = $res->fetchALL(PDO::FETCH_ASSOC);
foreach ($array as $v) {
	echo $v['Video_address'];
}




?>