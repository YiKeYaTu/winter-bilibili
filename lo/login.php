<meta charset="utf-8">
<?php
include "connect.php";
$user = $_POST['user'];
$password = $_POST['password'];
$sql = "select * from `register` where register_user = '$user' "; 
foreach($dbh->query($sql)as$row){
	$text = $row['register_user_name'];  
    $pass = $row['register_password'];
    $picture = $row['register_picture'];
    $userzhuanghao = $row['register_user'];
}                        
 if ($password == $pass){
	setcookie("Upname",$text,time()+3600);
    setcookie("Uppicture",$picture,time()+3600);
    setcookie("Upuser",$userzhuanghao,time()+3600);
    echo "登录成功";
}else{
	echo "你输入的用户名或密码错误!";
}






?>