<meta charset="utf-8">
<?php 
include "connect.php";
 $Upname = $_COOKIE["Upname"];
 $num = $_POST['num'];
 $pictureone = $_FILES['picture']['tmp_name'];//图片地址临时位置
 $picturetwo = $_FILES['picture']['name'];//图片上传的名称
 $text = $_POST['text'];//名称
 $textarea = $_POST['textarea'];//介;绍
 $sections = $_POST['sections'];//视频分类
 $time = time();
 $gettime = date("Y-m-d h:i:s",$time);//上传时间
if ($num == 0) {
	$textname = $_POST['textname'];//视频地址
 	move_uploaded_file($pictureone, "picture/".$picturetwo);
 	$Afiledname = $textname;
 	$pictures = "picture/".$picturetwo;
 }else{
   $filednameone = $_FILES['filedname']['tmp_name'];//视频上传临时位置
   $filednametwo = $_FILES['filedname']['name'];//视屏上传名称
   move_uploaded_file($filednameone, "video/".$filednametwo);
   move_uploaded_file($pictureone, "picture/".$picturetwo);
   $Afiledname = "video/".$filednametwo;
   $pictures = "picture/".$picturetwo;
 }
  $sql = "INSERT INTO video
       (`Video_name`,`Video_up_name`,`Video_picture`,`Video_tag`,`Video_time`,`Video_introduce`,`Video_address`)
       VALUES ('$text','$Upname','$pictures','$sections','$gettime','$textarea','$Afiledname')";
 $res = $dbh->prepare($sql);
 if($res->execute()){
 	$isSucceed = "上传成功！";
 }else{
 	$isSucceed = "上传失败，请稍后再试 ！";
 	echo  $Upname ;
   echo $num ;
  echo $picture;//图片地址
  echo $text ;//名称
 echo  $textarea ;//介;绍
  echo $sections ;//视频分类
  echo  $Afiledname;
 echo $gettime ;//上传时间
 echo $pictures;
 }
  echo $isSucceed;
  header("refresh:30;url=user.php");   




?>