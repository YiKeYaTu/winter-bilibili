<?php
include "cookies.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="http://libs.baidu.com/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="zhuye-css.css">
	<title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ 乾杯~ - bilibili</title>
</head>
<body>
	<div class="z-header">
		<div class="top_content">
			<img src="image/logo.png" alt="">
			<a href="zhuye.php">主站</a>
			<a href="">画友</a>
			<a href="">游戏中心</a>
			<a href="">直播</a>
			<a href="">手机端</a>
			<input class="btn btn-info" id="loginH" type="button" value="登陆">
			<input class="btn btn-info" id="regH" type="button" value="注册">
			<form id="ff" action="outLogin.php" method="post">
				<input id="outU" type="submit" value="登出" class="btn btn-info">
			</form>
			<a id="turnU" href="user.php"></a>
		</div>
	</div>
	<div class="bg">
		<div class="bg_content">
			<img src="http://static.hdslb.com/images/header/2014_christmas_logo.png">
		</div>
	</div>
	<div class="num">
		<div class="num_content">
			<a href="zhuye.php">首页</a>
			<a href="anime.php">动画</a>
			<a href="fanju.php">番剧</a>
			<a href="music.php">音乐</a>
			<a href="dance.php">舞蹈</a>
			<a href="game.php">游戏</a>
			<a href="sct.php">科技</a>
			<a href="fun.php">娱乐</a>
			<a href="guichu.php">鬼畜</a>
			<a href="movie.php">电影</a>
			<a href="dianshiju.php">电视剧</a>
			<a href="" class="rank">
			</a>
			<div class="search">
				<form style="float:right" action="search.php" method="post">
					<input type="text" name="text" placeholder="" class="form" />
					<input type="submit" class="submit" value="">
				</form>
			</div>
		</div>
	</div>
	<div class="center">
		<div class="center_content">
			<div class="center_top">
				<div class="topic-preview-wrapper" id="topic-preview-wrapper">
					<a style="left:0px;background:blue;" href="video1.html">弹幕测试</a>
					<a style="background:red;" href="video1.html"></a>
					<a style="background:#000;" href="video1.html"></a>
					<a style="background:#f1f1f1;" href="video1.html"></a>
					<a style="background:yellow;" href="video1.html"></a>
					<a style="background:green;" href="video1.html"></a>
				</div>
				<div class="bottom" id="bottom">
					<a style="margin-left:320px;background: #01a0d8;
