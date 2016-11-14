<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>快乐班级</title>
    <script type="text/javascript" src="/happy_class/Public/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/happy_class/Public/js/index.js"></script>
    <link rel="stylesheet" type="text/css" href="/happy_class/Public/css/index.css">
    <script type="text/javascript" src="/happy_class/Public/danmu/dist/js/danmuplayer.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/happy_class/Public/danmu/dist/css/danmuplayer.css">
    <link rel="stylesheet" type="text/css" href="/happy_class/Public/css/jquery-ui-1.10.4.custom.min.css">
    <script type="text/javascript" src="/happy_class/Public/js/jquery-ui-1.10.4.custom.min.js"></script>
</head>
<body>
<<<<<<< HEAD
<div id="bg">
	<div class="banner">
		<div class="list"></div>
		<div class="charts">
			<span class="char">charts</span>
			<span class="rank">排行榜</span>
		</div>
	</div>
	<div class="vote">
		<div class="xy">
			<img src="/happy_class/Public/image/vote.jpg" alt="">
			<div class="voted_classes">
				<div class="voted_class">15软件2班</div>
				<!-- <div class="voted_class">15软件2班</div>
				<div class="voted_class">15软件2班</div>
				<div class="voted_class">15软件2班</div>
				<div class="voted_class">15软件2班</div>
				<div class="voted_class">15软件2班</div>
				<div class="voted_class">15软件2班</div>
				<div class="voted_class">15软件2班</div>
				<div class="voted_class">15软件2班</div>
				<div class="voted_class">15软件2班</div> -->
			</div>
		</div>
		<div class="offer">*投票数据由星空学生创新中心统计</div>
	</div>
	<div class="vote">
		<div class="votes">
			<span class="votespan">vote</span>
			<span class="tovote">班级投票</span>
		</div>
		<div id="classes">
			<div id="class1" class="class">
			<div class="pic">
				<img  id="cover1" src="/happy_class/Public/image/pic.png" style="width:100%;height:100%;margin:0 auto;">
			</div>
            <div class="num"><span id="id2">14通信1班</span></div>
			</div>
		    <div id="class2" class="class">
		    </div>
		    <div id="class3" class="class">
		    </div>
		    <div id="class4" class="class">
		    </div>
		    <div id="class5" class="class">
		    </div>
		    <div id="class6" class="class">
		    </div>
		    <div id="class7" class="class">
		    </div>
		    <div id="class8" class="class">
		    </div>
		    <div id="class9" class="class">
		    </div>
		    <div id="class10" class="class">
		    </div>
		</div>
	</div>
	<div id="hide"></div>
	<div class="rule">
	<!-- <p>1.一个ip限投一次票</p>
		<p>1.一个ip限投一次票</p>
		<p>1.一个ip限投一次票</p>
		<p>1.一个ip限投一次票</p>
		<p>1.一个ip限投一次票</p>
		<p>1.一个ip限投一次票</p> -->
	</div>
	<div class="section"></div>
	<div class="footer">
		Copyright&copy2006-2016星空学生创新中心</br>
		www.xingkong.us
	</div>
=======

<!-- background: url(../image/beijing2.jpg) no-repeat; -->
<div id="header">
    <!-- 轮播图 -->
    <div class="banner_bg">
        <div id="banner">
            <a class="img img1" target="_blank"></a>
            <a class="img img2" href="http://www.xingkong.us" target="_blank"></a>
            <a class="img img3" target="_blank"></a>
        </div>
        <div id="arrow">
            <span class="arrow_left" id="prev"></span>
            <span class="arrow_right" id="next"></span>
        </div>
    </div>
>>>>>>> 24ec9a3a3da195ae523e8f95687a0fe738d71c42
</div>
<!-- 介绍 -->
<div id="preface">
    <h1>快乐班级比赛简介</h1>
</div>
<!-- 班级 -->
<div id="classes">
    <div id="dialog-form" title="" style="display:none;">
    </div>
</div>
<!-- 底部
<!-- <div id="footer"> -->
<!-- 开发人员 -->
<!-- <div id="developers">
    <div class="developer">
        <div class="people"></div>
    </div>
</div> -->
<!-- </div> -->
<script type="text/javascript">
    var getClassUrl = "<?php echo U('Home/index/getClass');?>";
    var img = $('.banner_bg a');
    var index = 0;//索引
    /*$("#danmup").DanmuPlayer({
     src:"http://oga3de3p0.bkt.clouddn.com/lh9KDdhuc_hLI1N9UN4_cfdKqpDX",       //视频源
     width:800,            //视频宽度
     height:380,            //视频高度
     // speed:20000,            //弹幕速度，这是数值指的是视频穿过672像素所需要的毫秒数
     // sumTime:65535,              //弹幕视频的总时间，可不填
     // danmuList:{},               //弹幕列表
     // defaultColor:"#ffffff",   //弹幕的默认字体颜色
     // fontSizeSmall:16,           //小弹幕的字号
     // FontSizeBig:24,             //大弹幕的字号
     // opacity:"1",            //弹幕默认透明度
     // topBottonDanmuTime:6000,  //底部及顶部弹幕存留的时间
     // urlToGetDanmu:"",     //用来接收弹幕信息的url  (稍后介绍)
     // urlToPostDanmu:"" ,   //用来存储弹幕信息的url  (稍后介绍)
     // maxCountInScreen: 40,   //屏幕上的最大的显示弹幕数目,弹幕数量过多时,优先加载最新的。
     // maxCountPerSec: 10      //每分秒秒钟最多的弹幕数目,弹幕数量过多时,优先加载最新的。
     });*/
</script>
</body>
</html>