// 点击图片
function clickPic(cover, name, id, num, info) {
    $('#' + cover).on('click', function (e) {
        showMask();
        document.documentElement.style.overflow = 'hidden';
        $('.putvidoe').html('<div id="danmup" style="width:100%;height:90%;margin:0 auto;top:-27px;"> </div> <div style="display: none"> <span class="glyphicon" aria-hidden="true">&#xe072</span> <span class="glyphicon" aria-hidden="true">&#xe073</span> <span class="glyphicon" aria-hidden="true">&#xe242</span> <span class="glyphicon" aria-hidden="true">&#xe115</span> <span class="glyphicon" aria-hidden="true">&#xe111</span> <span class="glyphicon" aria-hidden="true">&#xe096</span> <span class="glyphicon" aria-hidden="true">&#xe097</span> </div>');
        var top = ($(window).height() - $("#hide").height()) / 2;
        var left = ($(window).width() - $("#hide").width()) / 2;
        var scrollTop = $(document).scrollTop();
        var scrollLeft = $(document).scrollLeft();
        var width = $("#hide").width * 0.75 + 'px';
        var height = $("#hide").height * 0.2 + 'px';
        $("#hide").css({'top': top + scrollTop, "left": left + scrollLeft}).show();
        blue();
        $(".classname").text(name);
        $(".classnum").text(num + '票');
        $(".classsummary").text(info);
        $(".button").text("投票");
        $("#class_id").text(id);
        $("#danmup").DanmuPlayer({
            src: pub + '/Uploads/' + name + '/video.mp4',
            height: "height", //区域的高度
            width: 600, //区域的宽度
            urlToGetDanmu: getDanmuUrl + '?class_id=' + id,
            urlToPostDanmu: addDanmuUrl + '?class_id=' + id
        });
    });
}

//获取班级信息并排版
function getClass() {
    $(".container").show();
    $.ajax({
        type: "get",
        url: getClassUrl,
        data: {},
        dataType: "json",
        success: function (res) {
            // console.log(res);
            var str = '';
            $('.voted_classes').html('');
            for (var i = 0; i < res.data.length; i++) {
                var columnH = res.data[i].num / 4000 * 343;
                var transparentH = 343 - columnH;
                str += '<div class="voted_class class1">' +
                    '<div class="column">' +
                    '<div class="transparent" style="height:' + transparentH + 'px;"></div>' +
                    '<div class="white" style="height:' + columnH + 'px;"></div></div>' +
                    res.data[i].name +
                    '</div>';
            }
            $('.voted_classes').html(str);
            str = '';
            //添加班级排版
            $("#classes").html('');
            for (var i = 0; i < res.data.length; i++) {
                str += '<div id="class' + i + '" class="class">' +
                    '<div class="pic">' +
                    '<img id="cover' + i + '" src="' + pub + '/Uploads/' + res.data[i].name + '/mainCover.jpg" style="width:100%;height:100%;margin:0 auto;">' +
                    '</div>' +
                    '<div class="name"><span id="name"' + res.data[i].id + '>' + res.data[i].name + '</span></div>' +
                    '</div>';
            }
            $("#classes").html(str);

            //每个班级添加点击事件
            for (var i = 0; i < res.data.length; i++) {
                clickPic("cover" + i, res.data[i].name, res.data[i].id, res.data[i].num, res.data[i].info);
            }
            //关闭按钮添加隐藏事件
            $(".close").on("click", function (e) {
                $("#hide").hide();
                document.documentElement.style.overflow = 'visible';
                hideMask();
                $('.putvidoe').html('');//取消弹幕插件的应用
            });
            $(".container").hide();
        }
    });
}
//点击投票后的方法
function vote(class_id) {
    //弹出验证框
    $("#dialog-form").dialog({
        autoOpen: true,
        modal: true,
        draggable: false,
        resizable: false,
        position: ['center'],
        width: 400,
        /*show: 'blind',
         hide: 'blind',*/
        // left:20,
        // top:20,
        // dialogClass: 'ui-dialog-osx',
        buttons: {
            "确定": function () {
                var dialog1 = $(this);
                //输入验证，点击确定后的事件
                $.ajax({
                    type: "post",
                    url: voteUrl,
                    data: {
                        class_id: class_id,
                        code: $("#pw").val(),
                    },
                    dataType: "json",
                    success: function (res) {
                        if (res.code == false)
                            alert(res.Mes);
                        else {
                            alert(res.Mes);
                            $(".button").text("已投");
                            $(".button").unbind();//消除点击投票的方法
                            dialog1.dialog("close");
                        }
                    }
                });
            },
            "取消": function () {
                $(this).dialog("close");
            }
        },

    });
}
//显示遮罩层
function showMask() {
    $("#mask").css("height", $(document).height());
    $("#mask").css("width", $(document).width());
    $("#mask").show();
}
//隐藏遮罩层  
function hideMask() {
    $("#mask").hide();
}
// 蓝色：滚动条消失时
function blue() {
    var width = (document.body.clientWidth);
    $(".blue-up").css({"border-left": width + "px solid transparent"});
    $(".blue-botton").css({"border-left": width + "px solid rgb(4,130,201)"});
}
$(document).ready(function () {
    getClass();
    $("#hide").hide();
    blue();
    //点击投票后触发的事件
    $(".button").on("click", function (e) {
        vote($("#class_id").text());
    });
});
