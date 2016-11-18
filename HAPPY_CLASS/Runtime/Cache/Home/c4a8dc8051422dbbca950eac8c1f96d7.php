<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>快乐班级</title>
    <link rel="stylesheet" type="text/css" href="/happy_class/Public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/happy_class/Public/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/happy_class/Public/css/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" href="/happy_class/Public/css/scojs.css" rel="stylesheet">
    <link type="text/css" href="/happy_class/Public/css/colpick.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/happy_class/Public/css/main.css">
    <link rel="stylesheet" type="text/css" href="/happy_class/Public/css/index.css">
</head>
<body>
<div id="bg">
    <!-- banner charts 排行榜 -->
    <div class="banner">
        <div class="header">
            <img src="/happy_class/Public/image/xklogo.png" alt="">
        </div>
        <div class="list">
            <!--    <div id="banner">
                   <a class="img img1" target="_blank"></a>
                   <a class="img img2" href="http://www.xingkong.us" target="_blank"></a>
                   <a class="img img3" target="_blank"></a>
               </div>
               <div id="arrow">
                   <span class="arrow_left" id="prev"></span>
                   <span class="arrow_right" id="next"></span>
               </div> -->
        </div>
        <div class="charts">
            <span class="char">charts</span>
            <span class="rank">排行榜</span>
        </div>
    </div>
    <!-- banner charts 排行榜 end-->
    <!-- 投票结果 -->

    <div class="voted">
        <div class="xy">
            <img src="/happy_class/Public/image/vote.jpg" alt="">
            <div class="voted_classes">
            <!-- 排行榜下的班级显示 -->
            <!-- <div class="voted_class class1"><div class="column"><div class="red"></div>
            <div class="white"></div></div>软件2班</div>
            <div class="voted_class"><div class="column"><div class="red"></div>
            <div class="white"></div></div>软件2班</div>
            <div class="voted_class"><div class="column"><div class="red"></div>
            <div class="white"></div></div>软件2班</div>
            <div class="voted_class"><div class="column"><div class="red"></div>
            <div class="white"></div></div>软件2班</div>
            <div class="voted_class"><div class="column"><div class="red"></div>
            <div class="white"></div></div>软件2班</div>
            <div class="voted_class"><div class="column"><div class="red"></div>
            <div class="white"></div></div>软件2班</div>
            <div class="voted_class"><div class="column"><div class="red"></div>
            <div class="white"></div></div>软件2班</div>
            <div class="voted_class"><div class="column"><div class="red"></div>
            <div class="white"></div></div>软件2班</div>
            <div class="voted_class"><div class="column"><div class="red"></div>
            <div class="white"></div></div>软件2班</div>
            <div class="voted_class"><div class="column"><div class="red"></div>
            <div class="white"></div></div>软件2班</div> -->
            </div>
        </div>
        <div class="offer">*投票数据由星空学生创新中心统计</div>
    </div>
    <!-- 投票结果 end -->
    <!-- 投票班级 -->
    <div class="vote">
        <div id="vote">
            <span class="votespan">vote</span>
            <span class="voteclass">班级投票</span>
        </div>
        <div class="blue-up"></div>
        <div id="classes">
            <div class="container">
                <div class="progress progress-striped active" id="load_bar">
                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0"
                         aria-valuemax="100"
                         style="width: 100%">
                        <span class="sr-only">100% Complete</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- 投票班级 end -->
        <!-- 隐藏层 -->
        <div id="mask" class="mask"></div> 
        <div id="hide">
            <div class="close"></div>
            <div class="classname"></div>
            <div class="classnum"></div>
            <!-- 左右切换 -->
       <!--      <button id="left">上一页</button>
            <button id="right">下一页</button> -->
            <!-- 左右切换 end-->
            <div class="putvidoe" style="width:85%;height:64%;margin:0 auto;margin-top:127px;"></div>
            <div class="classsummary"></div>
            <div class="button"></div>
            <div id='class_id' style="display:none"></div>
            <div id="dialog-form" title="请输入验证码" style="display:none;">
                <form>
                    <input type="text" name="pw" id="pw" class="text ui-widget-content ui-corner-all">
                    <div id="picture"><img src="<?php echo U('Home/Index/verify');?>" id="identify" onclick = "this.src='<?php echo U('Home/index/set_verify');?>'"></div>
                </form>
            </div>
        </div>
        <!-- 隐藏层 end -->
        <!-- 规则 -->
        <div class="rule">
            <div class="rules">
                <span class="rulespan">rule</span>
                <span class="prules">投票规则</span>
            </div>
            <!--  <p>1.一个ip限投一次票</p>
             <p>1.一个ip限投一次票</p>
             <p>1.一个ip限投一次票</p>
             <p>1.一个ip限投一次票</p>
             <p>1.一个ip限投一次票</p>
             <p>1.一个ip限投一次票</p> -->
        </div>
        <!-- 规则结束
        <!-- 开发人员 -->
        <div class="thanksection">
            <div class="blue-botton"></div>
            <div id="thanks">
                <span class="thank">thanks</span>
                <span class="thankpeople">开发人员</span>
            </div>
            <div class="peoplepic">
                <div class="engineers">
                    <div>总策划</div>
                    <div class="part1">
                        <div class="name1">
                            <div class="p1"></div>
                            <div class="name">周竻盛</div>
                        </div>
                        <div class="name2">
                            <div class="p2"></div>
                            <div class="name">周竻盛</div>
                        </div>
                    </div>
                    <div class="engineer">
                        <div class="designer">设计师</div>
                        <div class="font">前端工程师</div>
                        <div class="later">后端工程师</div>
                    </div>
                    <div class="part2">
                        <div class="name3">
                            <div class="p3"></div>
                            <div class="name">周竻盛</div>
                        </div>
                        <div class="name4">
                            <div class="p4"></div>
                            <div class="name">周竻盛</div>
                        </div>
                        <div class="name5">
                            <div class="p5"></div>
                            <div class="name">周竻盛</div>
                        </div>
                    </div>
                    <div class="part3">
                        <div class="name6">
                            <div class="p6"></div>
                            <div class="name">周竻盛</div>
                        </div>
                        <div class="name7">
                            <div class="p7"></div>
                            <div class="name">周竻盛</div>
                        </div>
                        <div class="name8">
                            <div class="p8"></div>
                            <div class="name">周竻盛</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 开发人员 end-->
        <!-- 页脚 -->
    </div>
    <!-- 开发人员 end-->
    <!-- 页脚 -->
    <div class="footer">
        Copyright&copy2006-2016星空学生创新中心</br>
        www.xingkong.us
    </div>
    <!-- 页脚 end -->
