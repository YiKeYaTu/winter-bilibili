<?php
include "connect.php";
$name = $_GET['name'];
$sql = "select * from video where Video_Name = '%" .$name. "%'";
foreach($dbh->query($sql)as$row){
	echo 250."|".250."|".250."|".$row['Video_Time']."|".$row['Video_Up_Name'];
}
?>