<?php
include "connect.php";
$name = $GET['name'];
$sql = "select * from video where Video_name = '$name' ";
foreach($dbh->query($sql)as$row){
	echo $row['Video_danmu_num'];
}

?>