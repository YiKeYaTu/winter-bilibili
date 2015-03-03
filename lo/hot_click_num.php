<?php
include "connect.php";
$sql = "select * from `video` ORDER BY Video_Click_a_quantity desc";
$res = $dbh->prepare($sql);
$res->execute(); 
$Click_a_quantity = "";
for($res as $num;$i=1;$i<=6;$i++){
    $Click_a_quantity = $Click_a_quantity."|".$num['Video_Click_a_quantity'];
}
echo $Click_a_quantity;




?>