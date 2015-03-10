<?php
setcookie("Upname","",time()-3600);
setcookie("Uppicture","",time()-3600);
setcookie("Upuser","",time()-3600);
header("refresh:5;url=zhuye.php");
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>登出</title>
  <script type="text/javascript">
    html{
      height:100%;
    }
  </script>
</head>
<body>
  <div style="width:700px;height:140px;margin:0 auto;border:1px solid #000;margin-top:20%;">
    <p style="font-size:12px;text-align:center;margin-top:40px;">登出成功</p>
    <a style="color:#659B28;font-size:12px;text-align:center;display:block;" href="zhuye.php">如果你的浏览器没有反应请点击这里</a>
  </div>
</body>
</html>