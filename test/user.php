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
	<link rel="stylesheet" href="user-css.css">
</head>
<body>
	<div class="z_header">
		<div class="header">
			<a style="margin-left:24px;border:none;"href="zhuye.php">主站</a>
			<a style="margin-left:570px;"href="#">收藏</a>
			<a href="#">投稿</a>
			<a style="border:none;"href="#">信息</a>
			<a class="infor" href="">
				<img src="http://static.hdslb.com/templets/images/1.jpg" alt="">
			</a>
		</div>
	</div>
	<div class="z_center">
		<div class="center">
			<div class="banner">
				<a class="logo" href="zhuye.html"></a>
				<a class="doubi" href="javascript:void(0);"></a>
			</div>
			<div class="container">
				<ul class="left" id="left">
					<img src="image/logo2.png" alt="">
					<p>用户中心</p>
					<li id="main" style="border-top:1px solid #DDD">
						<a href="#">
							<img src="image/hu1.png" alt="">
							<span>主页</span>
						</a>
					</li>
					<li class="click">
						<a href="#">
							<img src="image/u2.png" alt="">
							<span>投稿.管理</span>
						</a>
					</li>
					<ul class="hiddenU">
						<li>
							<a href="#">
								<img src="image/u2.png" alt="">
								<span>视频投稿</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="image/u4.png" alt="">
								<span>视频管理</span>
							</a>
						</li>
					</ul>
					<li>
						<a href="#">
							<img src="image/u5.png" alt="">
							<span>收藏夹</span>
						</a>
					</li>
				</ul>
				<div class="right" id="right">
					<div class="div1" id="div1">
						<div class="title1">
							<div class="bgR"></div>
							<span>我的信息</span>
						</div>
						<div class="myinf" id="myinf">
							<div class="pic">
								<img src="<?php echo $picture ; ?>" alt="">
								<p><?php echo $tiaozhuan ; ?></p><!-- 此处为用户名 -->
							</div>
							<div class="geren">
								<a href="#">
									<img src="image/i1.png" alt="">
									<span>我的信息</span>
								</a>
							</div>
							<div class="hiddenI">
								<a href="#">
									<img src="image/i2.png" alt="">
									<span>修改信息</span>
								</a>
							</div>
							<div class="touxiang">
								<a href="#">
									<img src="image/i3.png" alt="">
									<span>头像设置</span>
								</a>
							</div>
						</div>
						<div class="con1" id="con1">
							<p>
								<span>昵称:<?php echo $tiaozhuan ; ?></span>
								<span></span>
							</p>
							<p>
								<span>账户名：<?php echo $userzhuanghao ; ?></span>
								<span></span>
							</p>
							<p>
								<span>性别：不明</span>
								<span></span>
							</p>
						</div>
						<div class="con2" id="con2">
							<form action="" method="post">
								<div>
									<span>昵称：</span>
									<input type="text" name=""><!-- 这里的name你自己填action自己填 -->
								</div>
								<div>
									<span>账户名：</span>
									<span></span>
								</div>
								<div>
									<span>性别：</span>
									<span>不明</span>
								</div>
								<input type="submit" class="btn-info btn2" value="提交" name=""><!-- 这里的name你自己填action自己填 -->
							</form>
						</div>
						<div class="con3" id="con3">
							<form action="userpicture.php" method="post"><!-- 头像处理的表单 -->
								<input id="doc" type="file"  name = "picture" onchange="javascript:setImagePreview(); " accept="image/gif, image/jpeg"><!-- 这里的name你自己填 -->
								<input type="submit" class="btn btn-info" value="上传" >
							</form>
							<img class="prv" id="prv" src="" alt="">
						</div>
					</div>
					<div id="div3" class="div3">
						<div class="title1">
							<div class="bgR"></div>
							<span>投稿</span>
						</div>
						<div class="war">
							<img src="image/war.png" alt=""><span>请正确填写投稿相关信息</span>
						</div>
					<!-- ………………………………………………………………………………………………………………………………………………………………………………………………………………………… -->
						<form action="sendVideo.php" enctype="multipart/form-data" method="post">
							<div class="item_1">
							<div class="itemL_1">
								<h2>投稿内容</h2>
								<p>上传视频支持本地上传和填写视频地址</p>
							</div>
							<div class="itemR_1">
								<div class="topInf">
									<p>来源</p>
									<p>视频源地址</p>
								</div>
								<div class="centerInf">
									<select id="section1" name = "num">
										<option value="0">链接上传</option>
										<option value="1">直传</option>
									</select>
									<input id="text1" type="text" name="textname"><!-- 这里的name你自己填action自己填 -->
									<input id="file1" type="file" accept=".flv,.mp4" name="filedname"><!-- 这里的name你自己填action自己填 -->
								</div>
							</div>
						</div>
							<div class="item_1">
								<div class="itemL_2">
									<h2>封面图</h2>
									<p>点击图片上传(jpg格式)</p>
								</div>
								<div class="itemR_2">
									<div id="prv2">
										<img id="prv3" src="" alt="">
									</div>
									<input id="file2" type="file" name="picture" onchange="javascript:setImagePreview1();" accept="image/jpeg"><!-- 这里的name你自己填action自己填 -->
								</div>
							</div>
							<div class="item_1">
								<div class="itemL_2">
									<h2>标题</h2>
									<p>40字以内尽量使用中文</p>
								</div>
								<div class="itemR_2">
									<input type="text" id="text2" name = "text">
								</div>
							</div>
							<div class="item_1">
								<div class="itemL_1">
									<h2>视频简介</h2>
									<p>200字以内出现在视频下方的视频简介</p>
								</div>
								<div class="itemR_1">
									<textarea name="textarea" id="text3" cols="10" rows="5"></textarea><!-- 这里的name你自己填action自己填 -->
								</div>
							</div>
							<div class="item_1">
								<div class="itemL_2">
									<h2>隶属栏目</h2>
									<p>请按号入座</p>
								</div>
								<div class="itemR_2">
									<select class="section2" name="sections">
										<option value = "番剧">番剧</option>
										<option value = "动画">动画</option>
										<option value = "音乐">音乐</option>
										<option value = "舞蹈">舞蹈</option>
										<option value = "游戏">游戏</option>
										<option value = "科技">科技</option>
										<option value = "娱乐">娱乐</option>
										<option value = "鬼畜">鬼畜</option>
										<option value = "电影">电影</option>
										<option value = "电视剧">电视剧</option>
									</select><!-- 这里的name你自己填action自己填 -->
								</div>
							</div>
							<div class="submit1">
								<input type="submit" name="" value="提交" class="btn-info btn1">
							</div>
						</form>
						<!-- ………………………………………………………………………………………………………………………………………………………………………… -->
					</div>
					<div id="div4" class="div4">
						<div class="title1">
							<div class="bgR"></div>
							<span>视频管理</span>
						</div>
						<div id="scroll">
							<?php include "personVideo.php"; ?>
						</div>
						<div id="bottom">
							<div>
								<input id="prvPage"type="button" value="<">
								<span id="pagenum"></span>
								<input id="nexPage"type="button" value=">">
							</div>
						</div>
					</div>
					<div id="div5" class="div5"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="z_footer">
		<div class="footer"></div>
	</div>
	<script type="text/javascript">
		function removeEl(){
			var father = document.getElementById("scroll");
			for(var i = 0;i < father.children.length;i++){
				father.children[i].children[0].onclick = function(){
					var oname = this.parentNode.children[1].children[1].innerHTML;
					father.removeChild(this.parentNode);
					page1();
					var xhr = new XMLHttpRequest();
					xhr.onreadystatechange = function(){
						if(xhr.readyState == 4){
							if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
							}else{
								alert("接受数据发生错误");
							}
						}
					};
					xhr.open("get","remove.php?name=" + oname,true);
					xhr.send(null);
				}
			}
		}
		removeEl();
		function page1(){
			var oscroll = document.getElementById("scroll");
			var num = Math.ceil(oscroll.children.length/3);
			page = 1;
			document.getElementById("pagenum").innerHTML = "第" + page + "页" + "|" + "共" + num + "页";
			for(var i = 0;i < oscroll.children.length;i++){
				oscroll.children[i].style.display = "none";
			}
			var i = (page-1)*3;
			if(i + 3 < oscroll.children.length){
				var j = i+3;
			}else{
				var j = oscroll.children.length;
			}
			for(k = i;k < j;k++){
				oscroll.children[k].style.display = "block";
			}
			document.getElementById("prvPage").onclick = function(){
				if(page != 1){
					page--;
					document.getElementById("pagenum").innerHTML = "第" + page + "页" + "|" + "共" + num + "页";
				}
				for(var i = 0;i < oscroll.children.length;i++){
					oscroll.children[i].style.display = "none";
				}
				var i = (page-1)*3;
				if(i + 3 < oscroll.children.length){
					var j = i+3;
				}else{
					var j = oscroll.children.length;
				}
				for(k = i;k < j;k++){
					oscroll.children[k].style.display = "block";
					
				}
			}
			document.getElementById("nexPage").onclick = function(){
				if(page != num){
					page++;
					document.getElementById("pagenum").innerHTML = "第" + page + "页" + "|" + "共" + num + "页";
				}
				for(var i = 0;i < oscroll.children.length;i++){
					oscroll.children[i].style.display = "none";
				}
				var i = (page-1)*3;
				if(i + 3 < oscroll.children.length){
					var j = i+3;
				}else{
					var j = oscroll.children.length;
				}
				for(k = i;k < j;k++){
					oscroll.children[k].style.display = "block";
					
				}
			}
		}
		page1();
		function xianzhi(){
			var otext2 = document.getElementById("text2");
			var otext3 = document.getElementById("text3");
			otext2.onkeydown = function(){
				if(otext2.value.length > 20){
					otext2.value = otext2.value.slice(0,20);
				}
			}
			otext3.onkeydown = function(){
				if(otext2.value.length > 400){
					otext2.value = otext2.value.slice(0,400);
				}
			}
		}
		xianzhi();
		function section1(){
			var sec = document.getElementById("section1");
			sec.onchange = function(){
				if(sec.value == "0"){
					document.getElementById("text1").style.display = "block";
					document.getElementById("file1").style.display = "none";
				}else{
					document.getElementById("text1").style.display = "none";
					document.getElementById("file1").style.display = "block";
				}
			}
		}
		section1()
		function onclick1(){
			$(".click").click(function(){
		 		$(".hiddenU").stop();
   				$(".hiddenU").slideToggle("quick");
  			});
  			var oul = document.getElementById("left");
  			var olist = oul.getElementsByTagName("li");
  			for(var i = 0;i < olist.length;i++){
  				olist[i].num = i + 1;
  				olist[i].onclick = function(){
  					if(this.num != 2){
  						var odiv = document.getElementById("right");
  						for(var k = 0;k < odiv.children.length;k++){
  							odiv.children[k].style.display = "none";
  						}
  						var odiv = document.getElementById("div" + this.num);
  						odiv.style.display = "block";
	  					for(var j = 0;j < olist.length;j++){
	  						if(olist[j].num ==3||olist[j].num ==4){
	  							olist[j].children[0].style.background = "#f9f9f9";
	  						}else{
	  							olist[j].children[0].style.background = "#fff";
	  						}
	  						olist[j].children[0].style.color = "#45484d";
	  						olist[j].children[0].children[0].src = "image/" + "u" + olist[j].num +".png";
	  					}

						this.children[0].style.background = "#2b99ce";
	  					this.children[0].style.color = "#fff";
	  					this.children[0].children[0].src = "image/" + "hu" + this.num +".png";
  					}
  				}
  			}
		}
		function onclick2(){
			$(".geren").click(function(){
		 		$(".hiddenI").stop();
   				$(".hiddenI").slideToggle("quick");
  			});
  			var odiv = document.getElementById("myinf");
  			for(var i = 1;i < odiv.children.length;i++){
  				odiv.children[i].num = i;
  				odiv.children[i].onclick = function(){
  					for(var j = 1;j < odiv.children.length;j++){
  						if(j !=2 ){
  							odiv.children[j].style.backgroundColor = "#fff";
  							odiv.children[j].children[0].children[0].src = "image/i" + j + ".png" ;
  							odiv.children[j].children[0].children[1].style.color = "#000" ;
  						}else{
  							odiv.children[j].style.backgroundColor = "#f9f9f9";
  							odiv.children[j].children[0].children[1].style.color = "#000" ;
  							odiv.children[j].children[0].children[0].src = "image/i" + j + ".png" ;
  						}
  					}
  					if(this.num != 1){
  						this.style.backgroundColor = "#2b99ce";
  						this.children[0].children[0].src = "image/hi" + this.num + ".png" ;
  						this.children[0].children[1].style.color = "#fff";
  					}
  				}
  			}
		}
		function setImagePreview() {  
		    var docObj=document.getElementById("doc");  
		    var imgObjPreview=document.getElementById("prv"); 
		    imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);  
		    return true;  
		}  
		function setImagePreview1() {  
		    var docObj=document.getElementById("file2");  
		    var imgObjPreview=document.getElementById("prv3"); 
		    imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);  
		    return true;  
		}  
		function show1(){
			var inf = document.getElementById("myinf");
			for(var i = 1;i < inf.children.length;i++){
				inf.children[i].pl = i;
				inf.children[i].onclick = function(){
					document.getElementById("con1").style.display = "none";
					document.getElementById("con2").style.display = "none";
					document.getElementById("con3").style.display = "none";
					document.getElementById("con" + this.pl).style.display = "block";
				}
			}
		}
		onclick1();
		onclick2();
		show1();
		function get_id(){

		}
	</script>
</body>
</html>