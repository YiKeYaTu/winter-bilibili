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
   	  $isSucceed = "注册成功!";
     }else{
   	  $isSucceed = "注册失败!";
     }
}
if($isSucceed == "注册成功!"){
    header("refresh:5;url=login.html");
    $a = "login.html";
  }else{
    header("refresh:5;url=registration.html");
    $a = "registration.html";
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>登入</title>
</head>
<body>
 <div style="width:700px;height:140px;margin:0 auto;border:1px solid #000;">
    <p style="font-size:12px;text-align:center;margin-top:40px;"><?php echo $isSucceed ?></p>
    <a style="color:#659B28;font-size:12px;text-align:center;display:block;" href="<?php echo $a ?>">如果你的浏览器没有反应请点击这里</a>
  </div>
  <script type="text/javascript">
    var height = window.document.body.offsetHeight;
    document.getElementsByTagName('div')[0].style.marginTop = (height - 140)/2;
  </script>
</body>
</html>