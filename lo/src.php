<?php
include "connect.php";
$name =$_GET['name'];
$sql = "selcect *from video where Video_Name = '%" .$name. "%' "; 
foreach($dbh->query($sql)as$row){
	echo $row['Video_Address'];
}
?>