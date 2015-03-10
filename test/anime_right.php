<meta chatset="utf-8">
<?php 
			 include "connect.php";
			 $sql = "select * from `video` where Video_tag = '动画' order by Video_click_num DESC";
			 $res = $dbh->prepare($sql);
             $res->execute();
             $array = $res->fetchALL(PDO::FETCH_ASSOC);
             $i = 0 ;
              foreach ($array as $v) { ?>
                <?php  $i++;  ?>
                <?php if ($i>6) {break;}else {?>
        	    <a href="video.php?id=<?php echo $v['Video_id'];?>"><!-- href写video.html?id=564还是一样这里的564是视频的ID你自己写下面所有的都是一样没有那么多就自己删除一下 -->
				<div style="margin-top:10px;">
					<div class="li"><?php echo $i ?></div>
					<p><?php echo $v['Video_name']; ?></p>
				</div>
			</a>
			  <?php } ?>
              <?php
              }
              ?>