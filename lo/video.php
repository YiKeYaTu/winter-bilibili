<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="http://libs.baidu.com/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="assets/css/base.css">
	<link rel="stylesheet" href="video-css.css">
	
</head>
<body>
	<div class="z-header">
		<div class="top_content">
			<img src="image/logo.png" alt="">
			<a href="zhuye.html">主站</a>
			<a href="">画友</a>
			<a href="">游戏中心</a>
			<a href="">直播</a>
			<a href="">手机端</a>
			<a style="color:red;" href="user.html">个人中心</a>
			<input class="btn btn-info" id="loginH" type="button" value="登陆">
			<input class="btn btn-info" id="regH"type="button" value="注册">
		</div>
	</div>
	<div class="bg">
		<div class="bg_content">
			<img src="http://static.hdslb.com/images/header/2014_christmas_logo.png">
		</div>
	</div>
	<div class="num">
		<div class="num_content">
			<a href="zhuye.html">首页</a>
			<a href="anime.html">动画</a>
			<a href="fanju.html">番剧</a>
			<a href="music.html">音乐</a>
			<a href="dance.html">舞蹈</a>
			<a href="game.html">游戏</a>
			<a href="sct.html">科技</a>
			<a href="fun.html">娱乐</a>
			<a href="guichu.html">鬼畜</a>
			<a href="movie.html">电影</a>
			<a href="dianshiju.html">电视剧</a>
			<a href="" class="rank">
			</a>
			<div class="search">
				<form style="float:right" action="" method="post">
					<input type="text" placeholder="" class="form" />
					<input type="submit" class="submit" value="">
				</form>
			</div>
		</div>
	</div>
	<div class="center">
		<div class="center_content">
			<div class="title">
				<h2>啦啦啦</h2>
				<div>
					<a href="">主页</a>
					<span>></span>
					<a style="color: #39C;font-weight:bold;" href="">音乐</a>
					<span class="time" id="data">2015.11.5 10.45</span>
					<img src="image/play_num.png" alt="">
					<span id="ps">1515万</span>
					<img src="image/danmu_num.png" alt="">
					<span id="dms">454</span>
					<img style="top:0px;" src="image/shouchang.png" alt="">
					<span id="pls">344</span>
					<a class="shouchang" href="">
						<img style="margin-right:4px;margin-left:0px;" src="image/pinglun.png" alt="">收藏本视频</a>
				</div>
			</div>
			<div class="up">
				<div>
					<div class="upimg"></div>
					<span>up主:</span>
					<a href="" id="up">我的天啊</a>
				</div>
			</div>
			<span id="innerPage"></span>
			<input type="button" id="lastpage" value="末页">
			<div class="video">
				<div class="object" id="object">
					<video id="embed" style="width:702px;height:494px !important;background: #000;" class="video-js vjs-default-skin"
  controls preload="auto" width="640" height="">
 <source id="embed1" src="<?php include 'aSrc.php' ;?>" type='video/mp4' />
