<?php
include "connect.php";
$name = $_GET['name'];
$sql = "DELETE FROM video where Video_name = '$name' ";
$res = $dbh->prepare($sql);
$res->execute();



?>