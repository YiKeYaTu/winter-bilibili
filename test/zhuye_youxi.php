<?php
             include "connect.php";
             $sql = "select * from `video` where Video_tag = '游戏' ORDER BY Video_click_num desc";
             $res = $dbh->prepare($sql);
             $res->execute();
             $array = $res->fetchALL(PDO::FETCH_ASSOC);
             $i = 0 ;
             foreach ($array as $v) { ?>
             <?php  $i++;  ?>
             <?php if ($i>6) {break;}else {?>
                <?php if ($i == 1) { ?>
                            <li style="height:70px;margin-bottom:0px;">
                                <a style="height:70px;" href="video.php?id=<?php echo $v['Video_id'];?>"><!-- 这里写视频的地址 video.php?id=xx -->
                                    <div class="number"><?php echo $i; ?></div>
                                    <div class="img"></div>
                                    <p class="name"><?php echo $v['Video_name'];?></p><!-- 这里写视频名字 -->
                                    <div class="bl-bottom">
                                        <img style="margin-left:5px;"src="image/play_num.png" alt="">
                                        <span><?php echo $v['Video_click_num']; ?></span><!-- 这里写点击数量 -->
                                        <img style="margin-left:50px;" src="image/danmu_num.png" alt="">
                                        <span><?php echo $v['Video_pinglun_num']; ?></span><!-- 这里写弹幕数量 -->
                                    </div>
                                </a>
                            </li>
                            <?php
                            }else{
                            ?>
                            <li>
                                <a href="video.php?id= <?php echo $v['Video_id']; ?> "><!-- 这里写视频的地址 video.php?id=xx -->
                                    <div class="number"><?php echo $i; ?></div>
                                    <span><?php echo $v['Video_name']; ?></span><!-- 这里写视频名字 -->
                                </a>
                            </li>
                            
                          <?php
                           }
                           ?>
                         <?php
                           }
                           ?>
                           <?php
                       }
                       ?>