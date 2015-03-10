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
 	$s = "登陆成功";
	setcookie("Upname",$text,time()+3600);
    setcookie("Uppicture",$picture,time()+3600);
    setcookie("Upuser",$userzhuanghao,time()+3600);
}else{
 	$s = "登陆失败";
}
if($s == "登陆成功"){
    header("refresh:5;url=zhuye.php");
    $a = "zhuye.php";
  }else{
    header("refresh:5;url=login.html");
    $a = "login.html";
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
    <p style="font-size:12px;text-align:center;margin-top:40px;"><?php echo $s ?></p>
    <a style="color:#659B28;font-size:12px;text-align:center;display:block;" href="<?php echo $a ?>">如果你的浏览器没有反应请点击这里</a>
  </div>
  <script type="text/javascript">
    var height = window.document.body.offsetHeight;
    document.getElementsByTagName('div')[0].style.marginTop = (height - 140)/2;
  </script>
</body>
</html>