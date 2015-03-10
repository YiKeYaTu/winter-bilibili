<?php
include "cookies.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="anime-css.css">
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
			<input id="loginH" class="btn btn-info" type="button" value="登陆">
			<input id="regH"class="btn btn-info" type="button" value="注册">
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
			<a style="margin-left:-14px;" href="zhuye.php">首页</a>
			<a href="anime.php">动画</a>
			<a href="fanju.php">番剧</a>
			<a href="music.php">音乐</a>
			<a href="dance.php">舞蹈</a>
			<a href="game.php">游戏</a>
			<a href="sct.php">科技</a>
			<a href="fun.php">娱乐</a>
			<a href="guichu.php">鬼畜</a>
			<a class="focus" href="movie.php">电影</a>
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
			<div class="left">
				<div class="b_top">
					<div class="bg_i"></div>
					<h2>电影</h2>
				</div>
				<div class="b_choose">
					<a id="hot" href="#">视频热度排序</a>
					<a id="time" href="#">投稿时间排序</a>
					<a id="c1" href="#"></a>
					<a id="c2" href="#"></a>
				</div>
			
			<div class="page" id="page">
				<!-- 从这里开始复制 这里是按热度顺序 -->
				<?php include "movie_click.php"; ?>
				<!-- 到这里 -->
			</div>
			
			<div class="page" id="page_t">
				<!-- 从这里开始复制 这里是按时间顺序 -->
				<?php include "movie_time.php"; ?>
				<!-- 到这里 -->
			</div>
			
				<!-- 到这里 -->
			<div class="bottom" id="bottom_1">
				<div>
					<input id="prv" type="button" value="<">
					<p id="number">
						？|？
					</p>
					<input id="cur" type="button" value=">">
				</div>
				<input id="tiaozhuan" type="button" value="跳转到">
				<input id="value" type="text">
			</div>
			<div class="bottom" id="bottom_2">
				<div>
					<input id="prv_2" type="button" value="<">
					<p id="number_2">
						？|？
					</p>
					<input id="cur_2" type="button" value=">">
				</div>
				<input id="tiaozhuan_2" type="button" value="跳转到">
				<input id="value_2" type="text">
			</div>
		</div>
		<div class="right">
			<h2>本区热门</h2>
			<?php include "movie_right.php"; ?>
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
		function page1(element1,element2,element3,element4){
			var oscroll = document.getElementById(element1);
			var num = Math.ceil(oscroll.children.length/20);
			page = 1;
			document.getElementById(element2).innerHTML = "第" + page + "页" + "|" + "共" + num + "页";
			for(var i = 0;i < oscroll.children.length;i++){
				oscroll.children[i].style.display = "none";
			}
			var i = (page-1)*20;
			if(i + 20 < oscroll.children.length){
				var j = i+20;
			}else{
				var j = oscroll.children.length;
			}
			for(k = i;k < j;k++){
				oscroll.children[k].style.display = "block";
			}
			document.getElementById(element3).onclick = function(){
				if(page != 1){
					page--;
					document.getElementById(element2).innerHTML = "第" + page + "页" + "|" + "共" + num + "页";
				}
				for(var i = 0;i < oscroll.children.length;i++){
					oscroll.children[i].style.display = "none";
				}
				var i = (page-1)*20;
				if(i + 20 < oscroll.children.length){
					var j = i+20;
				}else{
					var j = oscroll.children.length;
				}
				for(k = i;k < j;k++){
					oscroll.children[k].style.display = "block";
					
				}
			}
			document.getElementById(element4).onclick = function(){
				if(page != num){
					page++;
					document.getElementById(element2).innerHTML = "第" + page + "页" + "|" + "共" + num + "页";
				}
				for(var i = 0;i < oscroll.children.length;i++){
					oscroll.children[i].style.display = "none";
				}
				var i = (page-1)*20;
				if(i + 20 < oscroll.children.length){
					var j = i+20;
				}else{
					var j = oscroll.children.length;
				}
				for(k = i;k < j;k++){
					oscroll.children[k].style.display = "block";
					
				}
			}
		}
		function turn(){
			var btn = document.getElementById("tiaozhuan");
			var text = document.getElementById("value");
			var oscroll = document.getElementById("page");
			btn.onclick = function(){
				var num = Math.ceil(oscroll.children.length/20);
				if(text.value <= num&&text.value != ""){
					page = text.value;
					text.value = "";
					document.getElementById("number").innerHTML = "第" + page + "页" + "|" + "共" + num + "页";
					for(var i = 0;i < oscroll.children.length;i++){
						oscroll.children[i].style.display = "none";
					}
					var i = (page-1)*20;
					if(i + 20 < oscroll.children.length){
						var j = i+20;
					}else{
						var j = oscroll.children.length;
					}
					for(k = i;k < j;k++){
						oscroll.children[k].style.display = "block";
						
					}
				}
			}
		}
		function turn1(){
			var btn = document.getElementById("tiaozhuan_2");
			var text = document.getElementById("value_2");
			var oscroll = document.getElementById("page_t");
			btn.onclick = function(){
				var num = Math.ceil(oscroll.children.length/20);
				if(text.value <= num&&text.value != ""){
					page = text.value;
					text.value = "";
					document.getElementById("number_2").innerHTML = "第" + page + "页" + "|" + "共" + num + "页";
					for(var i = 0;i < oscroll.children.length;i++){
						oscroll.children[i].style.display = "none";
					}
					var i = (page-1)*20;
					if(i + 20 < oscroll.children.length){
						var j = i+20;
					}else{
						var j = oscroll.children.length;
					}
					for(k = i;k < j;k++){
						oscroll.children[k].style.display = "block";
						
					}
				}
			}
		}
		function changeP(){
			var btn1 = document.getElementById("hot");
			var btn2 = document.getElementById("time");
			var oapge1 = document.getElementById("page");
			var oapge2= document.getElementById("page_t");
			var bt1 = document.getElementById("bottom_1");
			var bt2 = document.getElementById("bottom_2");
			btn1.onclick = function(){
				this.style.backgroundColor = "#00a1d6";
				this.style.color = "#fff";
				btn2.style.backgroundColor = "#FAFAFA";
				btn2.style.color = "#000";
				bt1.style.display = "block";
				bt2.style.display = "none";
				oapge2.style.display = "none";
				oapge1.style.display = "block";
			}
			btn2.onclick = function(){
				this.style.backgroundColor = "#00a1d6";
				this.style.color = "#fff";
				btn1.style.backgroundColor = "#FAFAFA";
				btn1.style.color = "#000";
				bt2.style.display = "block";
				bt1.style.display = "none";
				oapge1.style.display = "none";
				oapge2.style.display = "block";
			}
		}
		function change(){
			var btn1 = document.getElementById("c1");
			var btn2 = document.getElementById("c2");
			var oapge = document.getElementById("page");
			var oapge1 = document.getElementById("page_t");
			btn1.onclick = function(){
				this.style.backgroundColor = "#00a1d6";
				btn2.style.backgroundColor = "#FAFAFA";
				this.style.backgroundPosition = "15px -32px";
				btn2.style.backgroundPosition = "13px -70px";
				for(var i = 0;i < oapge.children.length;i++){
					oapge.children[i].className = "video_2";
					oapge.children[i].children[0].className = "item_2";
					oapge.children[i].children[0].children[0].children[0].className = "fengmian_2";
					oapge.children[i].children[0].children[8].className = "tag_2";
					
				}
				for(var i = 0;i < oapge1.children.length;i++){
					oapge1.children[i].className = "video_2";
					oapge1.children[i].children[0].className = "item_2";
					oapge1.children[i].children[0].children[0].children[0].className = "fengmian_2";
					oapge1.children[i].children[0].children[8].className = "tag_2";
				}
				
			}
			btn2.onclick = function(){
				this.style.backgroundColor = "#00a1d6";
				btn1.style.backgroundColor = "#FAFAFA";
				this.style.backgroundPosition = "13px -108px";
				btn1.style.backgroundPosition = "15px 6px";
				for(var i = 0;i < oapge.children.length;i++){
					oapge.children[i].className = "video_1";
					oapge.children[i].children[0].className = "item_1";
					oapge.children[i].children[0].children[0].children[0].className = "fengmian_1";
					oapge.children[i].children[0].children[8].className = "tag_1";
					
				}
				for(var i = 0;i < oapge1.children.length;i++){
					oapge1.children[i].className = "video_1";
					oapge1.children[i].children[0].className = "item_1";
					oapge1.children[i].children[0].children[0].children[0].className = "fengmian_1";
					oapge1.children[i].children[0].children[8].className = "tag_1";
				}
				
			}
		}
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
		turn();
		turn1();    
		page1("page","number","prv","cur");
		page1("page_t","number_2","prv_2","cur_2");
		change();
		changeP();
	</script>
</body>
</html>