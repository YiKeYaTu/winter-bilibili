<?php
             include "connect.php";
             $sql = "select * from `video`  ORDER BY Video_click_num desc";
             $res = $dbh->prepare($sql);
             $res->execute();
             $array = $res->fetchALL(PDO::FETCH_ASSOC);
             $i = 1 ;
             foreach ($array as $v){
             	$i++;
             	if ($i>7) {break;}else{
             		echo $v['Video_up_name']."|" ;
             	}
             }
?>