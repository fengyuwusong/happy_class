<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<link type="text/css" href="/happy_class/Public/css/scojs.css" rel="stylesheet">
<link type="text/css" href="/happy_class/Public/css/colpick.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/happy_class/Public/css/main.css">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div id="danmup" style="width:100%;height:90%;margin:0 auto;top:-27px;"></div>
<div style="display: none"><span class="glyphicon" aria-hidden="true">&#xe072</span> <span class="glyphicon"
                                                                                           aria-hidden="true">&#xe073</span>
    <span class="glyphicon" aria-hidden="true">&#xe242</span> <span class="glyphicon" aria-hidden="true">&#xe115</span>
    <span class="glyphicon" aria-hidden="true">&#xe111</span> <span class="glyphicon" aria-hidden="true">&#xe096</span>
    <span class="glyphicon" aria-hidden="true">&#xe097</span></div>
</body>



<script type="text/javascript" src="/happy_class/Public/js/jquery-2.1.4.min.js"></script>
<script src="/happy_class/Public/js/jquery.shCircleLoader.js"></script>
<script src="/happy_class/Public/js/sco.tooltip.js"></script>
<script src="/happy_class/Public/js/colpick.js"></script>
<script src="/happy_class/Public/js/jquery.danmu.js"></script>
<script src="/happy_class/Public/js/main.js"></script>
<script>
    var getDanmuUrl = "<?php echo U('Home/Admin/getDanmu');?>";//获取弹幕url
    var addDanmuUrl = "<?php echo U('Home/Admin/addDanmu');?>";//添加弹幕url
    $("#danmup").DanmuPlayer({
        src: "/happy_class/Public" + '/Uploads/<?php echo ($name); ?>/video.mp4',
        height: 380, //区域的高度
        width: 600, //区域的宽度
        urlToGetDanmu: getDanmuUrl + '?class_id=<?php echo ($id); ?>',
        urlToPostDanmu: addDanmuUrl + '?class_id=<?php echo ($id); ?>'
    });
</script>
</html>`