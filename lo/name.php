<?php
include "connect.php";
$id =$_GET['id'];
$sql = "select * form barrage where Barrage_id = '%" .$id. "%'";
$res = $dbh->prepare($sql);
$res ->excute();
echo $res['Barrage_name'];

?>