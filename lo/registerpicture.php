<?php
include "connect.php";
$Upname = $_COOKIE["Upname"];
$picture = $_POST['picture'];
 move_uploaded_file($picture,"talk/".$Talkpicture.".jpg");
$Apicture = "talk/".$Talkpicture.".jpg";
$sql = "UPDATE register SET register_picture = '%" .$Apicture. "%' WHERE register_text = '%" .$Upname. "%'"
$res = $dbh->prepare($sql);
if ($res->execute();) {
   $issucceed = "修改成功！";         	
}else{
	$isscceed = "修改失败！";
}       
echo $isscceed;
header("refresh:3;url=user.html");


?>