</video>
					<div class="bottom">
						<input type="text" id="danmu_form" placeholder="说点什么吧" class="form-control">
						<a id="sub" href="javascript:void(0)">提交</a>
					</div>
				</div>
				<div class="danmu" id="danmu">
					<div class="inf">
						<div class="div1">
							<img src="" alt="">
							<span>播放数:</span>
							<span id="pn">3777</span>
						</div>
						<div class="div2">
							<img src="" alt="">
							<span>弹幕数:</span>
							<span  id="dm">7228</span>
						</div>
						<div class="div3">
							<img src="" alt="">
							<span>评论数:</span>
							<span id="pl">782</span>
						</div>
					</div>
					<div class="inf1">
						<div class="div4">时间</div>
						<div class="div5" style="width:auto;">评论</div>
						<div class="div6">发送日期</div>
					</div>
				</div>
			</div>
			<div class="tag">
				<span>简介：</span>
				<span id="tag"></span>
			</div>
			<div class="pinglun">
				<div id="click"class="img">
					<a class="click" href="javascript:void(0)"><img src="image/a1.png" alt=""></a>
				</div>
				<div id="write" class="write" style="display:none;">
					<textarea  name="msg" id="comment_text" placeholder="在这里输入评论" class="ipt-txt"></textarea>
					<input type="button" id="sub1" class="btn btn-info" value="提交">
				</div>
				<div class="neirong" id="neirong">
					
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
	<script type="text/javascript">
	var array = new Array;
	var arrayP = new Array;
	var id = window.location.search;//视频ID
	var shiping_name;//视频名称
	var oa1 = document.getElementById("click");
	var neirong = document.getElementById("neirong");
	var la = document.getElementById("lastpage");
	var ine = document.getElementById("innerPage");
	var owrite = document.getElementById("write");
	var osub = document.getElementById("sub");
	var osub1 = document.getElementById("sub1");
	var time1;
	get();
	get_name();
	function lore(){
		document.getElementById("loginH").onclick = function(){
			alert(5);
			window.location.href = "login.html";
		}
		document.getElementById("regH").onclick = function(){
			window.location.href = "register.html";
		}
	}
	lore();
	osub1.onclick = function(){
		subP();
		send_pinglun_num();
	}
	osub.onclick = function(){
		subD();
		send_danmu_num();
	}
	document.getElementById("embed").onplay = function(){
		var a = document.getElementById("object").getElementsByTagName("span");
		for(var i = 0;i < a.length;i++){
			var time = parseInt(a[i].style.left.split("px")[0]);
			$(a[i]).animate({
				left:"-100px"
			},time*10.66)
		}
		g();
	}
	document.getElementById("embed").onpause = function(){
		var a = document.getElementById("object").getElementsByTagName("span");
		$(a).stop();
		clearTimeout(time1);
	}
	function src(){//根据视频ID获取视频的地址（仅用于以地址上传视频的方法另一种本地上传的你来写）
		var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
					 	// document.getElementById("embed1").src = xhr.responseText;
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","echoSrc.php?name=" + shiping_name,true);
			xhr.send(null);
	}
	function subP(){//发表评论 我把内容(neirong)发你 你保存起来
		var b = document.getElementById("comment_text");
		var ovalue = b.value;
		var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
					 	neirong.innerHTML = "";
					 	createP();
					 	b.value = "";
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","getP.php?ovalue="+ovalue+"&name="+shiping_name,true);
			xhr.send(null);
	}
	function subD(){//发表弹幕(你保存 neirong   otime otop dtime这几个数据)
		var ovalue = document.getElementById("danmu_form").value;//弹幕内容
		var top = Math.floor(Math.random()*400+0) + "px";//随机一个弹幕出现的位置
		var time = document.getElementById("embed").currentTime;//视频时间
		var d = new Date();
		var str = d.getFullYear()+"."+(d.getMonth()+1)+"."+d.getDate();//视频外的时间
		// if(time.toString().length > 3){
		// 		time = time.toString().slice(0,3);
		// }
		time = Math.ceil(time);
		var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
						var danmu = document.createElement("span");
						danmu.innerHTML = ovalue;
						danmu.style.position = "absolute";
						danmu.style.top = top;
						danmu.style.left = "650px";
						danmu.style.color = "#fff";
						danmu.style.fontSize = "14px";
						danmu.style.border = "2px solid #fff";
						danmu.style.minWidth = "100px";
						danmu.style.textAlign = "center";
						document.getElementById("object").appendChild(danmu);
						$(danmu).animate({
							left:"-100px"
						},8000);
						var a = document.getElementById("danmu");
						var b = a.children.length;
						for(var i = 2;i < b;i++){
							a.removeChild(a.children[2]);
						}
						get();
						clearTimeout(time1);
						g();
						document.getElementById("danmu_form").value = "";
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","getD.php?ovalue="+ovalue+"&name="+shiping_name+"&otop="+top+"&otime="+time+"&dtime="+str,true);
			xhr.send(null);//这里交互的PHP名称（adddanmu.php）和变量名称看好....
			//交互变量是是引号里面&后面的不带等号的 比如shipingid后面的ID是我的变量
	}
	oa1.onclick = function(){
		oa1.style.display = "none";
		owrite.style.display = "block";
		neirong.style.display = "block";
		la.style.display = "block";
		ine.style.display = "block";
		ine.style.top = 1136 + neirong.offsetHeight - 60 + "px";
		la.style.top = 1136 + neirong.offsetHeight - 63 + "px";
		createP();
	}
		function get(){//通过视频名称获得弹幕信息
			array = new Array;
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){

					 	var array1 = xhr.responseText.split("|");
					 	for(var i = 0;i < array1.length-1;i+=4){
					 		var danmu = {};
					 		danmu.time = array1[i+2];
					 		danmu.top = array1[i+1];
					 		danmu.value = "" + array1[i];
					 		danmu.data = array1[i+3];
					 		array.push(danmu);
					 	}
					 	for(var i = 0;i < array.length;i++){
					 		createD(i);
					 	}
						document.getElementById("dms").innerHTML = array.length;
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","echoD.php?name="+shiping_name,true);
			xhr.send(null);
		}
		function g(){
			var otime = document.getElementById("embed").currentTime;//视频时间
			// if(otime.toString().length > 3){
			// 	otime = otime.toString().slice(0,3);
			// }
			otime = Math.ceil(otime);
			for(var i = 0;i < array.length;i++){
				if(array[i].time == otime){
					var a = document.createElement("span");
					a.innerHTML = array[i].value;
					a.style.position = "absolute";
					a.style.top = array[i].top;
					a.style.left = "650px";
					a.style.color = "#fff";
					a.style.fontSize = "14px";
					a.style.minWidth = "100px";
					a.style.textAlign = "center";
					document.getElementById("object").appendChild(a);
					$(a).animate({
						left:"-100px"
					},8000);
				}
			}
			var ospan = document.getElementsByTagName("span");
			for(var i = 0;i < ospan.length;i++){
				if(ospan[i].style.left == "-100px"){
					document.getElementById("object").removeChild(ospan[i]);
				}
			}
			time1 = setTimeout(g,1000);
		}
		function get_name(){//通过视频ID获取视频的名称 你直接把对应id的视频名称echo出来 交互变量为id 你get id

			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
					 	shiping_name = xhr.responseText;
						get();//获取弹幕
						get_pinglun_num();//获取评论数量
						src();//获取地址
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","getName.php" + id,true);
			xhr.send(null);
		}
		function createD(num){
			var a = document.createElement("div");
			a.className = "inf1 inf2";
			var b = document.createElement("div");
			b.className = "div4";
			b.innerHTML = array[num].time;
			var c = document.createElement("div");
			c.innerHTML = array[num].value;
			c.className = "div5";
			var d = document.createElement("div");
			d.innerHTML = array[num].data;
			d.className = "div6";
			a.appendChild(b);
			a.appendChild(c);
			a.appendChild(d);
			document.getElementById("danmu").appendChild(a);
		}
		function createP(){//以视频的name来获取视频的评论
			var ospan = document.getElementById("innerPage");
			var oneirong = document.getElementById("neirong");
			var lbtn1 = document.getElementById("nextpage");
			var lbtn2 = document.getElementById("lastpage");
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
					 	var array = xhr.responseText.split("|");
					 	var array1 = new Array;
					 	for(var i = 0;i < array.length-1;i++){
					 		var ele = {};
					 		ele.value = array[i];
					 		array1.push(ele);
					 	}
					 	arrayP.length = array1.length;
					 	var num = Math.ceil(array1.length/20);
					 	var bottom = document.createElement("div");
					 	bottom.style.width = "702px";
					 	bottom.style.height = "40px";
					 	bottom.style.position = "relative";
					 	if(num <= 1){
					 		var page = document.createElement("div");
					 		page.style.width = "702px";
					 		for(var i = 0;i < array1.length;i++){
								var a = document.createElement("div");
						 		a.className = "msg";
						 		var oimg = document.createElement("img");
						 		oimg.src = array1[i].img;
						 		var loucheng = document.createElement("span");
						 		loucheng.innerHTML = "#" + (i+1);
						 		var up = document.createElement("a");
						 		up.href = "user.html?id=" + array1[i].id;
						 		up.innerHTML = array1[i].name;
						 		var op = document.createElement("p");
						 		op.innerHTML = array1[i].value;
						 		a.appendChild(oimg);
						 		a.appendChild(loucheng);
						 		a.appendChild(up);
						 		a.appendChild(op);
						 		page.appendChild(a);
					 		}
					 		neirong.appendChild(page);
					 		neirong.appendChild(bottom);
					 		lbtn2.style.display = "none";
					 		ospan.style.top = 1125 + neirong.offsetHeight - 40 - 236 + "px";
					 		ospan.style.left = "298.5px";
					 		ospan.innerHTML = "共1页/" + array1.length + "条评论";
					 	}else{
					 		var num1 = 0;
					 		for(var i = 0;i < num;i++){
					 			var page = document.createElement("div");
					 			page.id = "hid" + (num - i);
					 			page.style.display = "none";
					 			while(page.children.length < 20&&array1[num1] != undefined){
					 				var a = document.createElement("div");
							 		a.className = "msg";
							 		var oimg = document.createElement("img");
							 		oimg.src = array1[num1].img;
							 		var loucheng = document.createElement("span");
							 		loucheng.innerHTML = "#" + (num1+1);
							 		var up = document.createElement("a");
							 		up.href = "user.html?" + array1[num1].id;
							 		up.innerHTML = array1[num1].name;
							 		var op = document.createElement("p");
							 		op.innerHTML = array1[num1].value;
							 		a.appendChild(oimg);
							 		a.appendChild(loucheng);
							 		a.appendChild(up);
							 		a.appendChild(op);
							 		if(i == num-1){
							 			page.style.display = "block"
							 		}
							 		if(page.children.length == 0){
							 			page.appendChild(a);
							 		}else{
							 			page.insertBefore(a,page.children[0]);
							 		}
							 		num1++;
					 			}
					 			neirong.insertBefore(page,neirong.children[0]);
					 			var btn = document.createElement("input");
							 	btn.type = "button";
							 	btn.id ="obtn" + (num - i);
							 	btn.value = num-i;
							 	btn.style.position = "absolute";
							 	btn.style.background = "#fff";
							 	btn.style.border = "1px solid #dedede";
							 	btn.style.width = "27px";
							 	btn.style.height = "27px";
							 	btn.onmouseover = function(){
							 		this.style.background = "#dadada";
							 	}
							 	btn.onmouseout = function(){
							 		this.style.background = "#fff";
							 	}
							 	btn.style.borderRadius = "6px";
							 	if(btn.value > 5){
							 		btn.style.display = "none";
							 	}else{
							 		btn.style.left = 440 + (num - i)*34 + "px";
							 	}
							 	lbtn2.onclick = function(){
							 		for(var i = 0;i < bottom.children.length;i++){
							 			bottom.children[i].style.background = "#fff";
							 			bottom.children[i].style.border = "1px solid #dedede";
							 		}
							 		for(var i = 0;i < neirong.children.length-1;i++){
							 			neirong.children[i].style.display ="none";
							 			if(i == neirong.children.length - 2){
							 				neirong.children[i].style.display = "block";
							 			}
							 		}
							 		for(var l = 0;l < bottom.children.length;l++){
								 			bottom.children[l].style.display = "none";
								 	}
								 	var k = 1;
								 	if(num <= 4){
								 		for(var j = 1;j < num+1;j++){
									 	document.getElementById("obtn" + j).style.left = 440 + k*34 + "px";
									 	document.getElementById("obtn" + j).style.display = "block";
									 	k++;
									 	};
								 	}else{
								 		for(var j = num - 4;j < num+1;j++){
									 	document.getElementById("obtn" + j).style.left = 440 + k*34 + "px";
									 	document.getElementById("obtn" + j).style.display = "block";
									 	k++;
									 	};
								 	}
					 				lbtn2.style.top = 1136 -236  + neirong.offsetHeight - 63 + "px";
							 		ospan.style.top = 1136 - 236 + neirong.offsetHeight - 60 + "px";
							 		bottom.children[bottom.children.length-1].style.background = "#FAFAFA";
							 		bottom.children[bottom.children.length-1].style.border = "none";


							 	}
							 	btn.onclick = function(){
							 		for(var i = 0;i < neirong.children.length-1;i++){
							 			if(neirong.children[i].id == "hid" + this.id.slice(4,this.id.length)){
							 				document.getElementById("hid" + this.id.slice(4,this.id.length)).style.display = "block";
							 			}else{
							 				neirong.children[i].style.display = "none";
							 			}
							 			
							 		}
							 		for(var i = 0;i < bottom.children.length;i++){
							 			bottom.children[i].style.background = "#fff";
							 			bottom.children[i].style.border = "1px solid #dedede";
							 		};
							 		this.style.background = "#FAFAFA";
							 		this.style.border = "none";
							 		if(num != 4){
							 			if(this.value < 4){
							 			for(var l = 0;l < bottom.children.length;l++){
							 				bottom.children[l].style.display = "none";
							 			}
							 			var k = 1;
									 	for(var j = 1;j < num + 1;j++){
										 	document.getElementById("obtn" + j).style.left = 440 + k*34 + "px";
										 	document.getElementById("obtn" + j).style.display = "block";
										 	k++;
										 };
								 		}else if(this.value > num - 3){
								 			for(var l = 0;l < bottom.children.length;l++){
								 				bottom.children[l].style.display = "none";
								 			}
								 			var k = 1;
								 			for(var j = num - 4;j < num+1;j++){
								 				document.getElementById("obtn" + j).style.left = 440 + k*34 + "px";
								 				document.getElementById("obtn" + j).style.display = "block";
								 				k++;
								 			}
								 		}else{
								 			for(var l = 0;l < bottom.children.length;l++){
								 				bottom.children[l].style.display = "none";
								 			}
								 			document.getElementById("obtn" + this.id.slice(4,5)).style.left = "542px";
								 			document.getElementById("obtn" + this.id.slice(4,5)).style.display = "block";
								 			document.getElementById("obtn" + (this.id.slice(4,5)-1) ).style.left = "508px";
								 			document.getElementById("obtn" + (this.id.slice(4,5)-1) ).style.display = "block";
								 			document.getElementById("obtn" + (this.id.slice(4,5)-2) ).style.left = "474px";
								 			document.getElementById("obtn" + (this.id.slice(4,5)-2) ).style.display = "block";
								 			document.getElementById("obtn" + (this.id.slice(4,5)-(-1)) ).style.left = "576px";
								 			document.getElementById("obtn" + (this.id.slice(4,5)-(-1)) ).style.display = "block";
								 			document.getElementById("obtn" + (this.id.slice(4,5)-(-2)) ).style.left = "610px";
								 			document.getElementById("obtn" + (this.id.slice(4,5)-(-2)) ).style.display = "block";
												
							 			}
							 		}
					 				lbtn2.style.top = 1136 -236 + neirong.offsetHeight - 63 + "px";
							 		ospan.style.top = 1136 -236 + neirong.offsetHeight - 60 + "px";
							 	}
							 	ospan.style.top = 1136 -236 + neirong.offsetHeight - 10 + "px";
					 			ospan.innerHTML = "共" + num + "页/" + num1 + "条评论";
							 	bottom.style.positon = "relative";
							 	
					 			lbtn2.style.top = 1136 -236 + neirong.offsetHeight - 13 + "px";
							 	bottom.style.marginTop = "10px";
							 	bottom.insertBefore(btn,bottom.children[0]);
					 		}
					 	}
					 	neirong.appendChild(bottom);
					 	document.getElementById("pls").innerHTML = array1.length;
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","echoP.php?name="+shiping_name,true);//我把视频id发你 你get id把那个视频下的评论 评论人的头像地址  评论人的名称发我 评论人的ID 用|连接这种形式（呵呵|iamge/hehe.png|啊啊|250|）
			xhr.send(null);
		}
		function get_pinglun_num(){
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
						var array = xhr.responseText.split("|");
					 	var array1 = new Array;
					 	for(var i = 0;i < array.length-1;i++){
					 		var ele = {};
					 		ele.value = array[i];
					 		array1.push(ele);
					 	}
						document.getElementById("pls").innerHTML = array1.length;
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","echoP.php?name="+shiping_name,true);
			xhr.send(null);
		}
		function send_danmu_num(){
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
						document.getElementById("dms").innerHTML = array.length;
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","getDN.php?name" + shiping_name+"&number="+array.length,true);
			xhr.send(null);
		}
		function send_pinglun_num(){
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4){
					if(xhr.status >= 200&&xhr.status < 300||xhr.status == 304){
						document.getElementById("pls").innerHTML = arrayP.length;
					}else{
						alert("接受数据发生错误");
					}
				}
			};
			xhr.open("get","getPN.php?name" + shiping_name+"&number="+arrayP.length,true);
			xhr.send(null);
		}
		
	</script>
</body>
</html> 