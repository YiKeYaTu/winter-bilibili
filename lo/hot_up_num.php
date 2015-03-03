<?php
include "connect.php";
$sql = "select * from `video` ORDER BY Video_Click_a_quantity desc";
$res = $dbh->prepare($sql);
$res->execute(); 
$array = $res->fetchALL(PDO::FETCH_ASSOC);
$Up_Name ="";
for($i=1;$i<=6;$i++){
    $Up_Name =$num['Video_Up_Name']."|".$Up_Name;
}
echo $Up_Name;
?>