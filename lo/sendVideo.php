<?php
 include "connect.php";
 $Upname = $_COOKIE["Upname"];
 $num = $_POST['num'];
 $time = $_POST['time'];//上传时间
 $textname = $_POST['textname'];//视频地址
 $filedname = $_POST['filedname'];//视频上传
 $picture = $_POST['picture'];//图片地址
 $text = $_POST['text'];//名称
 $textarea = $_POST['textarea'];//介绍
 $sections = $_POST['sections'];//视频分类
 if ($num == 0) {
 	move_uploaded_file($picutre, "picture/".$Videopicture.".jpg");
 	$Afiledname = $filedname;
 	$pictures = "picture/".$Videopicture.".jpg";
 }else{
   move_uploaded_file($filedname,"video/".$Videofilename.".flv");
   move_uploaded_file($picutre, "picture/".$Videopicture.".jpg");
   $Afiledname = "video/".$Videofilename.".flv";
   $pictures = "picture/".$Videopicture.".jpg";
 }
 $sql = "INSERT INTO video
       (`Video_Name`,`Video_Up_Name`,`Video_Picture`,`Video_Classification`,`Video_Time`,`Video_Introduction`,`Video_Address`)
       VALUES ('$text','$Upname','$pictures','$sections','$time','textarea','Afiledname')";
 $res = $dbh->prepare($sql);
 if($res->execute()){
 	$isSucceed = "上传成功！";
 }else{
 	$isSucceed = "上传失败，请稍后再试 ！";
 } 
  echo $isSucceed;
  header("refresh:3;url=user.php");     
?>