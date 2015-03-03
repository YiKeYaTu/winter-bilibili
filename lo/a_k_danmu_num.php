<?php
include "connect.php";
$sqlOne = "select * from `video` where Video_Classification = 'Cartoon' and ORDER BY Video_Click_a_quantity desc";
$resOne = $dbh->prepare($sqlOne);
$resOne->execute(); 
$Cartoon = "";
$arrayOne = $resOne->fetchALL(PDO::FETCH_ASSOC);
for($i=1;$i<=8;$i++) {
	$Cartoon = $arrayOne['Video_Danmu_Num']."|".$Cartoon;
}
//Cartoon 部分数据
$sqlTwo = "select * from `video` where Video_Classification = 'TimeSeries' and ORDER BY Video_Click_a_quantity desc";
$resTwo = $dbh->prepare($sqlTwo);
$resTwo->execute();
$TimeSeries = "";
$arrayTwo = $resTwo->fetchALL(PDO::FETCH_ASSOC);
for($i=1;$i<=8;$i++){
	$TimeSeries =$arrayTwo['Video_Danmu_Num']."|".$TimeSeries;
}
//番剧部分数据
$sqlThree = "select * from `video` where Video_Classification = 'Music' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resThree = $dbh->prepare($sqlThree);
$resThree->execute();
$Music = "";
$arrayThree = $resThree->fetchALL(PDO::FETCH_ASSOC);
for ($i=1;$i<=8;$i++) { 
	$Music =$numThree['Video_Danmu_Num']."|".$Music;
}
//音乐部分数据  
$sqlFour = "select * from `video` where Video_Classification = 'Dance' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resFour = $dbh->prepare($sqlFour);
$resFour->execute();
$Dance = "";
$arrayFour = $resFour->fetchALL(PDO::FETCH_ASSOC);
for ($i=1;$i<=8;$i++) { 
	$Dance = $arrayFour['Video_Danmu_Num']."|".$Dance;
}
//舞蹈部分
$sqlFive = "select * from `video` where Video_Classification = 'Game' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resFive = $dbh->prepare($sqlFive);
$resFive->execute();
$Game = "";
$arrayFive = $resFive->fetchALL(PDO::FETCH_ASSOC);
for ($i=1;$i<=8;$i++) { 
	$Game = $arrayFive['Video_Danmu_Num']."|".$Game;
}
//游戏部分
$sqlSix = "select * from `video` where Video_Classification = 'Science' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resSix = $dbh->prepare($sqlSix);
$resSix->execute();
$Science = "";
$arraySix = $resSix->fetchALL(PDO::FETCH_ASSOC);
for ($i=1;$i<=8;$i++) { 
	$Science = $arraySix['Video_Danmu_Num']."|".$Science;
}
//科学技术部分
$sqlSeven = "select * from `video` where Video_Classification = 'Entertainment' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resSeven = $dbh->prepare($sqlSeven);
$resSeven->execute();
$Entertainment = "";
$arraySeven = $resSeven->fetchALL(PDO::FETCH_ASSOC);
for ($i=1;$i<=8;$i++) { 
	$Entertainment = $arraySeven['Video_Danmu_Num']."|".$Entertainment;
}
//娱乐部分
$sqlEight = "select * from `video` where Video_Classification = 'Hentai' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resEight = $dbh->prepare($sqlEight);
$resEight->execute();
$Hentai = "";
$arrayEight = $resEight->fetchALL(PDO::FETCH_ASSOC);
for ($i=1;$i<=8;$i++) { 
	$Hentai = $arrayEight['Video_Danmu_Num']."|".$Hentai;
}
//鬼畜部分
$sqlNine = "select * from `video` where Video_Classification = 'Moive' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resNine = $dbh->prepare($sqlNine);
$resNine->execute();
$Moive = "";
$arrayNine = $resNine->fetchALL(PDO::FETCH_ASSOC);
for ($i=1;$i<=8;$i++) { 
	$Moive = $arrayNine['Video_Danmu_Num']."|".$Moive;
}
//电影部分
$sqlTen = "select * from `video` where Video_Classification = 'TVplay' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resTen = $dbh->prepare($sqlTen);
$resTen->execute();
$TVplay = "";
$arrayTen = $resTen->fetchALL(PDO::FETCH_ASSOC);
for ($i=1;$i<=8;$i++) { 
	$TVplay = $arrayTen['Video_Danmu_Num']."|".$TVplay;
}
//电视剧部分
$DanmunumOutput = $Cartoon."-".$TimeSeries."-".$Music."-".$Dance."-".$Game."-".$Science."-".$Entertainment."-".$Hentai."-".$Moive."-".$TVplay;
echo $DanmunumOutput;
?>