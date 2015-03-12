<?php
include "connect.php";
$id = $_GET['id'];
$sql = "select * from video where Video_id = '$id' ";
foreach($dbh->query($sql)as$row){
	echo $row['Video_name'];
}



?>