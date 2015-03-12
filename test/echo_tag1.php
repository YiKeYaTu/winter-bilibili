<?php
include "connect.php";
$tag = $_GET['tag'];
$sql = "select * from `video` where Video_tag = '$tag' ORDER BY Video_click_num desc" ;
$res = $dbh->prepare($sql);
$res->execute();
$array = $res->fetchALL(PDO::FETCH_ASSOC);
$i = 1;
foreach ($array as $v) {
$i++;
if($i>9){break;}else{
             		echo $v['Video_introduce']."|" ;
             		}
            		   } 

?>