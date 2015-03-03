<?php
include "connect.php";
$user = $_POST['user'];
$password = $_POST['password'];
$sql = "select * from `register` where register_id = '%" .$user. "%' "; 
foreach($dbh->query($sql)as$row){
	$text = $row['register_text'];  
    $pass = $row['register_password'];
}                        
 if ($password == $pass){
	setcookie("Upname","$text",time()+3600);
}else{
	echo "你输入的用户名或密码错误!";
	header("refresh:5;url=login.html");
}
?>