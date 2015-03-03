<?php
include "connect.php";
$sqlOne = "select * from `video` where Video_Classification = 'Cartoon' and ORDER BY Video_Click_a_quantity desc";//Classification为视频分类
$resOne = $dbh->prepare($sqlOne);
$resOne->execute(); 
$arrayOne = $resOne->fetchALL(PDO::FETCH_ASSOC);
$Cartoon = "";
for($i=1;$i<=1;$i++) {
	$Cartoon = $arrayOne['Video_Picture'];
}
//Cartoon 部分数据
$sqlTwo = "select * from `video` where Video_Classification = 'TimeSeries' and ORDER BY Video_Click_a_quantity desc";
$resTwo = $dbh->prepare($sqlTwo);
$resTwo->execute();
$arrayTwo = $resTwo->fetchALL(PDO::FETCH_ASSOC);
$TimeSeries = "";
for($i=1;$i<=1;$i++){
	$TimeSeries = $arrayTwo['Video_Picture'];
}
//番剧部分数据
$sqlThree = "select * from `video` where Video_Classification = 'Music' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resThree = $dbh->prepare($sqlThree);
$resThree->execute();
$arrayThree = $resThree->fetchALL(PDO::FETCH_ASSOC);
$Music = "";
for ($i=1;$i<=1;$i++) { 
	$Music = $arrayThree['Video_Picture'];
}
//音乐部分数据  
$sqlFour = "select * from `video` where Video_Classification = 'Dance' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resFour = $dbh->prepare($sqlFour);
$resFour->execute();
$arrayFour = $resFour->fetchALL(PDO::FETCH_ASSOC);
$Dance = "";
for ($i=1;$i<=1;$i++) { 
	$Dance = $arrayFour['Video_Picture'];
}
//舞蹈部分
$sqlFive = "select * from `video` where Video_Classification = 'Game' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resFive = $dbh->prepare($sqlFive);
$resFive->execute();
$arrayFive = $resFive->fetchALL(PDO::FETCH_ASSOC);
$Game = "";
for ($i=1;$i<=1;$i++) { 
	$Game = $arrayFive['Video_Picture'];
}
//游戏部分
$sqlSix = "select * from `video` where Video_Classification = 'Science' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resSix = $dbh->prepare($sqlSix);
$resSix->execute();
$arraySix = $resSix->fetchALL(PDO::FETCH_ASSOC);
$Science = "";
for ($i=1;$i<=1;$i++) { 
	$Science = $arraySix['Video_Picture'];
}
//科学技术部分
$sqlSeven = "select * from `video` where Video_Classification = 'Entertainment' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resSeven = $dbh->prepare($sqlSeven);
$resSeven->execute();
$arraySeven = $resSeven->fetchALL(PDO::FETCH_ASSOC);
$Entertainment = "";
for ($i=1;$i<=1;$i++) { 
	$Entertainment = $arraySeven['Video_Picture'];
}
//娱乐部分
$sqlEight = "select * from `video` where Video_Classification = 'Hentai' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resEight = $dbh->prepare($sqlEight);
$resEight->execute();
$arrayEight = $resEight->fetchALL(PDO::FETCH_ASSOC);
$Hentai = "";
for ($i=1;$i<=1;$i++) { 
	$Hentai = $arrayEight['Video_Picture'];
}
//鬼畜部分
$sqlNine = "select * from `video` where Video_Classification = 'Moive' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resNine = $dbh->prepare($sqlNine);
$resNine->execute();
$arrayNine = $resNine->fetchALL(PDO::FETCH_ASSOC);
$Moive = "";
for ($i=1;$i<=1;$i++) { 
	$Moive = $arrayNine['Video_Picture'];
}
//电影部分
$sqlTen = "select * from `video` where Video_Classification = 'TVplay' and ORDER BY ORDER BY Video_Click_a_quantity desc";
$resTen = $dbh->prepare($sqlTen);
$resTen->execute();
$arrayTen = $resTen->fetchALL(PDO::FETCH_ASSOC);
$TVplay = "";
for ($i=1;$i<=1;$i++) { 
	$TVplay = $arrayTen['Video_Picture'];
}
//电视剧部分
$RightImgOutput = $Cartoon."-".$TimeSeries."-".$Music."-".$Dance."-".$Game."-".$Science."-".$Entertainment."-".$Hentai."-".$Moive."-".$TVplay;
echo $RightImgOutput;
?>