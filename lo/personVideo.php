<?php
include "connect.php";
$upname  = $_COOKIE["Upname"];
$sql = "select * from video where Video_up_name = '$upname' ";
$res = $dbh->prepare($sql);
$res->execute();
$array = $res->fetchALL(PDO::FETCH_ASSOC);
foreach ($array as $v) {?>


                               <div class="fdiv">
								<input class="remove" id="remove" type="button" value="x">
								<a href="video.php?id=<?php echo $v['Video_id']; ?>"><!-- 这里的href写video.html?后面加上视频的ID形式为 video.html?id=xxxxx -->
										
									<img class="fimg" src="<?php echo $v['Video_pricture'] ?>" alt=""><!-- 图片 -->
									<p class="video_name"><?php  echo $v['Video_name'];?></p><!-- 这里写视频名称 -->
									<div class="num">
										<img src="image/play_num.png" alt="">
										<span><?php echo $v['Video_click_num'];?></span><!-- 视频播放数 -->
										<img src="image/danmu_num.png" alt="">
										<span><?php echo $v['Video_danmu_num'] ;?></span><!-- 视频弹幕数 -->
									</div>
									<div>
										<img src="image/upimg.png" alt="">
										<span><?php echo $tiaozhuan ; ?></span><!-- 这里写up主 -->
									</div>
									<p><?php echo $v['Video_introduce'];?></p><!-- 这里写视频简介 -->
									</a>
							</div>
<?php
}
?>
