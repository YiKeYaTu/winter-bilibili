<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="search-css.css">
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
			<input class="btn btn-info" type="button" value="登陆">
			<input class="btn btn-info" type="button" value="注册">
		</div>
	</div>
	<div class="b-top">
		<div class="b-top-content">
			<img class="logo" src="http://static.hdslb.com/search/img/search_logo.png" alt="">
			<form action="search.php" method="post"><!-- 传输部分，本页面内完成 -->
				<input id="text_search" type="text" name="text"><!-- 搜索内容 -->
				<input type="submit" id="tijiao" class="btn btn-info" value="搜索">
			</form>
			<img src="http://static.hdslb.com/search/img/search_2233top.png" alt="">
		</div>
	</div>
	<div class="center">
		<div class="center_content">
			<div class="top">
				<h2>相关视频</h2>
				<div class="line"></div>
			</div>
			
			<div class="page" id="page">
				 <!-- 混编 -->
			<?php include "searchshousuo.php"; ?>
                 <!--  混编-->
			<div class="bottom">
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
	<script type="text/javascript">
		function page1(){
			var oscroll = document.getElementById("page");
			var num = Math.ceil(oscroll.children.length/10);
			page = 1;
			document.getElementById("number").innerHTML = "第" + page + "页" + "|" + "共" + num + "页";
			for(var i = 0;i < oscroll.children.length;i++){
				oscroll.children[i].style.display = "none";
			}
			var i = (page-1)*10;
			if(i + 10 < oscroll.children.length){
				var j = i+10;
			}else{
				var j = oscroll.children.length;
			}
			for(k = i;k < j;k++){
				oscroll.children[k].style.display = "block";
			}
			document.getElementById("prv").onclick = function(){
				if(page != 1){
					page--;
					document.getElementById("number").innerHTML = "第" + page + "页" + "|" + "共" + num + "页";
				}
				for(var i = 0;i < oscroll.children.length;i++){
					oscroll.children[i].style.display = "none";
				}
				var i = (page-1)*10;
				if(i + 10 < oscroll.children.length){
					var j = i+10;
				}else{
					var j = oscroll.children.length;
				}
				for(k = i;k < j;k++){
					oscroll.children[k].style.display = "block";
					
				}
			}
			document.getElementById("cur").onclick = function(){
				if(page != num){
					page++;
					document.getElementById("number").innerHTML = "第" + page + "页" + "|" + "共" + num + "页";
				}
				for(var i = 0;i < oscroll.children.length;i++){
					oscroll.children[i].style.display = "none";
				}
				var i = (page-1)*10;
				if(i + 10 < oscroll.children.length){
					var j = i+10;
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
			tiaozhuan.onclick = function(){
				var num = Math.ceil(oscroll.children.length/10);
				if(text.value <= num){
					page = text.value;
					text.value = "";
					document.getElementById("number").innerHTML = "第" + page + "页" + "|" + "共" + num + "页";
					for(var i = 0;i < oscroll.children.length;i++){
						oscroll.children[i].style.display = "none";
					}
					var i = (page-1)*10;
					if(i + 10 < oscroll.children.length){
						var j = i+10;
					}else{
						var j = oscroll.children.length;
					}
					for(k = i;k < j;k++){
						oscroll.children[k].style.display = "block";
						
					}
				}
			}
		}
		turn();
		page1();
	</script>
</body>
</html>