</div>
</body>
<script type="text/javascript">
    var getClassUrl = "<?php echo U('Home/Index/getClass');?>";	//获取班级信息url
    var getDanmuUrl = "<?php echo U('Home/Admin/getDanmu');?>";//获取弹幕url
    var addDanmuUrl = "<?php echo U('Home/Admin/addDanmu');?>";//添加弹幕url
    var voteUrl="<?php echo U('Home/Index/vote');?>";//投票url
    var pub = "/happy_class/Public";//指向public路径
    var url_check_verify="<?php echo U('Home/Index/check_verify');?>"//验证码
</script>
<script type="text/javascript" src="/happy_class/Public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/happy_class/Public/js/bootstrap.min.js"></script>
<script src="/happy_class/Public/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="/happy_class/Public/js/jquery.shCircleLoader.js"></script>
<script src="/happy_class/Public/js/sco.tooltip.js"></script>
<script src="/happy_class/Public/js/colpick.js"></script>
<script src="/happy_class/Public/js/jquery.danmu.js"></script>
<script src="/happy_class/Public/js/main.js"></script>
<script type="text/javascript" src="/happy_class/Public/js/index.js"></script>
</html>
<!--DanmuPlayer (//github.com/chiruom/danmuplayer/) - Licensed under the MIT license-->