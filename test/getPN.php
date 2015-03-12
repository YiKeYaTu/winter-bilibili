<?php

include "connect.php";
$name = $_GET['name'];
$number = $_GET['number'];
$sql = "UPDATE video SET Video_pinglun_num = '$number' where Video_name = '$name' "; 
$res = $dbh->prepare($sql);
$res->execute();


?>