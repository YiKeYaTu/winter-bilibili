<?php
include "connect.php";
$name = $_GET['name'];
$sql = "select * from video where Video_name = '$name' ";
foreach($dbh->query($sql)as$row){
	echo $row['Video_time'];
}

?>