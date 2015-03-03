<?php
include "connect.php";
$sql = "select * from `video` ORDER BY Video_Click_a_quantity desc";
$res = $dbh->prepare($sql);
$res->execute();
$array = $res->fetchALL(PDO::FETCH_ASSOC); 
$Id ="";
for($i=1;$i<=6;$i++){
    $Id =$num['Video_Id']."|".$Id;
}
echo $Id;
?>