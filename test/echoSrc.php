<?php
error_reporting(E_ALL^E_NOTICE);
include "connect.php";
$name = $_GET['name'];
$sql = "select * from video where Video_name = '$name' ";
$res = $dbh->prepare($sql);
$res ->execute();
$array = $res->fetchALL(PDO::FETCH_ASSOC);
foreach ($array as $v) {
	echo $v['Video_address'];
}
?>