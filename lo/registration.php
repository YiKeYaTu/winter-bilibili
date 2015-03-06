<meta charset="utf-8">
<?php
include "connect.php";
$user = $_POST['user'];
$password = $_POST['password'];
$username = $_POST['text'];
$sql = "SELECT * FROM `register` WHERE register_user = '$user' or register_user_name = '$username'";
$res = $dbh->query($sql);
$num = $res->rowCount();
if($num > 0){
	echo "账户或昵称已经存在!";
}else{
	$sql = "INSERT INTO register
	    (`register_user`,`register_password`,`register_user_name`)
      VALUES ('$user','$password','$username')";
      $res = $dbh->prepare($sql);
       if($res->execute()){
   	  $isSucceed = "注册成功";
     }else{
   	  $isSucceed = "注册失败";
     }
   echo $isSucceed; 
}







?>