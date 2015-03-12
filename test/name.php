<?php 
/* Report all errors except E_NOTICE */
error_reporting(E_ALL^E_NOTICE);
$a = $_GET['id'];
if($a == 1){
	echo "video";
}
 ?>