" href="#"></a>
					<a href="#"></a>
					<a href="#"></a>
					<a href="#"></a>
					<a href="#"></a>
					<a href="#"></a>
				</div>
				<ul class="list" id="list">
					<li>
						<a href=""></a>
						<div>
							<div class="list-name">啦啦</div>
							<div class="list-up"><span>up主：</span><span>0</span></div>
							<div class="playnum"><span>播放数：</span><span>0</span></div>
						</div>
						<p>哈哈哈哈哈啊哈哈哈</p>
					</li>
					<li>
						<a href=""></a>
						<div>
							<div class="list-name">啦啦</div>
							<div class="list-up"><span>up主：</span><span>0</span></div>
							<div class="playnum"><span>播放数：</span><span>0</span></div>
						</div>
						<p>哈哈哈哈哈啊哈哈哈</p>
					</li>
					<li style="margin-right:0px">
						<a href=""></a>
						<div>
							<div class="list-name">啦啦</div>
							<div class="list-up"><span>up主：</span><span>0</span></div>
							<div class="playnum"><span>播放数：</span><span>0</span></div>
						</div>
						<p>哈哈哈哈哈啊哈哈哈</p>
					</li>
					<li>
						<a href=""></a>
						<div>
							<div class="list-name">啦啦</div>
							<div class="list-up"><span>up主：</span><span>0</span></div>
							<div class="playnum"><span>播放数：</span><span>0</span></div>
						</div>
						<p>哈哈哈哈哈啊哈哈哈</p>
					</li>
					<li>
						<a href=""></a>
						<div>
							<div class="list-name">啦啦</div>
							<div class="list-up"><span>up主：</span><span>0</span></div>
							<div class="playnum"><span>播放数：</span><span>0</span></div>
						</div>
						<p>哈哈哈哈哈啊哈哈哈</p>
					</li>
					<li style="margin-right:0px">
						<a href=""></a>
						<div>
							<div class="list-name">啦啦</div>
							<div class="list-up"><span>up主：</span><span>0</span></div>
							<div class="playnum"><span>播放数：</span><span>0</span></div>
						</div>
						<p>哈哈哈哈哈啊哈哈哈</p>
					</li>
				</ul>
			</div>
			<div class="left">
				<div class="a-l">
					<div class="a-l-head">
						<img style="float:left"src="image/a.png" alt="">
						<a href="">动画</a>
						<a id="a1" class="a-b" href="">有新动态</a>
						<a id="a2" class="a-b"href="">最新投稿</a>
					</div>
					<div class="a-l-center">
						<ul id="ul1">
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="a-l-footer">
						<a class="new-a"href="anime.php">查看更多></a>
					</div>
				</div>
				<div class="a-l">
					<div class="a-l-head">
						<img style="float:left"src="image/b.png" alt="">
						<a href="">番剧</a>
						<a id="a1" class="a-b" href="">有新动态</a>
						<a id="a2" class="a-b"href="">最新投稿</a>
					</div>
					<div class="a-l-center">
						<ul id="ul2">
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="a-l-footer">
						<a class="new-a"href="fanju.php">查看更多></a>
					</div>
				</div>
				<div class="a-l">
					<div class="a-l-head">
						<img style="float:left"src="image/c.png" alt="">
						<a href="">音乐</a>
						<a id="a1" class="a-b" href="">有新动态</a>
						<a id="a2" class="a-b"href="">最新投稿</a>
					</div>
					<div class="a-l-center">
						<ul id="ul3">
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="a-l-footer">
						<a class="new-a"href="music.php">查看更多></a>
					</div>
				</div>
				<div class="a-l">
					<div class="a-l-head">
						<img style="float:left"src="image/d.png" alt="">
						<a href="">舞蹈</a>
						<a id="a1" class="a-b" href="">有新动态</a>
						<a id="a2" class="a-b"href="">最新投稿</a>
					</div>
					<div class="a-l-center">
						<ul id="ul4">
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="a-l-footer">
						<a class="new-a"href="dance.php">查看更多></a>
					</div>
				</div>
				<div class="a-l"><div class="a-l-head">
						<img style="float:left"src="image/e.png" alt="">
						<a href="">游戏</a>
						<a id="a1" class="a-b" href="">有新动态</a>
						<a id="a2" class="a-b"href="">最新投稿</a>
					</div>
					<div class="a-l-center">
						<ul id="ul5">
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="a-l-footer">
						<a class="new-a"href="game.php">查看更多></a>
					</div></div>
				<div class="a-l"><div class="a-l-head">
						<img style="float:left"src="image/f.png" alt="">
						<a href="">科学·技术</a>
						<a id="a1" class="a-b" href="">有新动态</a>
						<a id="a2" class="a-b"href="">最新投稿</a>
					</div>
					<div class="a-l-center">
						<ul id="ul6">
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="a-l-footer">
						<a class="new-a"href="sct.php">查看更多></a>
					</div></div>
				<div class="a-l"><div class="a-l-head">
						<img style="float:left"src="image/g.png" alt="">
						<a href="">娱乐</a>
						<a id="a1" class="a-b" href="">有新动态</a>
						<a id="a2" class="a-b"href="">最新投稿</a>
					</div>
					<div class="a-l-center">
						<ul id="ul7">
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="a-l-footer">
						<a class="new-a"href="fun.php">查看更多></a>
					</div></div>
				<div class="a-l"><div class="a-l-head">
						<img style="float:left"src="image/h.png" alt="">
						<a href="">鬼畜</a>
						<a id="a1" class="a-b" href="">有新动态</a>
						<a id="a2" class="a-b"href="">最新投稿</a>
					</div>
					<div class="a-l-center">
						<ul id="ul8">
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="a-l-footer">
						<a class="new-a"href="guichu.php">查看更多></a>
					</div></div>
				<div class="a-l"><div class="a-l-head">
						<img style="float:left"src="image/i.png" alt="">
						<a href="">电影</a>
						<a id="a1" class="a-b" href="">有新动态</a>
						<a id="a2" class="a-b"href="">最新投稿</a>
					</div>
					<div class="a-l-center">
						<ul id="ul9">
						<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="a-l-footer">
						<a class="new-a"href="movie.php">查看更多></a>
					</div></div>
				<div class="a-l"><div class="a-l-head">
						<img style="float:left"src="image/j.png" alt="">
						<a href="">电视剧</a>
						<a id="a1" class="a-b" href="">有新动态</a>
						<a id="a2" class="a-b"href="">最新投稿</a>
					</div>
					<div class="a-l-center">
						<ul id="ul10">
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
							<li>
								<a href="">
									<img src="http://i0.hdslb.com/240_180/video/cd/cd9af36ba6e19562d226b10677d87dcd.jpg" alt="">
									<span>哈哈哈哈</span>
								</a>
								<div>
									<img src="image/play_num.png" alt="">
									<span style="margin-right:66px;">15</span>
									<img src="image/danmu_num.png" alt="">
									<span>16</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="a-l-footer">
						<a class="new-a"href="dianshiju.php">查看更多></a>
					</div></div>
			</div>
			<!-- ..............................................................................................................................................................................这里用混编 写死你.....各个分区视频点击量最高的 -->
			<div class="right">
				<div class="b-l">
					<div class="b-l-header">
						<span>动画排行</span><!-- 这里是动画专区的 -->
						<a href="">全部</a>
						<a href="">原创</a>
					</div>
					<div class="b-l-center">
						<ul id = "r_u1">
							<?php include "zhuye_donghua.php"; ?>
						</ul>
						
					</div>
					<div class="b-l-footer">
						<a class="new-a" style="width:240px;"href="anime.php">查看更多></a>
					</div>
				</div>
					<div class="b-l"  style="padding-bottom:88px;">
					<div class="b-l-header">
						<span>番剧排行</span><!-- 这里是番剧专区的 -->
						<a href="">全部</a>
						<a href="">原创</a>
					</div>
					<div class="b-l-center">
						<ul id = "r_u2">
							<?php include "zhuye_fanju.php"; ?>
						</ul>
					</div>
					<div class="b-l-footer">
						<a class="new-a" style="width:240px;"href="fanju.php">查看更多></a>
					</div>
				</div>
					<div class="b-l">
					<div class="b-l-header">
						<span>音乐排行</span><!-- 这里是音乐专区的 -->
						<a href="">全部</a>
						<a href="">原创</a>
					</div>
					<div class="b-l-center">
						<ul id = "r_u3">
							<?php include "zhuye_yinyue.php"; ?>
					</div>
					<div class="b-l-footer">
						<a class="new-a" style="width:240px;"href="music.php">查看更多></a>
					</div>
				</div>
					<div class="b-l">
					<div class="b-l-header">
						<span>游戏排行</span><!-- 这里是游戏专区的 -->
						<a href="">全部</a>
						<a href="">原创</a>
					</div>
					<div class="b-l-center">
						<ul id = "r_u4">
							<?php include "zhuye_youxi.php"; ?>
						</ul>
					</div>
					<div class="b-l-footer">
						<a class="new-a" style="width:240px;"href="game.php">查看更多></a>
					</div>
				</div>
					<div class="b-l">
					<div class="b-l-header">
						<span>科技排行</span><!-- 这里是科技专区的 -->
						<a href="">全部</a>
						<a href="">原创</a>
					</div>
					<div class="b-l-center">
						<ul id = "r_u5">
							<?php include "zhuye_keji.php"; ?>
						</ul>
					</div>
					<div class="b-l-footer">
						<a class="new-a" style="width:240px;"href="sct.php">查看更多></a>
					</div>
				</div>
					<div class="b-l">
					<div class="b-l-header">
						<span>舞蹈排行</span><!-- 这里是舞蹈专区的 -->
						<a href="">全部</a>
						<a href="">原创</a>
					</div>
					<div class="b-l-center">
						<ul id = "r_u6">
							<?php include "zhuye_wudao.php"; ?>
						</ul>
					</div>
					<div class="b-l-footer">
						<a class="new-a" style="width:240px;"href="dance.php">查看更多></a>
					</div>
				</div>
					<div class="b-l">
					<div class="b-l-header">
						<span>娱乐排行</span><!-- 这里是娱乐专区的 -->
						<a href="">全部</a>
						<a href="">原创</a>
					</div>
					<div class="b-l-center">
						<ul id = "r_u7">
							<?php include "zhuye_yule.php"; ?>
						</ul>
					</div>
					<div class="b-l-footer">
						<a class="new-a" style="width:240px;"href="fun.php">查看更多></a>
					</div>
				</div>
					<div class="b-l">
					<div class="b-l-header">
						<span>鬼畜排行</span><!-- 这里是鬼畜专区的 -->
						<a href="">全部</a>
						<a href="">原创</a>
					</div>
					<div class="b-l-center">
						<ul id = "r_u8">
							<?php include "zhuye_guichu.php"; ?>
						</ul>
					</div>
					<div class="b-l-footer">
						<a class="new-a" style="width:240px;"href="guichu.php">查看更多></a>
					</div>
				</div>
					<div class="b-l">
					<div class="b-l-header">
						<span>电影排行</span><!-- 这里是电影专区的 -->
						<a href="">全部</a>
						<a href="">原创</a>
					</div>
					<div class="b-l-center">
						<ul id = "r_u9">
							<?php include "zhuye_dianying.php"; ?>
						</ul>
					</div>
					<div class="b-l-footer">
						<a class="new-a" style="width:240px;"href="movie.php">查看更多></a>
					</div>
				</div>
					<div class="b-l">
					<div class="b-l-header">
						<span>电视剧排行</span><!-- 这里是电视剧专区的 -->
						<a href="">全部</a>
						<a href="">原创</a>
					</div>
					<div class="b-l-center">
						<ul id = "r_u10">
							<?php include "zhuye_dianshiju.php"; ?>
						</ul>
					</div>
					<div class="b-l-footer">
						<a class="new-a" style="width:240px;"href="dianshiju.php">查看更多></a>
					</div>
				</div>
					

			</div>
		</div>
	</div>
	<div class="footer">
		<div class="footer_content">
			<div></div>
			<div><span>广播电视节目制作经营许可证：（沪）字第510号 网络文化经营许可证：沪网文【2011】0602-063<br/>
