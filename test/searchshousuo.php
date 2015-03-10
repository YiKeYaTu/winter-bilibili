<?php
include "connect.php";
$text = $_POST['text'];
$sql = "select * from `video` where Video_name like '%" .$text. "%'  ORDER BY Video_time desc";
$res = $dbh->prepare($sql);
$res->execute();
$array = $res->fetchALL(PDO::FETCH_ASSOC);
foreach ($array as $v) {?>
    <div class="video">
        <div class="left">
            <a href="video.php?id=<?php echo$v['Video_id']; ?>">
                <img src="<?php echo $v['Video_picture'];?>" alt="">
            </a>
        </div>
        <div class="right">
            <div>
                <a class="title" href="video.php?id=<?php echo$v['Video_id']; ?>">
                    <span class="b">></span>
                    <span><?php echo $v['Video_tag']; ?></span>
                </a>
                <a class="video_title" href="video.php?id=<?php echo$v['Video_id']; ?>"><?php echo $v['Video_name'];?></a>
            </div>
            <div class="num">
                <img class="mm" src="image/upimg.png" alt="">
                <span><?php echo $v['Video_up_name'];?></span>
                <img src="image/play_num.png" alt="">
							<span>
								<?php echo $v['Video_click_num']; ?>
							</span>
                <img src="image/danmu_num.png" alt="">
							<span>
								 <?php echo $v['Video_danmu_num'];?>
							</span>
                <img src="image/shouchang.png" alt="">
							<span>
								<?php echo $v['Video_pinglun_num']; ?>
							</span>

                <img src="image/time.png" alt="">
							<span>
								<?php echo $v['Video_time']; ?>
							</span>
            </div>
            <div class="tag">
                <span><?php echo $v['Video_introduce']; ?></span>
            </div>
        </div>
    </div>
<?php
}
?>
