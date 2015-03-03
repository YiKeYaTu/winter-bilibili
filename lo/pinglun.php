<?php
include "connect.php";
$name = $_GET['name'];
$sql = "select * from talk where Talk_Video_Name = '%" .$id. "%' ";
$res = $dbh->prepare($sql);
$res ->excute();
$array = $res->fetchALL(PDO::FETCH_ASSOC);
$seach = "http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg";
foreach ($array as $v){?>
	
<?php echo  $v['Talk_Text']."|".$seach."|".$v['Talk_Up_Name']."|"."250"."|"; ?>

<?php
}
?>