互联网ICP备案：沪ICP备13044862号-1　信息网络传播视听节目许可证：0910417<br/>
互联网ICP备案：沪ICP备13044862号-1 信息网络传播视听节目许可证：0910417<br/>
声明:本站不提供任何视听上传服务，所有内容均来自正规视频站点所提供的公开引用资源</span></div>
		</div>
	</div>
	</div>
	<div id="cookieName">
		<?php 
			echo $tiaozhuan;
		 ?>
	</div>
	<div id="cookiePic">
		<?php 
			echo $picture;
		 ?>
	</div>
	<script type="text/javascript">
	function lore(){
		document.getElementById("loginH").onclick = function(){
			window.location.href = "login.html";
		}
		document.getElementById("regH").onclick = function(){
			window.location.href = "register.html";
		}
	}
	lore();
		function huadong(speed){
			this.speed = speed;
			this.element = document.getElementById("topic-preview-wrapper");
			this.element1 = document.getElementById("bottom");
			this.number = 0;
			this.time;
			this.start = function(){
				clearTimeout(this.time);
				this.time = setTimeout(this.left.bind(this),this.speed);
			}
			this.stop = function(){
				clearTimeout(this.time);
			}
			this.left = function(){
				if(this.number == this.element.children.length - 1){
					for(var i = 0;i < this.element.children.length;i++){
						if(i != 0){
							$(this.element.children[i]).animate({
								left:"440px"
							},100)
						}else{
							$(this.element.children[i]).animate({
								left:"0px"
							},100)
						}
					}
					this.number = 0;
					for(var i = 0;i < this.element1.children.length;i++){
						this.element1.children[i].style.backgroundColor = "#fff";
					}
					this.element1.children[this.number].style.backgroundColor = "#01a0d8";
				}else{
					$(this.element.children[this.number]).animate({
					left:"-=440px"
					},100)
					$(this.element.children[this.number+1]).animate({
					left:"-=440px"
					},100)
					
					for(var i = 0;i < this.element1.children.length;i++){
						this.element1.children[i].style.backgroundColor = "#fff";
					}
					this.element1.children[this.number+1].style.backgroundColor = "#01a0d8";
					this.number++;
				}
				clearTimeout(this.time);
				this.time = setTimeout(this.left.bind(this),this.speed);
			}
			this.click = function(){
				var that = this;
				that.stop();
				for(var i = 0;i < this.element1.children.length;i++){
					this.element1.children[i].num = i;
					this.element1.children[i].onclick = function(){
						for(var j = 0;j < this.parentNode.children.length;j++){
							this.parentNode.children[j].style.backgroundColor = "#fff";
						}
						this.style.backgroundColor = "#01a0d8";
						for(var j = 0;j < that.element.children.length;j++){
							if(j == this.num){
								$(that.element.children[j]).animate({
									left:"0px"
								},100)
							}else if(j < this.num){
								$(that.element.children[j]).animate({
									left:"-440px"
								},100)
							}else{
								$(that.element.children[j]).animate({
									left:"440px"
								},100)
							}
						}
						that.number = this.num;
						that.start();
					}
				}
			}
		}
		var f1f1 = new huadong(5000);
		f1f1.start();
		f1f1.click();
		document.getElementById("topic-preview-wrapper").onmouseover = function(){
			f1f1.stop();
		}
		document.getElementById("topic-preview-wrapper").onmouseout = function(){
			f1f1.start();
		}
		function move1(id,num){
			var oul = document.getElementById(id);
			var oli = oul.children[num];
			oli.children[0].onmouseover = function(){
				on(oli);
				var a = document.getElementById("hidden5");
				setTimeout(fn,600);
				function fn(){
					a.style.display = "block";
					$(a).animate({
						opacity:"1.0"
					},200)
				}
				$(oli.children[1]).stop();
				oli.children[0].children[1].style.color = "#00a1d6";
				$(oli.children[1]).animate({
					top:"148px"
				},250)
			}
			oli.children[0].onmouseout = function(){
				var a = document.getElementById("hidden5");
				document.body.removeChild(a);
				$(oli.children[1]).stop();
				oli.children[0].children[1].style.color = "#000";
				$(oli.children[1]).animate({
					top:"132px"
				},250)
			}
		}
		function move2(num){
			var olist = document.getElementById("list");
			var oli = olist.children[num];
			oli.children[0].onmouseover = function(){
				oli.children[0].style.opacity = "0.4";
				oli.children[1].style.opacity = "1.0";
				oli.children[2].style.opacity = "0";
			}
			oli.children[0].onmouseout = function(){
				oli.children[0].style.opacity = "1.0";
				oli.children[1].style.opacity = "0";
				oli.children[2].style.opacity = "1.0";
			}
		}
		function on(element){
			var otop = element.offsetTop - 160 + "px";
			var oleft = element.offsetLeft + 10 + "px";
			var h = document.createElement("div");
			h.style.display = "none";
			h.style.opacity = "0";
			h.style.top = otop;
			h.style.left = oleft;
			h.className = "hidden5";
			h.id = "hidden5";
			h.setAttribute("remove",1); 
			var a = document.createElement("div");
			a.className = "hidden_a";
			var b = document.createElement("div");
			b.className = "hidden_b";
			var span1 = document.createElement("span");
			span1.innerHTML = element.children[0].name;
			b.appendChild(span1);
			var d = document.createElement("div");
			d.className = "hidden_d";
			var img1 = document.createElement("img");
			img1.src = "image/play_num.png";
			var span2 = document.createElement("span");
			span2.innerHTML = element.children[0].attributes["play_num"].value;
			var img2 = document.createElement("img");
			img2.src = "image/danmu_num.png";
			var span3 = document.createElement("span");
			span3.innerHTML = element.children[0].attributes["danmu_num"].value;
			var img3 = document.createElement("img");
			img3.src = "image/shouchang.png";
			var span4 = document.createElement("span");
			span4.innerHTML = element.children[0].attributes["pinglun_num"].value;
			d.appendChild(img1);
			d.appendChild(span2);
			d.appendChild(img2);
			d.appendChild(span3);
			d.appendChild(img3);
			d.appendChild(span4);
			var c = document.createElement("div");
			c.className = "hidden_c";
			var img4 = document.createElement("img");
			img4.src = "http://i0.hdslb.com/240_180/video/57/57a8ff858815f40a32830c14b510dba1.jpg";
			var p1 = document.createElement("p");
			p1.innerHTML = "额呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵";
			var span5 = document.createElement("span");
			span5.innerHTML = element.children[0].attributes["up"].value;
			var span6 = document.createElement("span");
			span6.innerHTML = element.children[0].attributes["time"].value;
			span6.style.cssFloat = "right";
			c.appendChild(img4);
			c.appendChild(p1);
			c.appendChild(span5);
			c.appendChild(span6);
			a.appendChild(b);
			a.appendChild(d);
			a.appendChild(c);
			h.appendChild(a);
			document.body.appendChild(h);
		}
		function hot_id(){//主页最上方几个视频的id 以视频点击为顺序 依次用|链接
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
					 	var array = xhr.responseText.split("|");
					 	var olist = document.getElementById("list");
					 	for(var i = 0;i < array.length;i++){
							var oli = olist.children[i];
							oli.children[0].href = "video.php?id=" + array[i]; 
					 	}
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","hot_id.php",true);
			xhr.send(null);
		}
		function hot_name(){//主页最上方6个视频的名称 以视频点击为顺序 依次用|链接
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
					 	var array = xhr.responseText.split("|");
					 	var olist = document.getElementById("list");
					 	for(var i = 0;i < 6;i++){
							var oli = olist.children[i];
							oli.children[2].innerHTML = array[i];
							oli.children[1].children[0].innerHTML = array[i];
					 	}
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","hot_player_name.php",true);
			xhr.send(null);
		}
		function hot_click(){//主页最上方6个视频的点击量 以视频点击为顺序 依次用|链接
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
					 	var array = xhr.responseText.split("|");
					 	var olist = document.getElementById("list");
					 	for(var i = 0;i < 6;i++){
							var oli = olist.children[i];
							oli.children[1].children[2].children[1].innerHTML = array[i];
					 	}
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","hot_click_num.php",true);
			xhr.send(null);
		}
		function hot_up(){//主页最上方6个视频的up主 以视频点击为顺序 依次用|链接
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
					 	var array = xhr.responseText.split("|");
					 	var olist = document.getElementById("list");
					 	for(var i = 0;i < 6;i++){
							var oli = olist.children[i];
							oli.children[1].children[1].children[1].innerHTML = array[i];
					 	}
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","hot_up_num.php",true);
			xhr.send(null);
		}
		function hot_img(){//主页最上方6个视频的图片地址 以视频点击为顺序 依次用|链接
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
					 	var array = xhr.responseText.split("|");
					 	var olist = document.getElementById("list");
					 	for(var i = 0;i < 6;i++){
							var oli = olist.children[i];
							oli.children[1].children[1].children[1].innerHTML = array[i];
					 	}
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","hot_img.php",true);
			xhr.send(null);
		}
		function anime(){//以下的 你要写10个 分别对应动画 番剧.............
			function anime_id(){//动画的8个点击最高的视频的ID 老规矩|
				var oul = document.getElementById("ul1");
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function(){
					if(xhr.readyState == 4){
						if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
						 	var array = xhr.responseText.split("|");
						 	for(var i = 0;i < array.length-1;i++){
						 		oul.children[i].children[0].setAttribute("id",array[i]);
						 		oul.children[i].children[0].href = "video.php?id="+array[i];
						 	}
						}else{
							alert("接受数据发生错误");
						}
					}
				};
				xhr.open("get","echo_id.php?tag=动画",true);
				xhr.send(null);
			}
			function anime_play_num(){//动画的8个点击最高的视频的点击次数 老规矩|
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function(){
					if(xhr.readyState == 4){
						if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
						 	var array = xhr.responseText.split("|");
						 	for(var i = 0;i < array.length-1;i++){
						 		oul.children[i].children[0].setAttribute("play_num",array[i]);
						 		oul.children[i].children[1].children[1].innerHTML = array[i];
						 	}
						}else{
							alert("接受数据发生错误");
						}
					}
				};
				xhr.open("get","echo_click_num.php?tag=动画",true);
				xhr.send(null);
			}
			function anime_danmu_num(){//动画的8个点击最高的视频的弹幕数量 老规矩|
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function(){
					if(xhr.readyState == 4){
						if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
						 	var array = xhr.responseText.split("|");
						 	for(var i = 0;i < array.length-1;i++){
					 			oul.children[i].children[0].setAttribute("danmu_num",array[i]);
						 		oul.children[i].children[1].children[3].innerHTML = array[i];
						 	}
						}else{
							alert("接受数据发生错误");
						}
					}
				};
				xhr.open("get","echo_danmu_num.php?tag=动画",true);
				xhr.send(null);
			}
			function anime_time(){//动画的8个点击最高的视频的上传时间 老规矩|
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function(){
					if(xhr.readyState == 4){
						if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
						 	var array = xhr.responseText.split("|");
						 	for(var i = 0;i < array.length-1;i++){
						 		oul.children[i].children[0].setAttribute("time",array[i]);
						 	}
						}else{
							alert("接受数据发生错误");
						}
					}
				};
				xhr.open("get","echo_time.php?tag=动画",true);
				xhr.send(null);
			}
			function anime_up(){//动画的8个点击最高的视频的UP主 老规矩|
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function(){
					if(xhr.readyState == 4){
						if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
						 	var array = xhr.responseText.split("|");
						 	for(var i = 0;i < array.length-1;i++){
						 		oul.children[i].children[0].setAttribute("up",array[i]);
						 	}
						}else{
							alert("接受数据发生错误");
						}
					}
				};
				xhr.open("get","echo_up.php?tag=动画",true);
				xhr.send(null);
			}
			function anime_tag(){//动画的8个点击最高的视频的简介 老规矩|
				var xhr = new XMLHttpRequest();
				xhr.onreadystatechange = function(){
					if(xhr.readyState == 4){
						if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
						 	var array = xhr.responseText.split("|");
						 	for(var i = 0;i < array.length-1;i++){
						 		oul.children[i].children[0].setAttribute("tag",array[i]);
						 	}
						}else{
							alert("接受数据发生错误");
						}
					}
				};
				xhr.open("get","echo_tag.php?tag=动画",true);
				xhr.send(null);
			}
		}
		//这里开始 你不用管................................................................................................................................................................................
		// function a_k_name(){//排在首页各个分区的几个视频的视频名称 访问你后台的 a_k_name.php  你对数据库进行判断 echo出他们的name名字 用|隔开(每8个用一个-隔开) 点以我的主页顺序来一一对应
		// 	var xhr = new XMLHttpRequest();
		// 	xhr.onreadystatechange = function(){
		// 		if(xhr.readyState == 4){
		// 			if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
		// 			 	var array = xhr.responseText.split("-");
		// 			 	for(var i = 1;i < 11;i++){
		// 			 		var array1 = array[i-1].split("|");
		// 			 		var a = "ul" + i;
		// 			 		var oul = document.getElementById(a);
		// 			 		for(var j = 0;j < 8;j++){
		// 			 			var oli = oul.children[j];
		// 			 			oli.children[0].setAttribute("name",array1[j]);
		// 			 			oli.children[0].children[1].innerHTML = array1[j];
		// 			 		} 
		// 			 	}
		// 			}else{
		// 				alert("接受数据发生错误");
		// 			}
		// 		}
		// 	};
		// 	xhr.open("get","a_k_name.php",true);
		// 	xhr.send(null);
		// }
		// function a_k_play_num(){//排在首页各个分区的几个视频的视频播放次数 访问你后台的 a_k_play_num.php  你对数据库进行判断 echo出他们的视频播放次数 用|隔开(每8个用一个-隔开) 以我的主页顺序来一一对应
		// 	var xhr = new XMLHttpRequest();
		// 	xhr.onreadystatechange = function(){
		// 		if(xhr.readyState == 4){
		// 			if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
		// 			 	var array = xhr.responseText.split("-");
		// 			 	for(var i = 1;i < 11;i++){
		// 			 		var array1 = array[i-1].split("|");
		// 			 		var a = "ul" + i;
		// 			 		var oul = document.getElementById(a);
		// 			 		for(var j = 0;j < 8;j++){
		// 			 			var oli = oul.children[j];
		// 			 			oli.children[0].setAttribute("play_num",array1[j]);
		// 			 			oli.children[1].children[1].innerHTML = array1[j];
		// 			 		} 
		// 			 	}
		// 			}else{
		// 				alert("接受数据发生错误");
		// 			}
		// 		}
		// 	};
		// 	xhr.open("get","a_k_play_num.php",true);
		// 	xhr.send(null);
		// }
		// function a_k_danmu_num(){//排在首页各个分区的几个视频的弹幕条数 访问你后台的 a_k_danmu_num.php  你对数据库进行判断 echo出他们的视频弹幕数量 用|隔开(每8个用一个-隔开) 以我的主页顺序来一一对应
		// 	var xhr = new XMLHttpRequest();
		// 	xhr.onreadystatechange = function(){
		// 		if(xhr.readyState == 4){
		// 			if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
		// 			 	var array = xhr.responseText.split("-");
		// 			 	for(var i = 1;i < 11;i++){
		// 			 		var array1 = array[i-1].split("|");
		// 			 		var a = "ul" + i;
		// 			 		var oul = document.getElementById(a);
		// 			 		for(var j = 0;j < 8;j++){
		// 			 			var oli = oul.children[j];
		// 			 			oli.children[0].setAttribute("danmu_num",array1[j]);
		// 			 			oli.children[1].children[3].innerHTML = array1[j];
		// 			 		} 
		// 			 	}
		// 			}else{
		// 				alert("接受数据发生错误");
		// 			}
		// 		}
		// 	};
		// 	xhr.open("get","a_k_danmu_num.php",true);
		// 	xhr.send(null);
		// }
		// function a_k_pinglun_num(){//排在首页各个分区的几个视频的视频评论次数 访问你后台的 a_k_pinglun_num.php  你对数据库进行判断 echo出他们的视频评论次数 用|隔开(每8个用一个-隔开)  以我的主页顺序来一一对应
		// 	var xhr = new XMLHttpRequest();
		// 	xhr.onreadystatechange = function(){
		// 		if(xhr.readyState == 4){
		// 			if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
		// 			 	var array = xhr.responseText.split("-");
		// 			 	for(var i = 1;i < 11;i++){
		// 			 		var array1 = array[i-1].split("|");
		// 			 		var a = "ul" + i;
		// 			 		var oul = document.getElementById(a);
		// 			 		for(var j = 0;j < 8;j++){
		// 			 			var oli = oul.children[j];
		// 			 			oli.children[0].setAttribute("pinglun_num",array1[j]);
		// 			 		} 
		// 			 	}
		// 			}else{
		// 				alert("接受数据发生错误");
		// 			}
		// 		}
		// 	};
		// 	xhr.open("get","a_k_pinglun_num.php",true);
		// 	xhr.send(null);
		// }
		// function a_k_time(){//排在首页各个分区的几个视频的视频的上传时间 访问你后台的 a_k_time.php  你对数据库进行判断 echo出他们的视频的上传时间 用|隔开(每8个用一个-隔开) 以我的主页顺序来一一对应
		// 	var xhr = new XMLHttpRequest();
		// 	xhr.onreadystatechange = function(){
		// 		if(xhr.readyState == 4){
		// 			if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
		// 			 	var array = xhr.responseText.split("-");
		// 			 	for(var i = 1;i < 11;i++){
		// 			 		var array1 = array[i-1].split("|");
		// 			 		var a = "ul" + i;
		// 			 		var oul = document.getElementById(a);
		// 			 		for(var j = 0;j < 8;j++){
		// 			 			var oli = oul.children[j];
		// 			 			oli.children[0].setAttribute("time",array1[j]);
		// 			 		} 
		// 			 	}
		// 			}else{
		// 				alert("接受数据发生错误");
		// 			}
		// 		}
		// 	};
		// 	xhr.open("get","a_k_time.php",true);
		// 	xhr.send(null);
		// }
		// function a_k_up(){//排在首页各个分区的几个视频的视频的up主 访问你后台的 a_k_up.php  你对数据库进行判断 echo出他们的视频的up主 用|隔开(每8个用一个-隔开) 以我的主页顺序来一一对应
		// 	var xhr = new XMLHttpRequest();
		// 	xhr.onreadystatechange = function(){
		// 		if(xhr.readyState == 4){
		// 			if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
		// 			 	var array = xhr.responseText.split("-");
		// 			 	for(var i = 1;i < 11;i++){
		// 			 		var array1 = array[i-1].split("|");
		// 			 		var a = "ul" + i;
		// 			 		var oul = document.getElementById(a);
		// 			 		for(var j = 0;j < 8;j++){
		// 			 			var oli = oul.children[j];
		// 			 			oli.children[0].setAttribute("up",array1[j]);
		// 			 		} 
		// 			 	}
		// 			}else{
		// 				alert("接受数据发生错误");
		// 			}
		// 		}
		// 	};
		// 	xhr.open("get","a_k_up.php",true);
		// 	xhr.send(null);
		// }
		// function a_k_tag(){//排在首页各个分区的几个视频的视频的简介 访问你后台的 a_k_tag.php  你对数据库进行判断 echo出他们的视频的简介 用|隔开(每8个用一个-隔开) 以我的主页顺序来一一对应
		// 	var xhr = new XMLHttpRequest();
		// 	xhr.onreadystatechange = function(){
		// 		if(xhr.readyState == 4){
		// 			if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
		// 			 	var array = xhr.responseText.split("-");
		// 			 	for(var i = 1;i < 11;i++){
		// 			 		var array1 = array[i-1].split("|");
		// 			 		var a = "ul" + i;
		// 			 		var oul = document.getElementById(a);
		// 			 		for(var j = 0;j < 8;j++){
		// 			 			var oli = oul.children[j];
		// 			 			oli.children[0].setAttribute("tag",array1[j]);
		// 			 		} 
		// 			 	}
		// 			}else{
		// 				alert("接受数据发生错误");
		// 			}
		// 		}
		// 	};
		// 	xhr.open("get","a_k_tag.php",true);
		// 	xhr.send(null);
		// }
		// function right_a_k_id(){//排在首页右边排行的几个视频的视频的ID 访问你后台的 right_a_k_id.php你对数据库进行判断 echo出他们的视频的ID 用|隔开(每6个用一个-隔开) 点击高的排在前面 以我的主页顺序来一一对应
		// 	var xhr = new XMLHttpRequest();
		// 	xhr.onreadystatechange = function(){
		// 		if(xhr.readyState == 4){
		// 			if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
		// 			 	var array = xhr.responseText.split("-");
		// 			 	for(var i = 1;i < 11;i++){
		// 			 		var array1 = array[i-1].split("|");
		// 			 		var a = "r_u" + i;
		// 			 		var oul = document.getElementById(a);
		// 			 		for(var j = 0;j < 6;j++){
		// 			 			var oli = oul.children[j];
		// 			 			oli.children[0].href = "video.html?id=" + array1[j];
		// 			 		} 
		// 			 	}
		// 			}else{
		// 				alert("接受数据发生错误");
		// 			}
		// 		}
		// 	};
		// 	xhr.open("get","right_a_k_id.php",true);
		// 	xhr.send(null);
		// }
		// function right_a_k_name(){//排在首页右边排行的几个视频的视频的名称 访问你后台的 right_a_k_name.php你对数据库进行判断 echo出他们的视频的名称 用|隔开(每6个用一个-隔开) 点击高的排在前面 以我的主页顺序来 一一对应
		// 	var xhr = new XMLHttpRequest();
		// 	xhr.onreadystatechange = function(){
		// 		if(xhr.readyState == 4){
		// 			if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
		// 			 	var array = xhr.responseText.split("-");
		// 			 	for(var i = 1;i < 11;i++){
		// 			 		var array1 = array[i-1].split("|");
		// 			 		var a = "r_u" + i;
		// 			 		var oul = document.getElementById(a);
		// 			 		for(var j = 0;j < 6;j++){
		// 			 			var oli = oul.children[j];
		// 			 			if(j == 0){
		// 			 				oli.children[0].children[2].innerHTML = array1[j];
		// 			 			}else{
		// 			 				oli.children[0].children[1].innerHTML = array1[j];
		// 			 			}
		// 			 		} 
		// 			 	}
		// 			}else{
		// 				alert("接受数据发生错误");
		// 			}
		// 		}
		// 	};
		// 	xhr.open("get","right_a_k_name.php",true);
		// 	xhr.send(null);
		// }
		// function right_a_k_img(){//排在首页右边排行的几个视频的视频的图片 只有分区排行第一的才有 访问你后台的 right_a_k_img.php你对数据库进行判断 echo出他们的视频封面地址 用|隔开以我的主页顺序来
		// 	var xhr = new XMLHttpRequest();
		// 	xhr.onreadystatechange = function(){
		// 		if(xhr.readyState == 4){
		// 			if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
		// 			 	var array = xhr.responseText.split("|");
		// 			 	for(var i = 1;i < 11;i++){
		// 			 		var a = "r_u" + i;
		// 			 		var oul = document.getElementById(a);
		// 			 		oul.children[0].children[0].children[1].style.background = "url(" + array[i-1] + ")";
		// 			 	}
		// 			}else{
		// 				alert("接受数据发生错误");
		// 			}
		// 		}
		// 	};
		// 	xhr.open("get","right_a_k_img.php",true);
		// 	xhr.send(null);
		// }
		function jud(){
			if(document.getElementById("cookieName").innerHTML.replace(/(^\s*)|(\s*$)/g,'') == ""){
				document.getElementById("loginH").style.display = "block";
				document.getElementById("regH").style.display = "block";
				document.getElementById("turnU").style.display = "none";
				document.getElementById("outU").style.display = "none";
			}else{
				document.getElementById("loginH").style.display = "none";
				document.getElementById("regH").style.display = "none";
				document.getElementById("turnU").style.display = "block";	
				document.getElementById("outU").style.display = "block";		
			}
		}
		jud();
		// window.onload = function(){
		// 	hot_id();
		// 	hot_name();
		// 	hot_click();
		// 	hot_up();
		// 	a_k_id();
		// 	a_k_name();
		// 	a_k_play_num();
		// 	a_k_danmu_num();
		// 	a_k_pinglun_num();
		// 	a_k_time();
		// 	a_k_up();
		// 	right_a_k_id();
		// 	right_a_k_name(); 
		// 	right_a_k_img();
		// 	jud();
		// 	for(var i = 1;i < 11;i++){
		// 		var a = "ul" + i;
		// 		for(var j = 0;j < 8;j++){
		// 			move1(a,j);
		// 		}
		// 	}
		// 	for(var i = 0;i < 6;i++){
		// 		move2(i);
		// 	}
		// } 
	</script>
</body>
</html>