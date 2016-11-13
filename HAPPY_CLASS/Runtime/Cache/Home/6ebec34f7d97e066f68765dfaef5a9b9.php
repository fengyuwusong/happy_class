<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>快乐班级</title>
	<link rel="stylesheet" href="/happy_class/Publiccss/jquery.fullPage.css">
	<link rel="stylesheet" type="text/css" href="/happy_class/Public/css/index1.css">
	<!-- // <script type="text/javascript" src="/happy_class/Public/js/index.js"></script> -->
	<!-- // <script type="text/javascript" src="/happy_class/Public/danmu/dist/js/danmuplayer.min.js"></script> -->
	<!-- <link rel="stylesheet" type="text/css" href="/happy_class/Public/danmu/dist/css/danmuplayer.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="/happy_class/Public/css/jquery-ui-1.10.4.custom.min.css"> -->
	<!-- // <script type="text/javascript" src="/happy_class/Public/js/jquery-ui-1.10.4.custom.min.js"></script> -->
</head>
<body>
	<div id="fullpage">
    <div class="section">第一屏</div>
    <div class="section">第二屏</div>
    <div class="section">
        <div class="slide">第三屏的第一屏</div>
        <div class="slide">第三屏的第二屏</div>
        <div class="slide">第三屏的第三屏</div>
        <div class="slide">第三屏的第四屏</div>
    </div>
    <div class="section">第四屏</div>
</div>
<script type="text/javascript" src="/happy_class/Public/js/jquery-1.11.1.min.js"></script>
<script src="/happy_class/Public/js/fullPage.js"></script>

<script type="text/javascript">
    $('#fullpage').fullpage({
        'verticalCentered': false,
        'css3': true,
        'sectionsColor': ['#254875', '#00FF00', '#254587', '#695684'],
        anchors: ['page1', 'page2', 'page3', 'page4'],
        'navigation': true,
        'navigationPosition': 'right',
        'navigationTooltips': ['fullPage.js', 'Powerful', 'Amazing', 'Simple']
})
</script>
</body>
</html>