                <?php
			    include "connect.php";
			    $sql = "select * from `video` where Video_tag = '电影' ORDER BY Video_time desc";
			    $res = $dbh->prepare($sql);
                $res->execute();
                $array = $res->fetchALL(PDO::FETCH_ASSOC);
                foreach ($array as $v) {?>
				<div class="video_1">
					<div class="item_1">
						<a href="video.html?id=<?php echo$v['Video_id']; ?>"><!-- 这里的href这样写video.html?id=465这里的465是视频的ID你来写 -->
							<img class="fengmian_1" src="<?php echo $v['Video_picture'];?>" alt=""><!--此处图片为上传时的图片-->
						</a>
						<a href="video.html?id=<?php echo$v['Video_id']; ?>"><!-- 这里的href这样写video.html?id=465这里的465是视频的ID你来写 -->
							<p><?php echo $v['Video_name'];?></p><!--视屏名称-->
						</a>
						<img src="image/play_num.png" alt="">
						<span><?php echo $v['Video_click_num']; ?></span><!--播放数-->
						<img src="image/danmu_num.png" alt="">
						<span><?php echo $v['Video_pinglun_num']; ?></span><!--评论数-->
						<img src="image/upimg.png" alt="">
						<span><?php echo $v['Video_up_name'];?></span><!--Up主-->
						<p class="tag_1"><?php echo $v['Video_introduce']; ?></p> <!-- 视频简介-->
					</div>
				</div>
				<?php
		        }
		        ?>